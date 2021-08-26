<!DOCTYPE html>
<html lang="<?= Yii::app()->language; ?>">
<head>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_START);?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="ru-RU" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?= $this->title;?></title>
    <meta name="description" content="<?= $this->description;?>" />
    <meta name="keywords" content="<?= $this->keywords;?>" />

    <?php if ($this->canonical): ?>
        <link rel="canonical" href="<?= $this->canonical ?>" />
    <?php endif; ?>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <?php
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/style.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/style_new.css');
	
	Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/html5lightbox/html5lightbox.js');
/*    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/blog.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/bootstrap-notify.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.li-translit.js');*/
    ?>
    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
    </script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--    <link rel="stylesheet" href="http://yandex.st/highlightjs/8.2/styles/github.min.css">
    <script src="http://yastatic.net/highlightjs/8.2/highlight.min.js"></script>-->

<!— Facebook Pixel Code —>
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '939704699761382');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=939704699761382&ev=PageVie.."
/></noscript>
<!— End Facebook Pixel Code —>

    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_END);?>
</head>

<body>

<?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_START);?>

<!-- container -->
<div class="container-site">

	<!-- header -->
	<?php $this->renderPartial('//layouts/_header'); ?>
	<!-- header end -->

	<div class="row">
		<?= $content; ?>
	</div>

	<!-- footer -->
	<?php $this->renderPartial('//layouts/_footer'); ?>
	<!-- footer end -->
	
 </div>
 <!-- end container -->
 
 
 <?php $this->widget('application.modules.callback.widgets.CallbackWidget', ['name_link'=>'Заказать звонок']); ?>
 
<?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_END);?>


 <?php Yii::app()->clientScript->registerScript('menu', '
	$(document).ready(function(){
 	 
		$("#menu-left").on("click", function(){
			$(".left-panel-menu").addClass("menu-left-vis");
		});

		$(".close").on("click", function(){
			$(".left-panel-menu").removeClass("menu-left-vis");
		});
		
		var owl = $(".owl-carousel-1");
		owl.owlCarousel();

		$(".right-slide").click(function() {
			owl.trigger("next.owl.carousel");
		})
		
		$(".left-slide").click(function() {
			owl.trigger("prev.owl.carousel");
		})

	});'
); ?>

 <?php Yii::app()->clientScript->registerScript('callback',
'	$(".btn-callback-link").on("click", function(){

			var theme = $(this).attr("data-theme");
						
			//$("#Callback_comment").val(theme);
			
			$("#title-header-callback").html(theme);
			$("#themeCallback").val(theme);
		
	});
'
);?>


 <script>
  /*$(document).ready(function(){
    $("a[href*=#]").on("click", function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 1000);
        e.preventDefault();
        return false;
    });
});*/
</script>


<?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_END);?>

</body>
</html>
