<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<link href="favicon.jpg" rel="shortcut icon" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Мастер-класс по живописи, картина маслом с нуля">
	<title>Мастер-классы по живописи со скидкой</title>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<style>.white-window{position: fixed;background: white;width: 100%;height: 100%;top: 0;left: 0;z-index: 999;}</style>
	<div class="white-window"></div>
	<header>
		<a href="#firstDisplay" class="go"><img src="images/logotype.min.png" alt="Арт-студия Пробуждение"></a>
		<!--<nav>
			<a href="#about">О студии</a>
			<a href="#mk-schedule">Расписание</a>
			<a href="#reviwes">Отзывы</a>
			<a href="#operating-procedure">Что будет</a>
			<a href="#slider">Работы участников</a>
			<a href="#seven-reasons">Преимущества студии</a>
			<a href="#price">Стоимость</a>
			<a href="#maps">Филиалы</a>
		</nav>-->
		<div class="mobile-button">
			<hr>
			<hr>
			<hr>
		</div>
		<div class="telefon">
			<p>+7 (812) 645   01  80</p>
			<a href="Обратный звонок" class="reg-me">обратный звонок</a>
		</div>
	</header>
	<section id="firstDisplay">	
		<section class="utp">
			<p>Спасибо за заявку! </br>
			Менеджер свяжется с Вами в ближайшее время</p>
			<a href="http://art-enjoy.ru/mk" class="but-more go">На сайт</a>
			<p><span>Опыт и навыки рисования не требуются!</span></p>
		</section>
	</section>
	<section style="margin-top: 20px" class="mobile-none">
				<div class="header-wrapper">
					<hr
					><h1>Жизнь струдии онлайн</h1
					><hr>
				</div>
				<div class="slider-center">
				<!-- Видеонаблюдение -->
					<iframe src="//ipeye.ru/ipeye_service/api/iframe.php?iframe_player=1&dev=42828c0130494d62b76a3f4e75d9289b&autoplay=0&archive=1" width="800" height="600" frameBorder="0" seamless="seamless" allowfullscreen>Ваш браузер не поддерживает фреймы!</iframe>
					<!--<iframe src="//ipeye.ru/ipeye_service/api/api.php?dev=42828c0130494d62b76a3f4e75d9289b&tupe=rtmp&autoplay=0&logo=1" width="800" height="600" frameBorder="0" seamless="seamless">Ваш браузер не поддерживает фреймы!</iframe>-->
				<!-- Видеонаблюдение -->
				</div>
			</section>
	</section>			
	<footer>	
		<div class="social-block">
			<a href="https://vk.com/studio_probuzhdenie" target="_blank">
				<img src="images/vk.png" alt="группа в Вконтакте Арт-студии Пробуждение">
			</a
			><a href="http://instagram.com/studio_probuzhdenie"  target="_blank">
				<img src="images/insta.png" alt="профиль инстаграм Арт-студии Пробуждение">
			</a>
		</div>
		<p>©  Арт-студия "Пробуждение", Санкт-Петербург <br>2015 - 2018 гг. </p>
	</footer>
	<!--Всплывающие окна-->
	<div class="white-window"></div>
	<!--Описание МК-->
	<div class="open-win">
		<div class="connect-you">
			<p>Спасибо за заявку <br>
			<br>В ближайшее время наш менеджер свяжется с Вами
			</p>
		</div>
		<form action="reg.php" method="POST" id="open-form">
			<img src="images/close.png" alt="Закрыть">
			<input type="text" placeholder="введите Ваше имя" autocomplete="off" name="name"><br>
			<input type="tel" placeholder="введите Ваш телефон" name="phone"><br>
			<input type="hidden" id="dataMk" name="MKN">
			<input type="hidden" id="rezult" name="utm">
			<input type="hidden" id="rezult1" name="utm1">
			<input type="hidden" id="rezult2" name="utm2">
			<input type="hidden" id="rezult3" name="utm3">
			<input type="hidden" id="rezult4" name="utm4">
			<input type="submit" onclick="ga('send', 'event', 'submit', 'send_order'); yaCounter37136130.reachGoal('send_order'); return true;" value="отправить" class="submit">
		</form>
	</div>		
	<!--Мобильное меню-->
	<div class="mobile-menu">
		<p href="#about">О студии</p>
		<p href="#mk-schedule">Расписание</p>
		<p href="#reviwes">Отзывы</p>
		<p href="#operating-procedure">Что будет</p>
		<p href="#seven-reasons">Преимущества студии</p>
		<p href="#price">Стоимость</p>
		<p href="#maps">Филиалы</p>
		<p> <a href="tel:+78126450180" style="color: #F057AE;">Позвонить нам</a></p>
	</div>
	<link href="css/style.min.css" rel="stylesheet">
	<link href="fotorama/fotorama.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/utm.min.js"></script>
	<script src="fotorama/fotorama.js"></script>
	<script src="js/scripts.min.js"></script>
	<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter37136130 = new Ya.Metrika({ id:37136130, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/37136130" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
	<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-108235704-1', 'auto');
		  ga('require', 'displayfeatures');
		  ga('send', 'pageview');

		  /* Accurate bounce rate by time */
		  if (!document.referrer ||
		  document.referrer.split('/')[2].indexOf(location.hostname) != 0)
		  setTimeout(function(){
		  ga('send', 'event', 'Новый посетитель', location.pathname);
		  }, 15000);
		</script>
	<!-- Google Analytics -->
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
</body>

</html></hтмл>
