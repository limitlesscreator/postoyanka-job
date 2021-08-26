<?php
/**
 * @var FeedbackForm $model
 * @var TbActiveForm $form
 * @var FeedbackModule $module
 */
?>
<div class="row feedback-form-block">
   <h4>Мы также закрепим за вашим номером <br>телефона скидку 30% на первое занятие</h4>
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', [
        'id' => 'feedback-widget-form',
        'type' => 'inline',
        'action' => ['/feedback/contact/index'],
        'enableClientValidation' => true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
            'afterValidate'=>'js:feedbackWidgetFormSend'
        ),
        'htmlOptions' => ['onsubmit'=>"yaCounter50591854.reachGoal('send_order'); gtag('event', 'send_order'); return true;"]
    ]); ?>
 

    <div class="row">
        <div class="col-xs-12">
            <?= $form->textFieldGroup($model, 'name', 
			['widgetOptions' => [
					'htmlOptions' => [
						'placeholder' => 'Как к Вам обращаться'
					]
				]
			]); ?>
        </div>
    </div>
 

    <div class="row">
        <div class="col-xs-12">
            <?= $form->textFieldGroup($model, 'phone'); ?>
        </div>
    </div>    
       
	<!--<div class="row">
        <div class="col-xs-12">
            <?php /*echo $form->textFieldGroup($model, 'email', 
			['widgetOptions' => [
					'htmlOptions' => [
						'placeholder' => 'Ваш E-mail'
					]
				]
			]);*/ ?>
        </div>
    </div>-->
    
    <?= $form->hiddenField($model, 'data'); ?>
 

    <?php /*if ($module->showCaptcha && !Yii::app()->getUser()->isAuthenticated()): ?>
        <?php if (CCaptcha::checkRequirements()): ?>
            <?php $this->widget('CCaptcha', [
                'showRefreshButton' => true,
                'imageOptions' => [
                    'width' => '150',
                ],
                'buttonOptions' => [
                    'class' => 'btn btn-info',
                ],
                'buttonLabel' => '<i class="glyphicon glyphicon-repeat"></i>',
            ]); ?>
            <div class="row">
                <div class="col-xs-12">
                    <?= $form->textFieldGroup($model, 'verifyCode', [
                        'widgetOptions' => [
                            'htmlOptions' => [
                                'placeholder' => Yii::t(
                                    'FeedbackModule.feedback',
                                    'Insert symbols you see on image'
                                )
                            ],
                        ],
                    ]); ?>
                </div>
            </div>
        <?php endif; ?>
    <?php endif;*/ ?>

 
	<button type="submit" class="btn btn-success">
		Получить консультацию и варианты абонементов
		<div class="flare"></div>
	</button>

<span>Нажимая на кнопку, вы даете согласие на обработку<br>
своих персональных данных и соглашаетесь с<br>
Пользовательским соглашением</span>
    <?php $this->endWidget(); ?>
</div>

<script type="text/javascript">
    function feedbackWidgetFormSend(form, data, hasError) {
        if (hasError) {
            return false;
        }

        $.ajax({
            method: 'POST',
            url: form.attr('action'),
            data: form.serialize(),
            success: function(data){
                var type = data.result ? 'success' : 'danger';
                $('#notifications').notify({message:{text:data.data},type:type}).show();
				$('.feedback-form-block').html(data.data);

                if (data.result) {
                    form.trigger('reset');
                }
            }
        });

        return false;
    }
</script>