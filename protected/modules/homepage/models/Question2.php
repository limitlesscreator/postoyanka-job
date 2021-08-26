<?php
class Question2 extends Question {
 
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
			$text = 'Ребенок ранее занимался рисованием?';
		}
		elseif($answer == 'В подарок'){
			$text = 'Человек ранее занимался рисованием?';
		}
		else {
			$text = 'Вы ранее занимались рисованием?';
		}
		return array(
			'answer' => $text
		);
	}
	
	public function question(){
		$questions = ['Да, рисовал(и)' => 'Да, рисовал(и)', 'Нет, пока' => 'Нет, пока', 'Пробовал(а), ничего не вышло' => 'Пробовал(а), ничего не вышло'];
		if ($this->getSession() == 'Для ребенка'){
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
