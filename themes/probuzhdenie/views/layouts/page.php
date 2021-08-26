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
    
    <link href="https://fonts.googleapis.com/css?family=Tenor+Sans&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap&subset=cyrillic" rel="stylesheet">

    <?php
		Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/style.css');
 
    ?>
    
    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
    </script>
 
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_END);?>
</head>

<body>

<?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_START);?>

<div class="container-site page-callback">
    <div class="block-callback-finish text-center">
        <?php if (Yii::app()->hasModule('contentblock')): ?>
        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'logo-finish']); ?>
        <?php endif; ?>
        <?php if (Yii::app()->hasModule('contentblock')): ?>
        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'result-callback']); ?>
        <?php endif; ?>
    </div>
</div> <!-- end container-site -->

<?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_END);?>
    
<!-- Facebook Pixel Code -->
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
src="https://www.facebook.com/tr?id=939704699761382&ev=PageVie.."/>
</noscript>
<!-- End Facebook Pixel Code -->
    
</body>
</html>