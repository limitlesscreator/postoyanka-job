<?php
class Question extends CFormModel {
	public $answer;

	public function getForm() {
		return new CForm(array(
			'showErrorSummary'=>true,
			'elements'=>array(
				'answer'=>array()
			),
			'buttons'=>array(
				'submit'=>array(
					'type'=>'submit',
					'label'=>(get_class($this)==='Question5'?'Finish':'Next')
				)
			)
		), $this);
	}
}