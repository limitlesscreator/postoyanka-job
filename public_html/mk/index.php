<!DOCTYPE HTML>
<html>
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
fbq('init', '168066685195885');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=168066685195885&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
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
        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<body>
	<style> .white-window{position: fixed;background: white;width: 100%;height: 100%;top: 0;left: 0;z-index: 999;}</style>
	<div class="white-window"></div>
	<header>
		<a href="#firstDisplay" class="go"><img src="images/logotype.min.png" alt="Арт-студия Пробуждение"></a>
		<nav>
			<!--<a href="#about">О студии</a>-->
			<a href="#mk-schedule">Расписание</a>
			<a href="#reviwes">Отзывы</a>
			<a href="#operating-procedure">Что будет</a>
			<a href="#slider">Работы участников</a>
			<!--<a href="#seven-reasons">Преимущества студии</a>-->
			<a href="#price">Стоимость</a>
			<a href="#maps">Контакты</a>
		</nav>
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
	<section style="background-image: url(./images/bg_1920new.jpg); height: 60%; background-position: center";  id="firstDisplay">

	</section>
<section class="utp">
			<p class="firstTextTitle" style="font-size:48px;text-align:center;font-weight: 700;margin:0 auto">Напишите свою картину маслом на холсте <br class="deleteBR"/>  под руководством художника</p>
			<a style='background: pink; color: black; margin-top: 50px'  href="#mk-schedule" class="but-more go">Смотреть расписание</a>
			<p class="secondTextTitle" style="font-size:44px; text-align:center;margin:50px auto 0">
				Мастер-класс все включено от 2000₽, <br class="deleteBR"/> навыки рисования от Вас не требуются!
			</p>

		</section>
	<!--<section id="about">	
		<p>	
			
		</p>
		<a href="#mk-schedule" class="go"><img src="images/arrow-down.png" alt=""></a>
		<a href="Кнопка: Записаться в блоке о нас" class="but_up" style="width: 200px;" >Записаться</a>
	</section>-->
	<section id="mk-schedule" class="pinkBG">
		<div class="header-wrapper">
			<hr><h1>Расписание мастер-классов со скидками 30%</h1><hr>
			<br>
			<br>
			<br>
			<p class="text-dop">Выбирайте удобный Вам день, время и сюжет мастер-класса. Мы работаем для Вас ежедневно с 10:00 до 22:00</p>
		</div>
		
		<section class="wrapper">


<!-- <script> -->
	<!-- let month = new Date.month -->
	<!-- // console.log(month) -->
<!-- </script> -->

	<div id="root"></div>

<script type="text/babel">

$('.open-win').hide();
$('.white-window').hide();
$('.connect-you').hide();


$('.open-win').click(function(event) {
  if ($(event.target).closest("#open-form").length) return;
      $('.open-win').fadeOut(500);
  event.stopPropagation();
});

$('.open-win img').click(function() {
    $('.open-win').fadeOut(500);
});


$('nav a, .go').click(function(e){
        var anchor = $(this);
        var hh = 34; //header height

        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - hh + 'px'
        }, 750);
    e.preventDefault();
    });

$('.mobile-menu p').click(function(e){
        var anchor = $(this);
        var hh = 34; //header height
        $('.mobile-menu').toggleClass("t");
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - hh + 'px'
        }, 750);
    e.preventDefault();
    });


  $("#open-form").submit(function(e) { //устанавливаем событие отправки для формы с id=form
    e.preventDefault();
    var form_data = $(this).serialize(); //собераем все данные из формы
    $.ajax({
    type: "POST", //Метод отправки
    url: $('#open-form').attr('action'), //путь до php фаила отправителя
    data: form_data,
    success: function() {
    //код в этом блоке выполняется при успешной отправке сообщения
    window.location.href = "thanks.php" //открываем страницу "спасибо"
    $('#open-form').fadeOut(500);
    $('.connect-you').fadeIn(500);
    setTimeout(function() {    // Выставляем таймер
      $('.open-win').hide(500);
    }, 4500);

    }
  });
});

$('.mobile-button').click(function(){
  $('.mobile-menu').toggleClass("t");
});


$('.reg-me, .but_up').click(function(e){
    var a = $(this).attr('href');
    $('.open-win').fadeIn(900);
    $('#dataMk').attr("value",a);
    e.preventDefault();
});



