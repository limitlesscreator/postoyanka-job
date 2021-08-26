<div class="header-panel">
	<div class="content-site">
	
		<div class="row">
			<div class="col-lg-6 col-sm-12 col-xs-12 logo">
				<?php if (Yii::app()->hasModule('contentblock')): ?>
					<?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'logo']); ?>
				<?php endif; ?>
			</div>
 
			<div class="col-lg-6 col-sm-12 col-xs-12 contact-block">
				<?php if (Yii::app()->hasModule('contentblock')): ?>
					<?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'contacts']); ?>
				<?php endif; ?>
			</div>
		</div>
		
	</div>
</div><!-- end header-panel -->