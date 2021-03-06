<?php
use yupe\widgets\YWidget;

/**
 * Class FeedbackWidget
 */
class FeedbackWidget extends YWidget
{
    /**
     * @var string
     */
    public $view = 'default';
    public $data = [];

    /**
     * @throws CException
     */
    public function run()
    {
        $model = new FeedBackForm();
		$model->data = serialize($this->data);

        $module = Yii::app()->getModule('feedback');

        if (Yii::app()->getUser()->isAuthenticated()) {
            $model->email = Yii::app()->getUser()->getProFileField('email');
            $model->name = Yii::app()->getUser()->getProFileField('nick_name');
        }

        $this->render($this->view, [
            'model' => $model,
            'module' => $module,
        ]);
    }
}