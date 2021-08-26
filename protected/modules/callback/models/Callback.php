<?php

/**
 * Class Callback
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $time
 * @property string $comment
 * @property integer $status
 * @property string $create_time
 * @property string $url
 */
class Callback extends \yupe\models\YModel
{
	
	public $time = 'time';
	public $hour;
	public $count;
 
	
    /**
     *
     */
    const STATUS_NEW = 0;
    /**
     *
     */
    const STATUS_PROCESSED = 1;
	
	public $verifyCode;

    /**
     * @return string
     */
    public function tableName()
    {
        return '{{callback}}';
    }

    /**
     * @param null|string $className
     * @return $this
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            ['name, phone', 'required'],
            ['name, comment', 'filter', 'filter' => 'trim'],
            ['name', 'length', 'max' => 30],
            ['time', 'length', 'max' => 5],
			[
				'email', 'email'
			],			
			[
				'hour, count', 'safe'
			],
/*            [
                'time',
                'match',
                'pattern' => '/^([0-1][0-9]|[2][0-3]):([0-5][0-9])$/',
                'message' => Yii::t('CallbackModule.callback', 'Incorrect time value'),
            ],*/
/*         [
                'phone',
                'match',
                'pattern' => Yii::app()->getModule('callback')->phonePattern,
                'message' => Yii::t('CallbackModule.callback', 'Incorrect phone value'),
            ],*/
/*            [
                'verifyCode',
                'captcha',
				'captchaAction'=>'/callback/callback/captcha/',
                'allowEmpty' => Yii::app()->getUser()->isAuthenticated(),
            ],*/
            ['comment', 'safe'],
            ['status', 'numerical', 'integerOnly' => true],
            ['url', 'url'],
            ['id, name, phone, time, comment, status, create_time, url', 'safe', 'on' => 'search'],
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('CallbackModule.callback', 'Name'),
            'phone' => Yii::t('CallbackModule.callback', 'Phone'),
            'time' => Yii::t('CallbackModule.callback', 'Time'),
            'comment' => 'Сообщение',
            'hour' => 'Желаемое время',
            'count' => 'Количество участников',
            'status' => Yii::t('CallbackModule.callback', 'Status'),
            'create_time' => Yii::t('CallbackModule.callback', 'Created At'),
            'url' => Yii::t('CallbackModule.callback', 'Url'),
			'verifyCode' => 'Код проверки',
        ];
    }

    /**
     * @return array
     */
    public function scopes()
    {
        return [
            'new' => [
                'condition' => 'status = :status',
                'params' => [':status' => self::STATUS_NEW],
            ],
            'processed' => [
                'condition' => 'status = :status',
                'params' => [':status' => self::STATUS_PROCESSED],
            ],
        ];
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'CTimestampBehavior' => [
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'create_time',
                'updateAttribute' => null,
            ],
        ];
    }

    /**
     * @return CActiveDataProvider
     */
    public function search()
    {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id);
        $criteria->compare('comment', $this->comment, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('time', $this->time, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('url', $this->url, true);

        return new CActiveDataProvider(
            $this, [
                'criteria' => $criteria,
                'sort' => ['defaultOrder' => 'id DESC'],
            ]
        );
    }

    /**
     * @return array
     */
    public function getStatusList()
    {
        return [
            self::STATUS_NEW => 'Новый',
            self::STATUS_PROCESSED => 'Обработан',
        ];
    }

    /**
     * @return array
     */
    public function getStatusLabelList()
    {
        return [
            self::STATUS_NEW => ['class' => 'label-danger'],
            self::STATUS_PROCESSED => ['class' => 'label-success'],
        ];
    }
}