$('.img-mk').click(function(){
  console.log('hi')
  var img = $(this);
  var src = img.attr('src');
  $('body').append("<div class='popup'>"+
                    "<div class='popup_bg'></div>"+
                    "<img src='"+src+"' class='popup_img' />"+ // Само увеличенное фото
                    "</div>");
  $('.popup').fadeIn(800);
  $('header').fadeOut(300);
  $('#firstDisplay').fadeOut(300);
  $('.popup_bg').click(function(){
    $('.popup').fadeOut(800);    // Медленно убираем всплывающее окно
    $('header').fadeIn(300);
    $('#firstDisplay').fadeIn(800);
    setTimeout(function() {    // Выставляем таймер
      $('.popup').remove();
    }, 800);
  });
});




	    function weekDay(day:any){
        switch (day){
            case 'Mon':
                return 'Понедельник'
            case 'Tue':
                return 'Вторник'
            case 'Wed':
                return 'Среда'
            case 'Thu':
                return 'Четверг'
            case 'Fri':
                return 'Пятница'
            case 'Sat':
                return 'Суббота'
            case 'Sun':
                return 'Воскресенье'
        }
    }
    	    function months(month:any){
        switch (month){

            case 0:
                return 'Января'
            case 1:
                return 'Февраля'
            case 2:
                return 'Марта'
             case 3:
                return 'Апреля'
            case 4:
                return 'Мая'
            case 5:
                return 'Июня'
            case 6:
                return 'Июля'
            case 7:
                return 'Августа'
            case 8:
                return 'Сентября'
            case 9:
                return 'Октября'
            case 10:
                return 'Ноября'
            case 11:
                return 'Декабря'

        }
    }
    const month1 = 0
    const month2 = 1



      ReactDOM.render(
      <div>






           <div class="day-item">
           	<div class="head-day-item">
           		<p class="day-date">24 {months(month1)} - {weekDay((new Date(2024, month1,24)).toString().slice(0,3))}</p>
           		<div id="day-24" class="day-discript">
           			<p>Посмотреть сюжеты</p>
           			<img src="images/arrow-2.png" alt=""/></div>
           	</div>
           <div id="day-24-img" class="img-container">
           	<img src="images/mk/24/r1.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/24/r2.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/24/r3.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/24/r4.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/24/r5.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/24/r6.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/24/r7.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/24/r8.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/24/r9.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/24/r10.jpg" alt="" class="img-mk"/>
           	<a href="24  сентября - пятница" class="reg-me-but reg-me">Записаться</a>
           </div>
           </div>
           <div class="day-item">
           	<div class="head-day-item">
           		<p class="day-date">25 {months(month1)} - {weekDay((new Date(2024, month1,25)).toString().slice(0,3))}</p>
           		<div id="day-25" class="day-discript">
           			<p>Посмотреть сюжеты</p>
           			<img src="images/arrow-2.png" alt=""/></div>
           	</div>
           <div id="day-25-img" class="img-container">
           	<img src="images/mk/25/r1.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/25/r2.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/25/r3.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/25/r4.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/25/r5.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/25/r6.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/25/r7.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/25/r8.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/25/r9.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/25/r10.jpg" alt="" class="img-mk"/>
           	<a href="25  сентября - суббота" class="reg-me-but reg-me">Записаться</a>
           </div>
           </div>
           <div class="day-item">
           	<div class="head-day-item">
           		<p class="day-date">26 {months(month1)} - {weekDay((new Date(2024, month1,26)).toString().slice(0,3))}</p>
           		<div id="day-26" class="day-discript">
           			<p>Посмотреть сюжеты</p>
           			<img src="images/arrow-2.png" alt=""/></div>
           	</div>
           <div id="day-26-img" class="img-container">
           	<img src="images/mk/26/r1.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/26/r2.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/26/r3.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/26/r4.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/26/r5.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/26/r6.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/26/r7.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/26/r8.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/26/r9.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/26/r10.jpg" alt="" class="img-mk"/>
           	<a href="26  сентября - воскресенье" class="reg-me-but reg-me">Записаться</a>
           </div>
           </div>
           <div class="day-item">
           	<div class="head-day-item">
           		<p class="day-date">27 {months(month1)} - {weekDay((new Date(2024, month1,27)).toString().slice(0,3))}</p>
           		<div id="day-27" class="day-discript">
           			<p>Посмотреть сюжеты</p>
           			<img src="images/arrow-2.png" alt=""/></div>
           	</div>
           <div id="day-27-img" class="img-container">
           	<img src="images/mk/27/r1.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/27/r2.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/27/r3.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/27/r4.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/27/r5.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/27/r6.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/27/r7.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/27/r8.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/27/r9.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/27/r10.jpg" alt="" class="img-mk"/>
           	<a href="27  сентября - понедельник" class="reg-me-but reg-me">Записаться</a>
           </div>
           </div>
           <div class="day-item">
           	<div class="head-day-item">
           		<p class="day-date">28 {months(month1)} - {weekDay((new Date(2024, month1,28)).toString().slice(0,3))}</p>
           		<div id="day-28" class="day-discript">
           			<p>Посмотреть сюжеты</p>
           			<img src="images/arrow-2.png" alt=""/></div>
           	</div>
           <div id="day-28-img" class="img-container">
           	<img src="images/mk/28/r1.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/28/r2.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/28/r3.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/28/r4.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/28/r5.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/28/r6.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/28/r7.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/28/r8.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/28/r9.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/28/r10.jpg" alt="" class="img-mk"/>
           	<a href="28  сентября - вторник" class="reg-me-but reg-me">Записаться</a>
           </div>
           </div>
           <div class="day-item">
           	<div class="head-day-item">
           		<p class="day-date">29 {months(month1)} - {weekDay((new Date(2024, month1,29)).toString().slice(0,3))}</p>
           		<div id="day-29" class="day-discript">
           			<p>Посмотреть сюжеты</p>
           			<img src="images/arrow-2.png" alt=""/></div>
           	</div>
           <div id="day-29-img" class="img-container">
           	<img src="images/mk/29/r1.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/29/r2.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/29/r3.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/29/r4.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/29/r5.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/29/r6.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/29/r7.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/29/r8.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/29/r9.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/29/r10.jpg" alt="" class="img-mk"/>
           	<a href="Записаться" class="reg-me-but reg-me">Записаться</a>
           </div>
           </div>
           <div class="day-item">
           	<div class="head-day-item">
           		<p class="day-date">30 {months(month1)} - {weekDay((new Date(2024, month1,30)).toString().slice(0,3))}</p>
           		<div id="day-30" class="day-discript">
           			<p>Посмотреть сюжеты</p>
           			<img src="images/arrow-2.png" alt=""/></div>
           	</div>
           <div id="day-30-img" class="img-container">
           	<img src="images/mk/30/r1.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/30/r2.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/30/r3.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/30/r4.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/30/r5.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/30/r6.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/30/r7.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/30/r8.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/30/r9.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/30/r10.jpg" alt="" class="img-mk"/>
           	<a href="Записаться" class="reg-me-but reg-me">Записаться</a>
           </div>
           </div>
           <div class="day-item">
           	<div class="head-day-item">
           		<p class="day-date">31 {months(month1)} - {weekDay((new Date(2024, month1,31)).toString().slice(0,3))}</p>
           		<div id="day-31" class="day-discript">
           			<p>Посмотреть сюжеты</p>
           			<img src="images/arrow-2.png" alt=""/></div>
           	</div>
           <div id="day-31-img" class="img-container">
           	<img src="images/mk/31/r1.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/31/r2.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/31/r3.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/31/r4.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/31/r5.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/31/r6.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/31/r7.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/31/r8.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/31/r9.jpg" alt="" class="img-mk"/>
           	<img src="images/mk/31/r10.jpg" alt="" class="img-mk"/>
           	<a href="Записаться" class="reg-me-but reg-me">Записаться</a>
           </div>
           </div>
            <div className="day-item">
                <div className="head-day-item">
                    <p className="day-date">1 {months(month2)} - {weekDay((new Date(2024, month2, 1)).toString().slice(0, 3))}</p>
                    <div id="day-1" className="day-discript">
                        <p>Посмотреть сюжеты</p>
                        <img src="images/arrow-2.png" alt=""/></div>
                </div>
                <div id="day-1-img" className="img-container">
                    <img src="images/mk/1/r1.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/1/r2.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/1/r3.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/1/r4.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/1/r5.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/1/r6.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/1/r7.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/1/r8.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/1/r9.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/1/r10.jpg" alt="" className="img-mk"/>
                    <a href="Записаться" className="reg-me-but reg-me">Записаться</a>
                </div>
            </div>

            <div className="day-item">
                <div className="head-day-item">
                    <p className="day-date">2 {months(month2)} - {weekDay((new Date(2024, month2, 2)).toString().slice(0, 3))}</p>
                    <div id="day-2" className="day-discript">
                        <p>Посмотреть сюжеты</p>
                        <img src="images/arrow-2.png" alt=""/></div>
                </div>
                <div id="day-2-img" className="img-container">
                    <img src="images/mk/2/r1.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/2/r2.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/2/r3.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/2/r4.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/2/r5.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/2/r6.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/2/r7.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/2/r8.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/2/r9.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/2/r10.jpg" alt="" className="img-mk"/>
                    <a href="Записаться" className="reg-me-but reg-me">Записаться</a>
                </div>
            </div>
            <div className="day-item">
                <div className="head-day-item">
                    <p className="day-date">3 {months(month2)} - {weekDay((new Date(2024, month2, 3)).toString().slice(0, 3))}</p>
                    <div id="day-3" className="day-discript">
                        <p>Посмотреть сюжеты</p>
                        <img src="images/arrow-2.png" alt=""/></div>
                </div>
                <div id="day-3-img" className="img-container">
                    <img src="images/mk/3/r1.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/3/r2.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/3/r3.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/3/r4.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/3/r5.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/3/r6.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/3/r7.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/3/r8.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/3/r9.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/3/r10.jpg" alt="" className="img-mk"/>
                    <a href="Записаться" className="reg-me-but reg-me">Записаться</a>
                </div>
            </div>
            <div className="day-item">
                <div className="head-day-item">
                    <p className="day-date">4 {months(month2)} - {weekDay((new Date(2024, month2, 4)).toString().slice(0, 3))}</p>
                    <div id="day-4" className="day-discript">
                        <p>Посмотреть сюжеты</p>
                        <img src="images/arrow-2.png" alt=""/></div>
                </div>
                <div id="day-4-img" className="img-container">
                    <img src="images/mk/4/r1.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/4/r2.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/4/r3.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/4/r4.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/4/r5.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/4/r6.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/4/r7.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/4/r8.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/4/r9.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/4/r10.jpg" alt="" className="img-mk"/>
                    <a href="Записаться" className="reg-me-but reg-me">Записаться</a>
                </div>
            </div>
            <div className="day-item">
                <div className="head-day-item">
                    <p className="day-date">5 {months(month2)} - {weekDay((new Date(2024, month2, 5)).toString().slice(0, 3))}</p>
                    <div id="day-5" className="day-discript">
                        <p>Посмотреть сюжеты</p>
                        <img src="images/arrow-2.png" alt=""/></div>
                </div>
                <div id="day-5-img" className="img-container">
                    <img src="images/mk/5/r1.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/5/r2.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/5/r3.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/5/r4.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/5/r5.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/5/r6.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/5/r7.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/5/r8.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/5/r9.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/5/r10.jpg" alt="" className="img-mk"/>
                    <a href="Записаться" className="reg-me-but reg-me">Записаться</a>
                </div>
            </div>


            <div className="day-item">
                <div className="head-day-item">
                    <p className="day-date">6 {months(month2)} - {weekDay((new Date(2024, month2, 6)).toString().slice(0, 3))}</p>
                    <div id="day-6" className="day-discript">
                        <p>Посмотреть сюжеты</p>
                        <img src="images/arrow-2.png" alt=""/></div>
                </div>
                <div id="day-6-img" className="img-container">
                    <img src="images/mk/6/r1.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/6/r2.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/6/r3.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/6/r4.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/6/r5.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/6/r6.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/6/r7.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/6/r8.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/6/r9.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/6/r10.jpg" alt="" className="img-mk"/>
                    <a href="Записаться" className="reg-me-but reg-me">Записаться</a>
                </div>
            </div>
            <div className="day-item">
                <div className="head-day-item">
                    <p className="day-date">7 {months(month2)} - {weekDay((new Date(2024, month2, 7)).toString().slice(0, 3))}</p>
                    <div id="day-7" className="day-discript">
                        <p>Посмотреть сюжеты</p>
                        <img src="images/arrow-2.png" alt=""/></div>
                </div>
                <div id="day-7-img" className="img-container">
                    <img src="images/mk/7/r1.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/7/r2.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/7/r3.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/7/r4.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/7/r5.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/7/r6.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/7/r7.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/7/r8.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/7/r9.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/7/r10.jpg" alt="" className="img-mk"/>
                    <a href="Записаться" className="reg-me-but reg-me">Записаться</a>
                </div>
            </div>
            <div className="day-item">
                <div className="head-day-item">
                    <p className="day-date">8 {months(month2)} - {weekDay((new Date(2024, month2, 8)).toString().slice(0, 3))}</p>
                    <div id="day-8" className="day-discript">
                        <p>Посмотреть сюжеты</p>
                        <img src="images/arrow-2.png" alt=""/></div>
                </div>
                <div id="day-8-img" className="img-container">
                    <img src="images/mk/8/r1.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/8/r2.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/8/r3.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/8/r4.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/8/r5.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/8/r6.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/8/r7.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/8/r8.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/8/r9.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/8/r10.jpg" alt="" className="img-mk"/>
                    <a href="Записаться" className="reg-me-but reg-me">Записаться</a>
                </div>
            </div>

            <div className="day-item">
                <div className="head-day-item">
                    <p className="day-date">9 {months(month2)} - {weekDay((new Date(2024, month2, 9)).toString().slice(0, 3))}</p>
                    <div id="day-9" className="day-discript">
                        <p>Посмотреть сюжеты</p>
                        <img src="images/arrow-2.png" alt=""/></div>
                </div>
                <div id="day-9-img" className="img-container">
                    <img src="images/mk/9/r1.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/9/r2.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/9/r3.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/9/r4.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/9/r5.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/9/r6.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/9/r7.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/9/r8.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/9/r9.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/9/r10.jpg" alt="" className="img-mk"/>
                    <a href="Записаться" className="reg-me-but reg-me">Записаться</a>
                </div>
            </div>

            <div className="day-item">
                <div className="head-day-item">
                    <p className="day-date">10 {months(month2)} - {weekDay((new Date(2024, month2, 10)).toString().slice(0, 3))}</p>
                    <div id="day-10" className="day-discript">
                        <p>Посмотреть сюжеты</p>
                        <img src="images/arrow-2.png" alt=""/></div>
                </div>
                <div id="day-10-img" className="img-container">
                    <img src="images/mk/10/r1.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/10/r2.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/10/r3.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/10/r4.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/10/r5.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/10/r6.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/10/r7.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/10/r8.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/10/r9.jpg" alt="" className="img-mk"/>
                    <img src="images/mk/10/r10.jpg" alt="" className="img-mk"/>
                    <a href="Записаться" className="reg-me-but reg-me">Записаться</a>
                </div>
            </div>
<div className="day-item">
    <div className="head-day-item">
        <p className="day-date">11 {months(month2)} - {weekDay((new Date(2024, month2,11)).toString().slice(0, 3))}</p>
        <div id="day-11" className="day-discript">
            <p>Посмотреть сюжеты</p>
            <img src="images/arrow-2.png" alt=""/></div>
    </div>
    <div id="day-11-img" className="img-container">
        <img src="images/mk/11/r1.jpg" alt="" className="img-mk"/>
        <img src="images/mk/11/r2.jpg" alt="" className="img-mk"/>
        <img src="images/mk/11/r3.jpg" alt="" className="img-mk"/>
        <img src="images/mk/11/r4.jpg" alt="" className="img-mk"/>
        <img src="images/mk/11/r5.jpg" alt="" className="img-mk"/>
        <img src="images/mk/11/r6.jpg" alt="" className="img-mk"/>
        <img src="images/mk/11/r7.jpg" alt="" className="img-mk"/>
        <img src="images/mk/11/r8.jpg" alt="" className="img-mk"/>
        <img src="images/mk/11/r9.jpg" alt="" className="img-mk"/>
        <img src="images/mk/11/r10.jpg" alt="" className="img-mk"/>
        <a href="Записаться" className="reg-me-but reg-me">Записаться</a>
    </div>
</div>

<div class="day-item">
    <div class="head-day-item">
        <p class="day-date">12 {months(month2)} - {weekDay((new Date(2024, month2,12)).toString().slice(0,3))}</p>
        <div id="day-12" class="day-discript">
            <p>Посмотреть сюжеты</p>
            <img src="images/arrow-2.png" alt=""/></div>
    </div>
    <div id="day-12-img" class="img-container">
        <img src="images/mk/12/r1.jpg" alt="" class="img-mk"/>
        <img src="images/mk/12/r2.jpg" alt="" class="img-mk"/>
        <img src="images/mk/12/r3.jpg" alt="" class="img-mk"/>
        <img src="images/mk/12/r4.jpg" alt="" class="img-mk"/>
        <img src="images/mk/12/r5.jpg" alt="" class="img-mk"/>
        <img src="images/mk/12/r6.jpg" alt="" class="img-mk"/>
        <img src="images/mk/12/r7.jpg" alt="" class="img-mk"/>
        <img src="images/mk/12/r8.jpg" alt="" class="img-mk"/>
        <img src="images/mk/12/r9.jpg" alt="" class="img-mk"/>
        <img src="images/mk/12/r10.jpg" alt="" class="img-mk"/>
        <a href="Записаться" class="reg-me-but reg-me">Записаться</a>
    </div>
</div>
<div class="day-item">
    <div class="head-day-item">
        <p class="day-date">13 {months(month2)} - {weekDay((new Date(2024, month2,13)).toString().slice(0,3))}</p>
        <div id="day-13" class="day-discript">
            <p>Посмотреть сюжеты</p>
            <img src="images/arrow-2.png" alt=""/></div>
    </div>
    <div id="day-13-img" class="img-container">
        <img src="images/mk/13/r1.jpg" alt="" class="img-mk"/>
        <img src="images/mk/13/r2.jpg" alt="" class="img-mk"/>
        <img src="images/mk/13/r3.jpg" alt="" class="img-mk"/>
        <img src="images/mk/13/r4.jpg" alt="" class="img-mk"/>
        <img src="images/mk/13/r5.jpg" alt="" class="img-mk"/>
        <img src="images/mk/13/r6.jpg" alt="" class="img-mk"/>
        <img src="images/mk/13/r7.jpg" alt="" class="img-mk"/>
        <img src="images/mk/13/r8.jpg" alt="" class="img-mk"/>
        <img src="images/mk/13/r9.jpg" alt="" class="img-mk"/>
        <img src="images/mk/13/r10.jpg" alt="" class="img-mk"/>
        <a href="Записаться" class="reg-me-but reg-me">Записаться</a>
    </div>
</div>
<div class="day-item">
    <div class="head-day-item">
        <p class="day-date">14 {months(month2)} - {weekDay((new Date(2024, month2,14)).toString().slice(0,3))}</p>
        <div id="day-14" class="day-discript">
            <p>Посмотреть сюжеты</p>
            <img src="images/arrow-2.png" alt=""/></div>
    </div>
    <div id="day-14-img" class="img-container">
        <img src="images/mk/14/r1.jpg" alt="" class="img-mk"/>
        <img src="images/mk/14/r2.jpg" alt="" class="img-mk"/>
        <img src="images/mk/14/r3.jpg" alt="" class="img-mk"/>
        <img src="images/mk/14/r4.jpg" alt="" class="img-mk"/>
        <img src="images/mk/14/r5.jpg" alt="" class="img-mk"/>
        <img src="images/mk/14/r6.jpg" alt="" class="img-mk"/>
        <img src="images/mk/14/r7.jpg" alt="" class="img-mk"/>
        <img src="images/mk/14/r8.jpg" alt="" class="img-mk"/>
        <img src="images/mk/14/r9.jpg" alt="" class="img-mk"/>
        <img src="images/mk/14/r10.jpg" alt="" class="img-mk"/>
        <a href="Записаться" class="reg-me-but reg-me">Записаться</a>
    </div>
</div>
<div class="day-item">
    <div class="head-day-item">
        <p class="day-date">15 {months(month2)} - {weekDay((new Date(2024, month2,15)).toString().slice(0,3))}</p>
        <div id="day-15" class="day-discript">
            <p>Посмотреть сюжеты</p>
            <img src="images/arrow-2.png" alt=""/></div>
    </div>
    <div id="day-15-img" class="img-container">
        <img src="images/mk/15/r1.jpg" alt="" class="img-mk"/>
        <img src="images/mk/15/r2.jpg" alt="" class="img-mk"/>
        <img src="images/mk/15/r3.jpg" alt="" class="img-mk"/>
        <img src="images/mk/15/r4.jpg" alt="" class="img-mk"/>
        <img src="images/mk/15/r5.jpg" alt="" class="img-mk"/>
        <img src="images/mk/15/r6.jpg" alt="" class="img-mk"/>
        <img src="images/mk/15/r7.jpg" alt="" class="img-mk"/>
        <img src="images/mk/15/r8.jpg" alt="" class="img-mk"/>
        <img src="images/mk/15/r9.jpg" alt="" class="img-mk"/>
        <img src="images/mk/15/r10.jpg" alt="" class="img-mk"/>
        <a href="Записаться" class="reg-me-but reg-me">Записаться</a>
    </div>
</div>


<div class="day-item">
    <div class="head-day-item">
        <p class="day-date">16 {months(month2)} - {weekDay((new Date(2024, month2,16)).toString().slice(0,3))}</p>
        <div id="day-16" class="day-discript">
            <p>Посмотреть сюжеты</p>
            <img src="images/arrow-2.png" alt=""/></div>
    </div>
    <div id="day-16-img" class="img-container">
        <img src="images/mk/16/r1.jpg" alt="" class="img-mk"/>
        <img src="images/mk/16/r2.jpg" alt="" class="img-mk"/>
        <img src="images/mk/16/r3.jpg" alt="" class="img-mk"/>
        <img src="images/mk/16/r4.jpg" alt="" class="img-mk"/>
        <img src="images/mk/16/r5.jpg" alt="" class="img-mk"/>
        <img src="images/mk/16/r6.jpg" alt="" class="img-mk"/>
        <img src="images/mk/16/r7.jpg" alt="" class="img-mk"/>
        <img src="images/mk/16/r8.jpg" alt="" class="img-mk"/>
        <img src="images/mk/16/r9.jpg" alt="" class="img-mk"/>
        <img src="images/mk/16/r10.jpg" alt="" class="img-mk"/>
        <a href="Записаться" class="reg-me-but reg-me">Записаться</a>
    </div>
</div>
<div class="day-item">
    <div class="head-day-item">
        <p class="day-date">17 {months(month2)} - {weekDay((new Date(2024, month2,17)).toString().slice(0,3))}</p>
        <div id="day-17" class="day-discript">
            <p>Посмотреть сюжеты</p>
            <img src="images/arrow-2.png" alt=""/></div>
    </div>
    <div id="day-17-img" class="img-container">
        <img src="images/mk/17/r1.jpg" alt="" class="img-mk"/>
        <img src="images/mk/17/r2.jpg" alt="" class="img-mk"/>
        <img src="images/mk/17/r3.jpg" alt="" class="img-mk"/>
        <img src="images/mk/17/r4.jpg" alt="" class="img-mk"/>
        <img src="images/mk/17/r5.jpg" alt="" class="img-mk"/>
        <img src="images/mk/17/r6.jpg" alt="" class="img-mk"/>
        <img src="images/mk/17/r7.jpg" alt="" class="img-mk"/>
        <img src="images/mk/17/r8.jpg" alt="" class="img-mk"/>
        <img src="images/mk/17/r9.jpg" alt="" class="img-mk"/>
        <img src="images/mk/17/r10.jpg" alt="" class="img-mk"/>
        <a href="Записаться" class="reg-me-but reg-me">Записаться</a>
    </div>
</div>
<div class="day-item">
    <div class="head-day-item">
        <p class="day-date">18 {months(month2)} - {weekDay((new Date(2024, month2,18)).toString().slice(0,3))}</p>
        <div id="day-18" class="day-discript">
            <p>Посмотреть сюжеты</p>
            <img src="images/arrow-2.png" alt=""/></div>
    </div>
    <div id="day-18-img" class="img-container">
        <img src="images/mk/18/r1.jpg" alt="" class="img-mk"/>
        <img src="images/mk/18/r2.jpg" alt="" class="img-mk"/>
        <img src="images/mk/18/r3.jpg" alt="" class="img-mk"/>
        <img src="images/mk/18/r4.jpg" alt="" class="img-mk"/>
        <img src="images/mk/18/r5.jpg" alt="" class="img-mk"/>
        <img src="images/mk/18/r6.jpg" alt="" class="img-mk"/>
        <img src="images/mk/18/r7.jpg" alt="" class="img-mk"/>
        <img src="images/mk/18/r8.jpg" alt="" class="img-mk"/>
        <img src="images/mk/18/r9.jpg" alt="" class="img-mk"/>
        <img src="images/mk/18/r10.jpg" alt="" class="img-mk"/>
        <a href="Записаться" class="reg-me-but reg-me">Записаться</a>
    </div>
</div>
<div class="day-item">
    <div class="head-day-item">
        <p class="day-date">19 {months(month2)} - {weekDay((new Date(2024, month2,19)).toString().slice(0,3))}</p>
        <div id="day-19" class="day-discript">
            <p>Посмотреть сюжеты</p>
            <img src="images/arrow-2.png" alt=""/></div>
    </div>
    <div id="day-19-img" class="img-container">
        <img src="images/mk/19/r1.jpg" alt="" class="img-mk"/>
        <img src="images/mk/19/r2.jpg" alt="" class="img-mk"/>
        <img src="images/mk/19/r3.jpg" alt="" class="img-mk"/>
        <img src="images/mk/19/r4.jpg" alt="" class="img-mk"/>
        <img src="images/mk/19/r5.jpg" alt="" class="img-mk"/>
        <img src="images/mk/19/r6.jpg" alt="" class="img-mk"/>
        <img src="images/mk/19/r7.jpg" alt="" class="img-mk"/>
        <img src="images/mk/19/r8.jpg" alt="" class="img-mk"/>
        <img src="images/mk/19/r9.jpg" alt="" class="img-mk"/>
        <img src="images/mk/19/r10.jpg" alt="" class="img-mk"/>
        <a href="Записаться" class="reg-me-but reg-me">Записаться</a>
    </div>
</div>

<div class="day-item">
    <div class="head-day-item">
        <p class="day-date">20 {months(month2)} - {weekDay((new Date(2024, month2,20)).toString().slice(0,3))}</p>
        <div id="day-20" class="day-discript">
            <p>Посмотреть сюжеты</p>
            <img src="images/arrow-2.png" alt=""/></div>
    </div>
    <div id="day-20-img" class="img-container">
        <img src="images/mk/20/r1.jpg" alt="" class="img-mk"/>
        <img src="images/mk/20/r2.jpg" alt="" class="img-mk"/>
        <img src="images/mk/20/r3.jpg" alt="" class="img-mk"/>
        <img src="images/mk/20/r4.jpg" alt="" class="img-mk"/>
        <img src="images/mk/20/r5.jpg" alt="" class="img-mk"/>
        <img src="images/mk/20/r6.jpg" alt="" class="img-mk"/>
        <img src="images/mk/20/r7.jpg" alt="" class="img-mk"/>
        <img src="images/mk/20/r8.jpg" alt="" class="img-mk"/>
        <img src="images/mk/20/r9.jpg" alt="" class="img-mk"/>
        <img src="images/mk/20/r10.jpg" alt="" class="img-mk"/>
        <a href="Записаться" class="reg-me-but reg-me">Записаться</a>
    </div>
</div>
<div class="day-item">
	<div class="head-day-item">
		<p class="day-date">21 {months(month2)} - {weekDay((new Date(2024, month2,21)).toString().slice(0,3))}</p>
		<div id="day-21" class="day-discript">
			<p>Посмотреть сюжеты</p>
			<img src="images/arrow-2.png" alt=""/></div>
	</div>
<div id="day-21-img" class="img-container">
	<img src="images/mk/21/r1.jpg" alt="" class="img-mk"/>
	<img src="images/mk/21/r2.jpg" alt="" class="img-mk"/>
	<img src="images/mk/21/r3.jpg" alt="" class="img-mk"/>
	<img src="images/mk/21/r4.jpg" alt="" class="img-mk"/>
	<img src="images/mk/21/r5.jpg" alt="" class="img-mk"/>
	<img src="images/mk/21/r6.jpg" alt="" class="img-mk"/>
	<img src="images/mk/21/r7.jpg" alt="" class="img-mk"/>
	<img src="images/mk/21/r8.jpg" alt="" class="img-mk"/>
	<img src="images/mk/21/r9.jpg" alt="" class="img-mk"/>
	<img src="images/mk/21/r10.jpg" alt="" class="img-mk"/>
	<a href="21  сентября - вторник" class="reg-me-but reg-me">Записаться</a>
</div>
</div>
<div class="day-item">
	<div class="head-day-item">
		<p class="day-date">22 {months(month2)} - {weekDay((new Date(2024, month2,22)).toString().slice(0,3))}</p>
		<div id="day-22" class="day-discript">
			<p>Посмотреть сюжеты</p>
			<img src="images/arrow-2.png" alt=""/></div>
	</div>
<div id="day-22-img" class="img-container">
	<img src="images/mk/22/r1.jpg" alt="" class="img-mk"/>
	<img src="images/mk/22/r2.jpg" alt="" class="img-mk"/>
	<img src="images/mk/22/r3.jpg" alt="" class="img-mk"/>
	<img src="images/mk/22/r4.jpg" alt="" class="img-mk"/>
	<img src="images/mk/22/r5.jpg" alt="" class="img-mk"/>
	<img src="images/mk/22/r6.jpg" alt="" class="img-mk"/>
	<img src="images/mk/22/r7.jpg" alt="" class="img-mk"/>
	<img src="images/mk/22/r8.jpg" alt="" class="img-mk"/>
	<img src="images/mk/22/r9.jpg" alt="" class="img-mk"/>
	<img src="images/mk/22/r10.jpg" alt="" class="img-mk"/>
	<a href="22  сентября - среда" class="reg-me-but reg-me">Записаться</a>
</div>
</div>
<div class="day-item">
	<div class="head-day-item">
		<p class="day-date">23 {months(month2)} - {weekDay((new Date(2024, month2,23)).toString().slice(0,3))}</p>
		<div id="day-23" class="day-discript">
			<p>Посмотреть сюжеты</p>
			<img src="images/arrow-2.png" alt=""/></div>
	</div>
<div id="day-23-img" class="img-container">
	<img src="images/mk/23/r1.jpg" alt="" class="img-mk"/>
	<img src="images/mk/23/r2.jpg" alt="" class="img-mk"/>
	<img src="images/mk/23/r3.jpg" alt="" class="img-mk"/>
	<img src="images/mk/23/r4.jpg" alt="" class="img-mk"/>
	<img src="images/mk/23/r5.jpg" alt="" class="img-mk"/>
	<img src="images/mk/23/r6.jpg" alt="" class="img-mk"/>
	<img src="images/mk/23/r7.jpg" alt="" class="img-mk"/>
	<img src="images/mk/23/r8.jpg" alt="" class="img-mk"/>
	<img src="images/mk/23/r9.jpg" alt="" class="img-mk"/>
	<img src="images/mk/23/r10.jpg" alt="" class="img-mk"/>
	<a href="23  сентября - четверг" class="reg-me-but reg-me">Записаться</a>
</div>
</div>









            </div>,
        document.getElementById('root')
      );

      


