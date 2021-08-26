<?php
class Question4 extends Question {
	public function rules() {
		return array(
			array( 'answer', 'safe' ),
			array( 'answer', 'required', 'message'=>'Необходимо ответить на вопрос')
		);
	}
	
	public function getSession(){
		$session = $_SESSION['Wizard.steps'];
		return $session['question_1']['answer'];
	}

	public function attributeLabels() {
		return array(
			'answer' => 'Когда примерно планирует(е) начать занятия?'
		);
	}
	
	public function question(){
		$questions = ['Как можно скорее' => 'Как можно скорее', 'Через неделю' => 'Через неделю', 'В течение месяца' => 'В течение месяца'];
 
		if ($this->getSession() == 'Для ребенка' || $this->getSession() == 'В подарок'){
			$result = array_merge ($questions, ['Пока не знаю'=>'Пока не знаю']);
			return($result);
		}
		return($questions);
	}
	

	public function getForm(){
		return new CForm( array(
			'showErrorSummary' => false,
			'elements' => array(
				'answer' => array(
					'type' => 'radiolist',
					'items' => $this->question(),
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