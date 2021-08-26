<?php
class Question5 extends Question {
	public function rules() {
		return array(
			array( 'answer', 'safe' ),
			array( 'answer', 'required', 'message'=>'Необходимо ответить на вопрос')
		);
	}

	public function attributeLabels() {
		return array(
			'answer' => 'Какой район Санкт-Петербурга удобнее для занятий?'
		);
	}

	public function getForm() {
		return new CForm( array(
			'showErrorSummary' => false,
			'elements' => array(
				'answer' => array(
					'type' => 'radiolist',
					'items' => array('ст.м. Горьковская' => 'ст.м. Горьковская', 'ст.м. Звенигородская' => 'ст.м. Звенигородская', 'Пока не знаю' => 'Пока не знаю' ),
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