$('.day-discript').click(function() {
// console.log('hi')

  var d = $(this).attr('id');
  if (d == "day-1"){

    $('.img-container').removeClass("active");
    $('#day-1-img').toggleClass("active");
  }
  if (d == "day-2"){
    $('.img-container').removeClass("active");
    $('#day-2-img').toggleClass("active");
  }
  if (d == "day-3"){
    $('.img-container').removeClass("active");
    $('#day-3-img').toggleClass("active");
  }
  if (d == "day-4"){
    $('.img-container').removeClass("active");
    $('#day-4-img').toggleClass("active");
  }
  if (d == "day-5"){
    $('.img-container').removeClass("active");
    $('#day-5-img').toggleClass("active");
  }
  if (d == "day-6"){
    $('.img-container').removeClass("active");
    $('#day-6-img').toggleClass("active");
  }
  if (d == "day-7"){
    $('.img-container').removeClass("active");
    $('#day-7-img').toggleClass("active");
  }
  if (d == "day-8"){
    $('.img-container').removeClass("active");
    $('#day-8-img').toggleClass("active");
  }
  if (d == "day-9"){
    $('.img-container').removeClass("active");
    $('#day-9-img').toggleClass("active");
  }
  if (d == "day-10"){
    $('.img-container').removeClass("active");
    $('#day-10-img').toggleClass("active");
  }
  if (d == "day-11"){
    $('.img-container').removeClass("active");
    $('#day-11-img').toggleClass("active");
  }
  if (d == "day-12"){
    $('.img-container').removeClass("active");
    $('#day-12-img').toggleClass("active");
  }
  if (d == "day-13"){
    $('.img-container').removeClass("active");
    $('#day-13-img').toggleClass("active");
  }
  if (d == "day-14"){
    $('.img-container').removeClass("active");
    $('#day-14-img').toggleClass("active");
  }
  if (d == "day-15"){
    $('.img-container').removeClass("active");
    $('#day-15-img').toggleClass("active");
  }
  if (d == "day-131"){
    $('.img-container').removeClass("active");
    $('#day-15-img').toggleClass("active");
  }
  if (d == "day-15"){
    $('.img-container').removeClass("active");
    $('#day-15-img').toggleClass("active");
  }
  if (d == "day-15"){
    $('.img-container').removeClass("active");
    $('#day-15-img').toggleClass("active");
  }
    if (d == "day-16"){
    $('.img-container').removeClass("active");
    $('#day-16-img').toggleClass("active");
  }
      if (d == "day-17"){
    $('.img-container').removeClass("active");
    $('#day-17-img').toggleClass("active");
  }
      if (d == "day-18"){
    $('.img-container').removeClass("active");
    $('#day-18-img').toggleClass("active");
  }
      if (d == "day-19"){
    $('.img-container').removeClass("active");
    $('#day-19-img').toggleClass("active");
  }
   if (d == "day-20"){
    $('.img-container').removeClass("active");
    $('#day-20-img').toggleClass("active");
  }
   if (d == "day-21"){
    $('.img-container').removeClass("active");
    $('#day-21-img').toggleClass("active");
  }
     if (d == "day-22"){
    $('.img-container').removeClass("active");
    $('#day-22-img').toggleClass("active");
  }
     if (d == "day-23"){
    $('.img-container').removeClass("active");
    $('#day-23-img').toggleClass("active");
  }
     if (d == "day-24"){
    $('.img-container').removeClass("active");
    $('#day-24-img').toggleClass("active");
  }
     if (d == "day-25"){
    $('.img-container').removeClass("active");
    $('#day-25-img').toggleClass("active");
  }
     if (d == "day-26"){
    $('.img-container').removeClass("active");
    $('#day-26-img').toggleClass("active");
  }
     if (d == "day-27"){
    $('.img-container').removeClass("active");
    $('#day-27-img').toggleClass("active");
  }
     if (d == "day-28"){
    $('.img-container').removeClass("active");
    $('#day-28-img').toggleClass("active");
  }
     if (d == "day-29"){
    $('.img-container').removeClass("active");
    $('#day-29-img').toggleClass("active");
  }
     if (d == "day-30"){
    $('.img-container').removeClass("active");
    $('#day-30-img').toggleClass("active");
  }
     if (d == "day-31"){
    $('.img-container').removeClass("active");
    $('#day-31-img').toggleClass("active");
  }
  console.log('hi')
});

    </script> 



