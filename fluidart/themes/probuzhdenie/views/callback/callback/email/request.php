<html>

<head></head>

<body>
	<h1>
		<?= $_POST['themeCallback']; ?>
	</h1>
	<table cellpadding="6" cellspacing="0" style="border-collapse: collapse;">
		<tr>
			<td style="padding:6px; width:170px; background-color:#f0f0f0; border:1px solid #e0e0e0;">
				<?= Yii::t('CallbackModule.callback', 'Name') ?>
			</td>
			<td style="padding:6px; width:330px; background-color:#ffffff; border:1px solid #e0e0e0;">
				<?= CHtml::encode($model->name); ?>
			</td>
		</tr>
		<tr>
			<td style="padding:6px; background-color:#f0f0f0; border:1px solid #e0e0e0;">
				E-mail:
			</td>
			<td style="padding:6px; background-color:#ffffff; border:1px solid #e0e0e0;">
				<?= CHtml::encode($model->email); ?>
			</td>
		</tr>
		<tr>
			<td style="padding:6px; background-color:#f0f0f0; border:1px solid #e0e0e0;">
				<?= Yii::t('CallbackModule.callback', 'Phone') ?>
			</td>
			<td style="padding:6px; background-color:#ffffff; border:1px solid #e0e0e0;">
				<?= CHtml::encode($model->phone); ?>
			</td>
		</tr>		
		<tr>
			<td style="padding:6px; background-color:#f0f0f0; border:1px solid #e0e0e0;">
				Количество участников
			</td>
			<td style="padding:6px; background-color:#ffffff; border:1px solid #e0e0e0;">
				<?= CHtml::encode($model->count); ?>
			</td>
		</tr>
		<!--<tr>
			<td>Время:</td>
			<td>
				<?php /*if(!empty($model->time)){
						if ($model->time == 'now'){
							echo 'Сейчас';
						}
						elseif(($model->time == 'time') && (!empty($model->hour))){
							echo $model->hour;
						}	
						elseif(($model->time == 'time') && (empty($model->hour))){
							echo 'не указано';
						}
						else{
							echo 'не указано';
						}
					}*/
				?>
			</td>
		</tr>-->
	</table>
</body>

</html>