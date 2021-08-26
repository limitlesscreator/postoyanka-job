<div style="margin: 50px auto;" class="hidden-xs">
<h3 class="title-block-page before-title">Жизнь студии онлайн</h3>
	<iframe src="//ipeye.ru/ipeye_service/api/iframe.php?iframe_player=1&dev=42828c0130494d62b76a3f4e75d9289b&autoplay=0&archive=1" width="800" height="600" frameBorder="0" seamless="seamless" style="margin: 0px auto; margin-top: 50px; display: block;" allowfullscreen>Ваш браузер не поддерживает фреймы!</iframe>
</div>
<div class="footer">
	<div class="content-site">
		<div class="row">
			<div class="col-lg-5 logo">
				<?php if (Yii::app()->hasModule('contentblock')): ?>
					<?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'logo']); ?>
				<?php endif; ?>
				<div class="agreement">
					<?php if (Yii::app()->hasModule('contentblock')): ?>
						<?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'agreement']); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-3 socnetwork">
				<?php if (Yii::app()->hasModule('contentblock')): ?>
					<?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'socnetwork']); ?>
				<?php endif; ?>
			</div>
			<div class="col-lg-4 contact-block">
				<?php if (Yii::app()->hasModule('contentblock')): ?>
					<?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'contacts']); ?>
				<?php endif; ?>
				<div class="copyright hidden-xs hidden-sm"><a href="http://ashdigital.ru/?utm_source=art-corporat&utm_medium=clik&utm_campaign=promo">Разработано: ASH-Digital</a></div>
			</div>
		</div>
	</div>
</div>