<html>

<head>
	<title>Сообщение с сайта!</title>
</head>

<body>

	<p>
		<?= Yii::t('FeedbackModule.feedback', 'Имя:'); ?>
		<?= $model->name ?>
	</p>
	<p>
		<?= Yii::t('FeedbackModule.feedback', 'E-mail:'); ?>
		<?= $model->email; ?>
	</p>
	<p>
		<?= Yii::t('FeedbackModule.feedback', 'Телефон:'); ?>
		<?= $model->phone; ?>
	</p>

	<p>Ответы на вопросы:</p>

	<?php foreach ($model->data as $key=>$value): ?>
	<div>
		<?php
		$modelName = ucfirst( str_replace( '_', '', $key ) );
		$question = new $modelName();
		$quest = $question->attributeLabels($value['answer']);
		?>
		<label>
			<?= $quest['answer'];?></label>
		<?= $value['answer'];?>
	</div>

	<?php endforeach; ?>
	

</body>

</html>