<!-- <script>
	// let a = "2"
	let mydate = new Date();
	let year = mydate.getYear();
	if(year < 1000){
		year += 1900
	}
	let day = mydate.getDay()
	let month = mydate.getMonth()
	let daym = mydate.getDate()

	let firstData = document.querySelector(".date1-1")
	let dayArray = ["Понедельник","Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье"]
	let monthArray = ['января', 'февраля', 'марта','апреля', 'мая', 'июня','июля', 'августа', 'сентября','октября', 'ноября', 'декабря'
]
	firstData.textContent = `${daym} ${monthArray[month]} - ${dayArray[day - 1]}`

</script> -->
<div class="another">Другие даты уточняйте, пожалуйста, по телефону или оставьте свой для связи</div>
<style>
	.another{
		text-align: center;
		margin-top: 20px;
		margin-bottom: 30px;
		font-weight: bold;
	}
	.margabtn{
		display: block;
		margin-top: 40px;
	}
</style>
		<a href="Кнопка: Принять участие, блок: Отзывы" class="but_up margabtn" style="width: 200px;" >Записаться</a>

		</section>	
	</section>
	<section id="operating-procedure" class="pinkBG">
		<div class="header-wrapper">
			<hr
			><h1>Как проходят наши мастер-классы</h1
			><hr>
		</div>
		<section class="wrapper">
			<div class="step step1">
				<div>
					<h4>Выбираете интересную тему мастер-класса и оставляете заявку</h4>
				</div>
				<p>К началу занятия в студии уже все готово: кисти, мастихины, краски, палитры и мольберты, фартучки, холсты, разбавитель без запаха.
				</p>
			</div
			><div class="step step2">
				<div class="middle">
					<h4>Экскурс в мир живописи</h4>
				</div>
				<p>Художник знакомит Вас с основами масляной живописи. Вы узнаете, как использовать разные кисти и мастихины. Нюансы цветоведения и получения новых оттенков, благодаря чему поэтапно создадите потрясающую картину на холсте.
				</p>
			</div
			><div class="step step3">
				<div>
					<h4>Захватывающий процесс рисования под руководством художника</h4>
				</div>
				<p>
					Вас ждет увлекательное погружение в процесс рисования. Это настолько эмоционально, что многие не замечают ничего вокруг, пока создают свою работу. По ходу рисования художник находится рядом с Вами, подсказывая и показывая, как Вам добиться того или иного эффекта.
				</p>
			</div
			><div class="step step4">
				<div>
					<h4>Результат - Ваша эффектная картина на холсте!</h4>
				</div>
				<p>
					Завершая свою картину, ставите на ней подпись. При желании - оформляете картину рамой, которая придаст завершённый вид. С прекрасным настроением забираете картину с собой сразу после мастер-класса.
				</p>
			</div>
		</section>
		<a href="Кнопка: Записаться, блок: Как проходят наши мастер-классы" class="but_up" style="width: 140px;" >Записаться</a>
	</section>
	<section id="reviwes">
		<div class="header-wrapper">
			<hr
			><h1>Участники наших мастер-классов делятся своими впечатлениями</h1
			><hr>
		</div>
		<div class="wrapper">
			<section class="recall">
				<div class="top-recall">
					<p>
						Юлия<br>
						Пожарская<br>
						
					</p>
					<a href="https://vk.com/uksa_po" target="_blank">Профиль в vk</a>
				</div>
				<img src="images/ulia.png" alt="">
				<div class="text-recall">
					Восторги!!! Первый раз посетила мк, это нечто суперическое! так приятно узнать, что мои руки растут не из ж )) Огромное спасибо Софье (на горьковской), под её чутким руководством была написана моя первая картина! Это вау!!! потому что слов для выражения эмоций не хватает
				</div>
			</section	
			><section class="recall">
				<div class="top-recall">
					<p>
						Алена<br>
						Парфенова<br>
						 
					</p>
					<a href="https://vk.com/id36259321" target="_blank">Профиль в vk</a>
				</div>
				<img src="images/alena.png" alt="">
				<div class="text-recall">
					Побывала сегодня на мастер-классе по написанию картины "лаванда с птичкой" маслом на холсте на Звенигородской у Татьяны. Очень приочень понравилось! По истине не зря вы называетесь "Пробуждение", поскольку пробудили во мне спящего много лет художника, как выяснилось ))) Огромное спасибо за помощь и поддержку. Хорошо, что вы есть и что я попала сегодня к вам. Чувствую - это начало начал и великих творений! Спасибо!!!
				</div>
			</section	
			><section class="recall">
				<div class="top-recall">
					<p>
						Елена<br>
						Карагулина<br>
						
					</p>
					<a href="https://vk.com/id155405348" target="_blank">Профиль в vk</a>
				</div>
				<img src="images/elena.png" alt="">
				<div class="text-recall">
					выражаю огромную благодарность за время проведенное в Вашей студии. оно пролетело незаметно, волшебно и сказочно. благодарю за внимание и душевную теплоту. за радость творчества спасибо художнику Александру Кулакову. большой привет из Сыктывкара! я к Вам приеду еще раз! спасибо!!!!!
				</div>
			</section	
			>	
		</div>
		<a href="Кнопка: Принять участие, блок: Отзывы" class="but_up" style="width: 200px;" >Принять участие</a>
	</section>
	
	<section id="slider"  class="mobile-none">
		<div class="header-wrapper">
			<hr
			><h1>Работы участников наших мастер-классов</h1
			><hr>
		</div>
		<!-- Fotorama -->
		<div class="slider-center">
			<div class="fotorama" data-width="760" data-ratio="700/467" data-autoplay="true" data-max-width="100%">
			  <img src="images/gallery/1.jpg">
			  <img src="images/gallery/2.jpg">
			  <img src="images/gallery/3.jpg">
			  <img src="images/gallery/4.jpg">
			  <img src="images/gallery/5.jpg">
			  <img src="images/gallery/6.jpg">
			  <img src="images/gallery/7.jpg">
			  <img src="images/gallery/8.jpg">
			  <img src="images/gallery/9.jpg">
			  <img src="images/gallery/10.jpg">
			  <img src="images/gallery/11.jpg">
			  <img src="images/gallery/12.jpg">
			  <img src="images/gallery/13.jpg">
			  <img src="images/gallery/14.jpg">
			  <img src="images/gallery/15.jpg">
			  <img src="images/gallery/16.jpg">
			  <img src="images/gallery/17.jpg">
			  <img src="images/gallery/18.jpg">
			  <img src="images/gallery/19.jpg">
			  <img src="images/gallery/20.jpg">
			  <img src="images/gallery/21.jpg">
			  <img src="images/gallery/22.jpg">
			  <img src="images/gallery/23.jpg">
			  <img src="images/gallery/24.jpg">
			  <img src="images/gallery/25.jpg">
			</div>
		</div>	
	</section>
	<!--<section id="seven-reasons">
		<div class="header-wrapper">
			<hr
			><h1>Почему Вам понравится рисовать именно в нашей студии</h1
			><hr>
		</div>
		<section class="wrapper">
		<div class="items-reasons r1">
			<div class="div-regulator"></div>
			<div class="text-reason">
			У нас доступные цены на мастер-классы и рамы для картин. Даже студенту и школьнику по карману.
			</div>
			<div class="div-regulator bottom-line"></div>
		</div
		><div class="items-reasons r2">
			<div class="div-regulator"></div>
			<div class="text-reason">
			Мы подбираем для Вас эффектные сюжеты для картин, которые легко нарисовать под руководством художника, даже без опыта и навыков рисования.
			</div>
			<div class="div-regulator bottom-line"></div>
		</div
		><div class="items-reasons r3">
			<div class="div-regulator"></div>
			<div class="text-reason end">
			Занятия проходят в мини-группах по 5-8 человек, а значит Вы получите достаточно внимания и индивидуальный подход от художника
			</div>
			<div class="div-regulator bottom-line"></div>
		</div
		><div class="items-reasons r4">
			<div class="div-regulator"></div>
			<div class="text-reason">
			Море положительных эмоций от рисования и готовая картина как результат.
			</div>
			<div class="div-regulator"></div>
		</div
		><div class="items-reasons r5">
			<div class="div-regulator"></div>
			<div class="text-reason">
			Теплая дружеская атмосфера в студии, яркие фотоочеты с мастер-классов  и незабываемые впечатления.
			</div>
			<div class="div-regulator"></div>
		</div
		><div class="items-reasons r6">
			<div class="div-regulator"></div>
			<div class="text-reason end">
			Нас рекомендуют друзьям и близким. Многие ученики, которые раз побывали в студии становятся постоянными участниками наших мастер-классов и приводят с собой своих близких, друзей, коллег.
			</div>
			<div class="div-regulator"></div>
		</div
		>
		</section>
		<a href="Кнопка: Участвовать, блок: Преимущества студии" class="but_up" style="width: 160px;" >Участвовать</a>
	</section>-->
	<section id="price">
		<div class="header-wrapper">
			<hr
			><h1>Стоимость мастер-класса зависит от выбираемого Вами формата картины</h1
			><hr>
		</div>
		<section class="wrapper">

			<div class="format">
				<div class="in-format">
					<p class="x">20х30</p>
					<hr>
					<p class="x-price">2000 <span class="rub">Р</span></p>
					<div class="center-new">(вместо 2900 ₽)</div>
				</div>
			</div>
			<div class="format big">
				<div class="in-format">
					<p class="x">25х35</p>
					<hr>
					<p class="x-price">2400 <span class="rub">Р</span></p>
					<div class="center-new">(вместо 3500 ₽)</div>
				</div>
			</div>
						<div class="format">
            				<div class="in-format">
            					<p class="x">30х40</p>
            					<hr>
            					<p class="x-price">2800 <span class="rub">Р</span></p>
            					<div class="center-new">(вместо 4000 ₽)</div>
            				</div>
            			</div>
			<div class="format ">
				<div class="in-format">
					<p class="x">35х45</p>
					<hr>
					<p class="x-price green" >3100 <span class="rub">Р</span></p>
										<div class="center-new">(вместо 4500 ₽)</div>
				</div>
			</div>
			<div class="format">
				<div class="in-format">
					<p class="x">40х50</p>
					<hr>
					<p class="x-price">3600 <span class="rub">Р</span></p>
															<div class="center-new">(вместо 5250 ₽) </div>

				</div>
			</div>
						<div class="format">
            				<div class="in-format">
            					<p class="x">40х60</p>
            					<hr>
            					<p class="x-price">4000 <span class="rub">Р</span></p>
            					<div class="center-new">(вместо 5800 ₽)</div>
            				</div>
            			</div>
			<div class="format">
				<div class="in-format">
					<p class="x">50x70</p>
					<hr>
					<p class="x-price">5550 <span class="rub">Р</span></p>
					<div class="center-new">(вместо 7900 ₽) </div>
				</div>
			</div>


		</section>
		<a href="Кнопка: Заказать формат, блок: Стоимость МК" class="but_up" >Заказать формат</a>
	</section>	
	<section id="maps" style="background: #F6F6F6;">
	        <div style="text-align: center; margin-bottom: 20px; margin-top: -30px;">Все наши акции на месяц собраны тут:
                <a href="https://vk.com/topic-65161275_31747484">https://vk.com/topic-65161275_31747484</a>
                </div>
		<section class="wrapper" style="max-width: 400px;">
			<div class="map-item">
				<div>	<!-- class="mobile-none"-->
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aad6c5c72dd3342fb36538344fdf70f3015b134ee1a47865cb0cefbf57062ac90&amp;width=360&amp;height=370&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>	
				<div class="adress">
					<ul>
						<li>Пушкинская</li>
						<li>Технологический инст.</li>
					</ul>
					<hr>
					<p class="adress-adress  ad-liner">ул. Верейская д.16 б.</p>
					<hr>
					<p>7 минут пешком</p>
				</div>
			</div>
			<!--<div class="map-item">
				<div class="mobile-none">
					<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=7y90Nv7Skx960Ia2AVZzKyMY7K3_rbTS&width=360&height=370&lang=ru_RU&sourceType=constructor"></script>
				</div>
				<img src="images/gmap.jpg" alt="">
				<div class="adress">
					<ul>
						<li>Горьковская</li>
					</ul>
					<hr>
					<p class="adress-adress">ул. Мира, д. 3 лит. "A" офис 431
					<br> (бизнес-центр "Троицкий")	
					</p>
					<hr>
					<p>7 минут пешком</p>
				</div>
			</div>
			<div class="map-item">
				<div class="mobile-none">
					<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=rkMLEJLTgT3Suh88_kfthoSFMANLOCqM&width=360&height=370&lang=ru_RU&sourceType=constructor"></script>
				</div>
				<img src="images/mmap.jpg" alt="">	
				<div class="adress">
					<ul>
						<li>Московская</li>
					</ul>
					<hr>
					<p class="adress-adress ad-liner">пл. Конституции, д.2, офис 320 </p>
					<hr>
					<p>12 минут пешком</p>
				</div>
			</div>-->
			
			
		</section>
			<section style="margin-top: 20px" class="mobile-none"> <!--скрытие кода на мобильной версии
				<section style="margin-top: 20px">-->
				<div class="header-wrapper">
					<hr
					><h1>Жизнь студии онлайн</h1
					><hr>
				</div>
				<div class="slider-center">
				
					<iframe src="//ipeye.ru/ipeye_service/api/iframe.php?iframe_player=1&dev=42828c0130494d62b76a3f4e75d9289b&autoplay=0&archive=1" width="800" height="600" frameBorder="0" seamless="seamless" allowfullscreen>Ваш браузер не поддерживает фреймы!</iframe>
					
				</div>
			</section><!---->
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
		<p> <a href="tel:+7 (812)645 01 80" style="
    color: white;
    font-size: 15px;
