$(document).ready(function(){

$('#exit_content').hide();
$('#aboutUs').hide();
$('.chek').hide();
$('#form3').hide();
$('#pod3').hide();
$('#nikitin').hide();
$('#elena').hide();
$('#uriy').hide();
$('#vo1').hide();
$('#vo2').hide();
$('#vo3').hide();
$('#vo4').hide();
$('#vo5').hide();
$('#vo6').hide();
$('#vo7').hide();
$('#vo8').hide();
$('#vo9').hide();
$('.cclose').hide();
$('.hiddenSpeack').hide();


$(document).mouseleave(function(e){
    if (e.clientY < 40) {
        // здесь нужно отобразить окно
        $('#exit_content').fadeIn(200);
    }     
});  

$(function(){
  $('#exit_content').click(function(event) {
    if ($(event.target).closest("#form_exit").length) return;
	
	$('#exit_content').fadeOut(700);
	
    event.stopPropagation();
  });
});

$(function(){
  $('#pod3').click(function(event) {
    if ($(event.target).closest("#form3").length) return;
	if ($(event.target).closest("#back").length) return;
	if ($(event.target).closest("#forward").length) return;
    $('#form3').slideUp(900);
	$('#pod3').fadeOut(700);
	$('#vo1').fadeOut(800);
	$('#vo2').fadeOut(800);
	$('#vo3').fadeOut(800);
	$('#vo4').fadeOut(800);
	$('#vo5').fadeOut(800);
	$('#vo6').fadeOut(800);
	$('#vo7').fadeOut(800);
	$('#vo8').fadeOut(800);
	$('#vo9').fadeOut(800);
	$('#nikitin').fadeOut(800);
	$('#elena').fadeOut(800);
	$('#uriy').fadeOut(800);
	$('.cclose').hide();
	$('#galleryLB').fadeOut(800);
    event.stopPropagation();
  });
});

$('.butHidden').click(function(){
	$('.butHidden').hide();
	$('.hiddenSpeack').slideDown(1200);
});
$('.unChek').click(function(){
	$('.chek').show();
	$('.unChek').hide();
	$('#aboutUs').slideDown(1200);
});

$('.chek').click(function(){
	$('.chek').hide();
	$('.unChek').show();
	$('#aboutUs').slideUp(1200);
});

$('#callback').click(function(){
	$('#pod3').fadeIn(500);
	$('#form3').slideDown(1200);
});	

$('.button1').click(function(){
	$('#pod3').fadeIn(500);
	$('#form3').slideDown(1200);
});	

$('.but').click(function(){
	$('#pod3').fadeIn(500);
	$('#form3').slideDown(1200);
});

$('#nikitinArt').click(function(){
	$('#pod3').fadeIn(500);
	$('#nikitin').fadeIn(1200);
	$('.Nclose').show();
});
$('.Nclose').click(function(){
	$('#nikitin').slideUp(900);
	$('#pod3').fadeOut(700);
});

$('#elenaArt').click(function(){
	$('#pod3').fadeIn(500);
	$('#elena').fadeIn(1200);
	$('.Eclose').show();
});
$('.Eclose').click(function(){
	$('#elena').slideUp(900);
	$('#pod3').fadeOut(700);
});

$('#uriyArt').click(function(){
	$('#pod3').fadeIn(500);
	$('#uriy').fadeIn(1200);
	$('.Uclose').show();
});
$('.Uclose').click(function(){
	$('#uriy').slideUp(900);
	$('#pod3').fadeOut(700);
});

//Видео отзывы:

$('#v1').click(function(){
	$('#pod3').fadeIn(700);
	$('#vo1').fadeIn(700);
	$('.cclose').show();
});

$('#v2').click(function(){
	$('#pod3').fadeIn(700);
	$('#vo2').fadeIn(700);
	$('.cclose').show();
});

$('#v3').click(function(){
	$('#pod3').fadeIn(700);
	$('#vo3').fadeIn(700);
	$('.cclose').show();
});

$('#v4').click(function(){
	$('#pod3').fadeIn(700);
	$('#vo4').fadeIn(700);
	$('.cclose').show();
});

$('#v5').click(function(){
	$('#pod3').fadeIn(700);
	$('#vo5').fadeIn(700);
	$('.cclose').show();
});

$('#v6').click(function(){
	$('#pod3').fadeIn(700);
	$('#vo6').fadeIn(700);
	$('.cclose').show();
});
$('#v7').click(function(){
	$('#pod3').fadeIn(700);
	$('#vo7').fadeIn(700);
	$('.cclose').show();
});
$('#v8').click(function(){
	$('#pod3').fadeIn(700);
	$('#vo8').fadeIn(700);
	$('.cclose').show();
});
$('#v9').click(function(){
	$('#pod3').fadeIn(700);
	$('#vo9').fadeIn(700);
	$('.cclose').show();
});

var cclose = $('.cclose');
cclose.mouseover(function(){
    $(this).attr('src','images/classic-close-hover.png');
});
cclose.mouseout(function(){
	$(this).attr('src','images/сlassic-close.png');
});
$('.cclose').click(function(){
	$('#pod3').fadeOut(700);
	$('#vo1').fadeOut(800);
	$('#vo2').fadeOut(800);
	$('#vo3').fadeOut(800);
	$('#vo4').fadeOut(800);
	$('#vo5').fadeOut(800);
	$('#vo6').fadeOut(800);
	$('#vo7').fadeOut(800);
	$('#vo8').fadeOut(800);
	$('#vo9').fadeOut(800);
	$('#vo10').fadeOut(800);
	$('#vo11').fadeOut(800);
	$('#vo12').fadeOut(800);
	$('.cclose').hide();
});

//Маска полей ввода
$('#input_form3_phone').mask('+7(000)-000-00-00');
$('#input_form_phone').mask('+7(000)-000-00-00');
$('#input_exit').mask('+7(000)-000-00-00');


//Фото-галерея
$('#galleryLB').hide();
var imgArray = ['images/gallery/img1.jpg','images/gallery/img2.jpg','images/gallery/img3.jpg','images/gallery/img4.jpg','images/gallery/img5.jpg','images/gallery/img6.jpg','images/gallery/img7.jpg','images/gallery/img8.jpg','images/gallery/img9.jpg','images/gallery/img10.jpg','images/gallery/img11.jpg','images/gallery/img12.jpg'];
var n=0;
$('#g1').click(function(){
	$('#pod3').fadeIn(700);
	$('#galleryLB').fadeIn(900);
	n=0;
	$('#imgLB').attr('src',imgArray[n]);
});
$('#g2').click(function(){
	$('#pod3').fadeIn(700);
	$('#galleryLB').fadeIn(900);
	n=1;
	$('#imgLB').attr('src',imgArray[n]);
});
$('#g3').click(function(){
	$('#pod3').fadeIn(700);
	$('#galleryLB').fadeIn(900);
	n=2;
	$('#imgLB').attr('src',imgArray[n]);
});
$('#g4').click(function(){
	$('#pod3').fadeIn(700);
	$('#galleryLB').fadeIn(900);
	n=3;
	$('#imgLB').attr('src',imgArray[n]);
});
$('#g5').click(function(){
	$('#pod3').fadeIn(700);
	$('#galleryLB').fadeIn(900);
	n=4;
	$('#imgLB').attr('src',imgArray[n]);
});
$('#g6').click(function(){
	$('#pod3').fadeIn(700);
	$('#galleryLB').fadeIn(900);
	n=5;
	$('#imgLB').attr('src',imgArray[n]);
});
$('#g7').click(function(){
	$('#pod3').fadeIn(700);
	$('#galleryLB').fadeIn(900);
	n=6;
	$('#imgLB').attr('src',imgArray[n]);
});
$('#g8').click(function(){
	$('#pod3').fadeIn(700);
	$('#galleryLB').fadeIn(900);
	n=7;
	$('#imgLB').attr('src',imgArray[n]);
});
$('#g9').click(function(){
	$('#pod3').fadeIn(700);
	$('#galleryLB').fadeIn(900);
	n=8;
	$('#imgLB').attr('src',imgArray[n]);
});
$('#g10').click(function(){
	$('#pod3').fadeIn(700);
	$('#galleryLB').fadeIn(900);
	n=9;
	$('#imgLB').attr('src',imgArray[n]);
});
$('#g11').click(function(){
	$('#pod3').fadeIn(700);
	$('#galleryLB').fadeIn(900);
	n=10;
	$('#imgLB').attr('src',imgArray[n]);
});
$('#g12').click(function(){
	$('#pod3').fadeIn(700);
	$('#galleryLB').fadeIn(900);
	n=11;
	$('#imgLB').attr('src',imgArray[n]);
});
var gclose = $('.gclose');
gclose.mouseover(function(){
    $(this).attr('src','images/classic-close-hover.png');
});
gclose.mouseout(function(){
	$(this).attr('src','images/сlassic-close.png');
});
$('.gclose').click(function(){
		$('#galleryLB').fadeOut(800);
		$('#pod3').fadeOut(700);
		
});

$('#forward').click(function(){
	if (n!=imgArray.length - 1) {
		n++;
		$('#imgLB').attr("src",imgArray[n]);
	}
});
$('#back').click(function(){
	if (n!=0) {
		n--;
		$('#imgLB').attr("src",imgArray[n]);}
	
});


//закрытие по щелчку


//------------------------------------------------------------------------------------
//--------------------------Чтение UTM меток------------------------------------------
//------------------------------------------------------------------------------------
var um = window.location.href; //получаем адресную строку браузера

var regUtmSource = /utm_source/; //регулярное выражение для поиска utm_source
var startUtmSource = um.search(regUtmSource);//находим номер первой буквы в строке
	startUtmSource = startUtmSource + 11;// находим номер первой буквы значения utm_source
var resultUtmSource = um.slice(startUtmSource); // получаем строчку все после utm_source
var regAnd = /utm/;//регулярное выражение для поиска начала следующего параметра и определения конца значения параметра utm_source
var endUtmSource = resultUtmSource.search(regAnd) - 1;//определение последнего символа значения utm_sourse
var resultOne = resultUtmSource.slice(0,endUtmSource);

$("#rezult").attr("value",resultOne); //отправка на поле формы всей строки из браузера
$("#rezult01").attr("value",resultOne); //отправка на поле формы всей строки из браузера

var regUtmMedium = /utm_medium/; //регулярное выражение для поиска utm_source
var startUtmMedium = um.search(regUtmMedium);//находим номер первой буквы в строке
	startUtmMedium = startUtmMedium + 11;// находим номер первой буквы значения utm_source
var resultUtmMedium = um.slice(startUtmMedium); // получаем строчку все после utm_source
var endUtmMedium = resultUtmMedium.search(regAnd) - 1;//определение последнего символа значения utm_sourse
var resultTwo = resultUtmMedium.slice(0,endUtmMedium);

$("#rezult1").attr("value",resultTwo); //отправка на поле формы всей строки из браузера
$("#rezult11").attr("value",resultTwo); //отправка на поле формы всей строки из браузера

var regUtmTerm = /utm_term/; //регулярное выражение для поиска utm_source
var startUtmTerm = um.search(regUtmTerm);//находим номер первой буквы в строке
if (startUtmTerm >= 0 ){
	startUtmTerm = startUtmTerm + 9;// находим номер первой буквы значения utm_source
var resultUtmTerm = um.slice(startUtmTerm); // получаем строчку все после utm_source
var endUtmTerm = resultUtmTerm.search(regAnd) - 1;//определение последнего символа значения utm_sourse
var resultThree = resultUtmTerm.slice(0,endUtmTerm);
$("#rezult2").attr("value",resultThree); //отправка на поле формы всей строки из браузера
$("#rezult21").attr("value",resultThree); //отправка на поле формы всей строки из браузера
}
else {
$("#rezult2").attr("value"," - "); //отправка на поле формы всей строки из браузера
$("#rezult2").attr("value"," - "); //отправка на поле формы всей строки из браузера
}

var regUtmContent = /utm_content/; //регулярное выражение для поиска utm_source
var startUtmContent = um.search(regUtmContent);//находим номер первой буквы в строке
if (startUtmContent >= 0 ){
	startUtmContent = startUtmContent + 12;// находим номер первой буквы значения utm_source
var resultUtmContent = um.slice(startUtmContent); // получаем строчку все после utm_source
var endUtmContent = resultUtmContent.search(regAnd) - 1;//определение последнего символа значения utm_sourse
var resultFour = resultUtmContent.slice(0,endUtmContent);
$("#rezult3").attr("value",resultFour); //отправка на поле формы всей строки из браузера
$("#rezult31").attr("value",resultFour); //отправка на поле формы всей строки из браузера
}
else {
$("#rezult3").attr("value"," - "); //отправка на поле формы всей строки из браузера
$("#rezult31").attr("value"," - "); //отправка на поле формы всей строки из браузера
}

var regUtmCampaign = /utm_campaign/; //регулярное выражение для поиска utm_source
var startUtmCampaign = um.search(regUtmCampaign);//находим номер первой буквы в строке
	startUtmCampaign = startUtmCampaign + 13;// находим номер первой буквы значения utm_source
var resultUtmCampaign = um.slice(startUtmCampaign); // получаем строчку все после utm_source
var resultCampaign = resultUtmCampaign.slice(0);

$("#rezult4").attr("value",resultCampaign); //отправка на поле формы всей строки из браузера
$("#rezult41").attr("value",resultCampaign); //отправка на поле формы всей строки из браузера

//------------------------------------------------------------------------------------


});//конец скрипта
