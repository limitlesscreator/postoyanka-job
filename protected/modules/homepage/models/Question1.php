<?php
class Question1 extends Question {

	public $question = 'Для кого Вы ищете занятие рисованием?';
	public function rules() {
		return array(
			array( 'answer', 'safe' ),
			array( 'answer', 'required', 'message'=>'Необходимо ответить на вопрос')
		);
	}

	public function attributeLabels() {
		return array(
			'answer' => 'Для кого Вы ищете занятие рисованием?'
		);
	}

	public function getForm() {
		return new CForm( array(
			'showErrorSummary' => false,
			'elements' => array(
				'answer' => array(
					'type' => 'radiolist',
					'items' => array( 'Для себя' => 'Для себя', 'Для ребенка' => 'Для ребенка', 'В подарок' => 'В подарок'),
					'layout' =>'{label}{input}{error}',
					'separator' =>'<div class="separator"></div>',
				),
			),
			'buttons' => array(
				'submit' => array(
					'type' => 'submit',
					'class' => 'sbtmForm',
					'label' => 'Далее'
				)
			)
		), $this );
	}
}