">+7 (812)645 01 80</a></p>
		<p>©  Арт-студия "Пробуждение", Санкт-Петербург <br>2015 - 2020 гг. </p>
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
			<p class="pinselect">Ваше имя:</p>
			<input type="text" autocomplete="off" name="name"><br>
			<p class="pinselect">Номер телефона:</p>
			<input type="tel" name="phone"><br>
			<!--выпадающее меню со временем звонка-->
			<p class="pinselect">Время звонка:</p>
			<select name="time_call" id="select">
				<option value="10:00 - 11:00">10:00 - 11:00</option>
				<option value="11:00 - 12:00">11:00 - 12:00</option>
				<option value="12:00 - 13:00">12:00 - 13:00</option>
				<option value="13:00 - 14:00">13:00 - 14:00</option>
				<option value="14:00 - 15:00">14:00 - 15:00</option>
				<option value="15:00 - 16:00">15:00 - 16:00</option>
				<option value="16:00 - 17:00">16:00 - 17:00</option>
				<option value="17:00 - 18:00">17:00 - 18:00</option>
				<option value="18:00 - 19:00">18:00 - 19:00</option>
				<option value="19:00 - 20:00">19:00 - 20:00</option>
			</select>

			<input type="hidden" id="dataMk" name="MKN">
			<input type="hidden" id="rezult" name="utm">
			<input type="hidden" id="rezult1" name="utm1">
			<input type="hidden" id="rezult2" name="utm2">
			<input type="hidden" id="rezult3" name="utm3">
			<input type="hidden" id="rezult4" name="utm4">
			<input type="submit" onclick="ga('send', 'event', 'submit', 'send_order'); yaCounter37136130.reachGoal('send_order'); return true;" value="Отправить" class="submit">
		</form>
	</div>		
	<!--Мобильное меню-->
	<div class="mobile-menu">
		<!--<p href="#about">О студии</p>-->
		<p href="#mk-schedule">Расписание</p>
		<p href="#reviwes">Отзывы</p>
		<p href="#operating-procedure">Что будет</p>
		<p href="#seven-reasons">Преимущества студии</p>
		<p href="#price">Стоимость</p>
		<p href="#maps">Контакты</p>
		<p> <a href="tel:+8126450180" style="color: #F057AE;">Позвонить нам</a></p>
	</div>
	<link href="css/style.min.css" rel="stylesheet">
	<link href="fotorama/fotorama.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/utm.min.js"></script>
	<script src="fotorama/fotorama.js"></script>
	<!--<script src="js/scripts.min.js"></script>-->
	<script src="js/scripts.js"></script>
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


