<?php
$correctAnswers=0;
$tbody = '<tbody>';
/*echo '<pre>';
print_r($event->data);
Yii::app()->end();*/
foreach ($event->data as $step=>$data):
	$modelName = ucfirst(str_replace('_','',$step));
	$model = new $modelName();
	$model->answer = (isset($data['answer'])?$data['answer']:'');
 

	$tbody .= '<tr>';
	$tbody .= '<th>'.$model->getAttributeLabel('answer').'</th>';
	$tbody .= '<td>'.htmlentities($model->answer).'</td>';
	//$tbody .= '<td>'.$model->correct_answer.'</td>';
	//$tbody .= '<td>'.($model->isAnswerCorrect?'Yes':'No').'</td></tr>';
endforeach;
$tbody .= '</tbody>';
?>
<h2>Quiz Results</h2>
<table>
<thead><tr><th>Question</th><th>You Answered</th><th>Correct Answer</th><th>Correct</th></tr></thead>
<tfoot><tr><th colspan="3" style="font-weight:bold;padding-right:1em;text-align:right;">Your Score</th><td style="font-weight:bold;"><?php echo $correctAnswers.'/'.count($event->data); ?></td></tr></tfoot>
<?php echo $tbody; ?>
</table>
<?php
echo CHtml::link('Choose Another Demo', '/');

