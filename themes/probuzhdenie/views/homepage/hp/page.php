<?php
/** @var Page $page */

if ( $page->layout ) {
	$this->layout = "//layouts/{$page->layout}";
}

$this->title = $page->title;
$this->breadcrumbs = [
	Yii::t( 'HomepageModule.homepage', 'Pages' ),
	$page->title
];
$this->description = !empty( $page->description ) ? $page->description : Yii::app()->getModule( 'yupe' )->siteDescription;
$this->keywords = !empty( $page->keywords ) ? $page->keywords : Yii::app()->getModule( 'yupe' )->siteKeyWords ?>

<div class="content-site">
	<div class="main-page">
		
		<div class="row hidden-sm hidden-xs">
			<div class="col-sm-4 col-xs-12 text-main-page">
				<div class="text-block-main-page">
					<?= $page->body; ?>
				</div>
			</div>
			<div class="col-sm-8 hidden-xs image-main-page">
				<!-- <img src="/uploads/image/653947bd064d76046a595c577b175d34.jpg"> -->
				<div class="slider">
					<div id="slider">
						<?php
						$this->widget( 'application.modules.gallery.widgets.OwlCarouselWidget', array(
							'view' => 'owl-child',
							'galleryId' => 2,
							'options' => [
								'items' => 1,
								'loop' => true,
								'autoplay' => true,
								'autoplaySpeed' => 1300,
								'autoplayHoverPause' => false,
								'smartSpeed' => 350,
								'fluidSpeed' => 150,
								'dragEndSpeed' => 150,
								'animateOut' => 'fadeOut',
								'animateIn' => 'fadeIn',
								'nav' => false,
								'navText' => [ "<i class='fa fa-angle-left' aria-hidden='true'></i>
						", "<i class='fa fa-angle-right' aria-hidden='true'></i>" ],
								'dots' => false,
								'responsiveClass' => false,
							]
						) );
						?>
						<?php $mainAssets = Yii::app()->getTheme()->getAssetsUrl(); ?>
						<?php //= CHtml::image($mainAssets . '/images/slider-mask.png', '', ['class'=>'slider-mask']); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row visible-xs visible-sm">
			<div class="col-lg-4 col-sm-12 col-xs-12 text-main-page">
				<div class="text-block-main-page">
					<p><label>9873 довольных клиента за <br> 4,5 года работы студии</label>
					</p>
					<h2><label>Золотая осень - золотые скидки! <br>Картина на холсте всего <br>за 1500 рублей. <br>Справитесь, даже если ни разу <br>не держали кисть. <br>Все материалы включены.</label></h2>
					<p><label>Ежедневно с 11:00 до 14:00 и с 19:00 до 22:00 <br>Размер холста 30х4</label>
					</p>
					<div class="link-test-block">
						<a href="#test" class="callback-link link-test" data-toggle="modal" data-target="#callbackModal" data-theme="Записаться">Записаться
						<div class="flare">
						</div></a>
						<p><label>Оставьте заявку прямо сейчас<br> и посетите показательный мастер-класс бесплатно!</label></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12 col-xs-12">
				<div class="pay" style="margin: 30px auto 0;">
					<div class="slider">
						<div id="slider">
							<?php
							$this->widget( 'application.modules.gallery.widgets.OwlCarouselWidget', array(
								'view' => 'owl-child',
								'galleryId' => 2,
								'options' => [
									'items' => 1,
									'loop' => true,
									'autoplay' => true,
									'autoplaySpeed' => 1300,
									'autoplayHoverPause' => false,
									'smartSpeed' => 350,
									'fluidSpeed' => 150,
									'dragEndSpeed' => 150,
									'animateOut' => 'fadeOut',
									'animateIn' => 'fadeIn',
									'nav' => false,
									'navText' => [ "<i class='fa fa-angle-left' aria-hidden='true'></i>
							", "<i class='fa fa-angle-right' aria-hidden='true'></i>" ],
									'dots' => false,
									'responsiveClass' => false,
								]
							) );
							?>
							<?php $mainAssets = Yii::app()->getTheme()->getAssetsUrl(); ?>
							<?= CHtml::image($mainAssets . '/images/slider-mask.png', '', ['class'=>'slider-mask']); ?>
							<div class="navs">
								<i class='fa fa-angle-left left-slide' aria-hidden='true'></i><i class='fa fa-angle-right right-slide' aria-hidden='true'></i>
							</div>
						</div>
					</div>
				</div> <!-- end pay -->
			</div>
		</div>
	</div>
</div>

<div class="desc-block">
	<?php if (Yii::app()->hasModule('contentblock')): ?>
	<?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'title-desc-block']); ?>
	<?php endif; ?>
	<div class="desc-block-container">
		<div class="content-site-page">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1 col-xs-12 manager">
					<?php if (Yii::app()->hasModule('contentblock')): ?>
					<?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'test-desc']); ?>
					<?php endif; ?>
				</div>
				<div class="col-sm-6 col-sm-offset-1 col-xs-12 desc-block-panel">
					<?php if (Yii::app()->hasModule('contentblock')): ?>
					<?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'desc-block']); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="review-btn-content" style="text-align: center;">
				<div class="review-btn" style="margin: 20px auto; width: 300px;">
					<?php if (Yii::app()->hasModule('contentblock')): ?>
					<?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'review-btn']); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- end desc-block -->

<div class="pluses">
	<div class="our-pluses">
		<?php if (Yii::app()->hasModule('contentblock')): ?>
		<?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'our-pluses']); ?>
		<?php endif; ?>
	</div>
</div> <!-- end pluses -->

<div class="prices">
	<?php if (Yii::app()->hasModule('contentblock')): ?>
	<?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'prices']); ?>
	<?php endif; ?>
</div> <!-- end pluses -->

<div class="about">
	<?php if (Yii::app()->hasModule('contentblock')): ?>
	<?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'about']); ?>
	<?php endif; ?>
</div> <!-- end pluses -->

<div class="pay" style="margin: 50px auto;">
	<!-- <div class="content-site-page">
		<div class="pay-block">
			<?php //if (Yii::app()->hasModule('contentblock')): ?>
			<?php //$this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'pay']); ?>
			<?php //endif; ?>
		</div>
	</div> -->
	<div class="slider">
		<?php if (Yii::app()->hasModule('contentblock')): ?>
			<?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'slider']); ?>
		<?php endif; ?>
		<div id="slider">
			<?php
			$this->widget( 'application.modules.gallery.widgets.OwlCarouselWidget', array(
				'view' => 'owl-child',
				'galleryId' => 1,
				'options' => [
					'items' => 1,
					'loop' => true,
					'autoplay' => true,
					'autoplaySpeed' => 1300,
					'autoplayHoverPause' => false,
					'smartSpeed' => 350,
					'fluidSpeed' => 150,
					'dragEndSpeed' => 150,
					'animateOut' => 'fadeOut',
					'animateIn' => 'fadeIn',
					'nav' => false,
					'navText' => [ "<i class='fa fa-angle-left' aria-hidden='true'></i>
			", "<i class='fa fa-angle-right' aria-hidden='true'></i>" ],
					'dots' => true,
					'responsiveClass' => false,
				]
			) );
			?>
			<?php $mainAssets = Yii::app()->getTheme()->getAssetsUrl(); ?>
			<?= CHtml::image($mainAssets . '/images/slider-mask.png', '', ['class'=>'slider-mask']); ?>
			<div class="navs">
				<i class='fa fa-angle-left left-slide' aria-hidden='true'></i><i class='fa fa-angle-right right-slide' aria-hidden='true'></i>
			</div>
		</div>
	</div>
</div> <!-- end pay -->