<script>
    (function(w, d, u, i, o, s, p) {
        if (d.getElementById(i)) { return; } w['MangoObject'] = o;
        w[o] = w[o] || function() { (w[o].q = w[o].q || []).push(arguments) }; w[o].u = u; w[o].t = 1 * new Date();
        s = d.createElement('script'); s.async = 1; s.id = i; s.src = u;
        p = d.getElementsByTagName('script')[0]; p.parentNode.insertBefore(s, p);
    }(window, document, '//widgets.mango-office.ru/widgets/mango.js', 'mango-js', 'mgo'));
    mgo({calltracking: {id: 22629, elements: [{"numberText":"8126450180"}]}});
</script>



  <!-- Load our React component. -->
<style type="text/css">
	.center-new{
		text-align: center;
		margin-top: -5px;
		margin-bottom: 10px;
		color: #21e310;
		font-size: 20px;
	}
	.x-price{
		color: black;
		font-weight: bold;
		font-size: 51px;
	}
	.rub{

	}
	.wrapper{
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	}
	@media (max-width: 1200px) {
	.firstTextTitle{
	font-size:25px !important;
    margin-top: -40px !important;
    margin-bottom: -30px !important;
    padding: 10px;
	}
	.secondTextTitle{
	font-size:22px !important;
	padding: 10px;
	margin-top: 20px !important;
	margin-bottom: -40px !important;
	}
	.deleteBR{
	    display: none
	}}
</style>

  <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>

  <script src="like_button.js"></script>
  <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.8.10/themes/smoothness/jquery-ui.css" type="text/css">
  <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.8.10/jquery-ui.min.js"></script>
</body>

</html>
