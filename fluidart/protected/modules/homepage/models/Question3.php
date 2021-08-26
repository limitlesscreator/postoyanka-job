<?php
class Question3 extends Question {
	
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

	public function attributeLabels($answer=null) {
 		if(is_null($answer)){
			$answer = $this->getSession();
		}
		if ($answer == 'Для ребенка'){
			$text = 'Ребенок планирует учиться в группе или индивидуально?';
		}
		elseif($answer =='В подарок'){
			$text = 'Человек планирует учиться в группе или индивидуально?';
		}
		else {
			$text = 'Вы планируете учиться в группе или индивидуально?';
		}
		return array(
			'answer' => $text
		);
	}
	

	
	public function question(){
		$questions = ['Индивидуально' => 'Индивидуально', 'С семьей или в команде друзей' => 'С семьей или в команде друзей', 'В группе, но из знакомых пригласить некого' => 'В группе, но из знакомых пригласить некого'];
 
		if ($this->getSession() == 'Для ребенка' || $this->getSession() == 'В подарок'){
			$result = array_merge ($questions, ['Не знаю'=>'Не знаю']);
			return($result);
		}
		return($questions);
	}

	public function getForm() {
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