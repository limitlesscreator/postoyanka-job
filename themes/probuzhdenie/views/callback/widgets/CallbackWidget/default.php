<?php
/**
 * @var Callback $model
 * @var string $phoneMask
 * @var TbActiveForm $form
 */
?>

<div id="callbackModal" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="modal-body-content-text">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="<?= Yii::t('CallbackModule.callback', 'Close') ?>">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 id="title-header-callback" class="modal-title">Укажите ваши контактные данные и наш специалист свяжется с вами</h4>
<!--                 <h5>Оставьте заявку прямо сейчас и получите картину в подарок!</h5> -->
            </div>
            <?php $form = $this->beginWidget(
                'bootstrap.widgets.TbActiveForm',
                [
                    'id' => 'callback-form',
                    'type' => 'inline',
                    'action' => Yii::app()->createUrl('/callback/callback/send'),
                    'enableClientValidation' => true,
                    'clientOptions' => [
                        'validateOnSubmit' => true,
                        'afterValidate' => 'js:callbackSendForm'
                    ],
                    'htmlOptions' => ['onsubmit'=>"yaCounter50591854.reachGoal('send_order'); gtag('event', 'send_order'); return true;"]
                ]
            ); ?>

            <div class="modal-body">
                <div class="row">

					<div class="row">
						<div class="col-sm-12">
							<?= $form->textFieldGroup($model, 'name', [
								'widgetOptions' => [
									'htmlOptions' => [
										'placeholder' => 'Как к Вам обращаться'
									]
								]
							]); ?>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<?= $form->textFieldGroup($model, 'phone'); ?>
						</div>
					</div>					
					
					<!-- <div class="row" id="email-field">
						<div class="col-sm-12">
							<?= $form->textFieldGroup($model, 'count'); ?>
						</div>
					</div>		 -->				
					
					<!--<div class="row hour-time">
						<div class="col-sm-12 radio-buttons">
							<?= $form->radioButtonList($model, 'time', ['now'=>'Сейчас', 'time'=>'По времени'], ['class'=>'radio', 'separator'=>'', 'id' => 'timeCall']); ?>
						</div>
					</div>
								
					<div class="row">
						<div class="col-sm-12 hours">
							<?= $form->textFieldGroup($model, 'hour', [
								'widgetOptions' => [
									'htmlOptions' => [
										'placeholder' => 'Например: сегодня с 12 до 13'
									]
								]
							]); ?>
						</div>
					</div>-->
					<!--<div class="row hide" id="question">
						<div class="col-sm-12">
							<?php /*$form->textAreaGroup($model, 'comment', [
								'widgetOptions' => [
									'htmlOptions' => [
										'rows' => 5
									]
								]
							]);*/ ?>
						</div>
					</div>-->
               
               		<!--<div class="row">
						<?php /*if (!Yii::app()->getUser()->isAuthenticated()): ?>
							<?php if (CCaptcha::checkRequirements()): ?>
								<div class="col-sm-6 col-xs-12">
									<?php $this->widget('CCaptcha', [
											'captchaAction' => '/callback/callback/captcha/',
											'showRefreshButton' => true,
											'imageOptions' => [
												'width' => '150',
											],
											'buttonOptions' => [
												'class' => 'btn btn-info',
											],
											'buttonLabel' => '<i class="glyphicon glyphicon-repeat"></i>',
									]); ?>
									<?= $form->textFieldGroup($model, 'verifyCode', [
										'widgetOptions' => [
											'htmlOptions' => [
												'placeholder' => 'Введите символы c изображения'
											],
										],
									]); ?>
								</div>
							<?php endif; ?>
						<?php endif;*/ ?>

					</div>-->
               		
               		<?= CHtml::hiddenField('themeCallback'); ?>
                
                	<div class="row">
                		<div class="col-sm-12">
							<button type="submit" class="btn btn-success" id="callback-send">
								Подтвердить
								<div class="flare"></div>
							</button>
                		</div>
                	</div>
                	
                	<label class="agree">
                		Нажимая на кнопку, вы даете согласие на обработку своих персональных данных и соглашаетесь с Пользовательским соглашением
                	</label>

                </div>
            </div>
           
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
