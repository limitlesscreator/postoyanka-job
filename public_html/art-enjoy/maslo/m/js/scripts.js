$(document).ready(function(){

	
$('#form3').hide();
$('#pod3').hide();


$(function(){
  $('#pod3').click(function(event) {
    if ($(event.target).closest("#form3").length) return;
	if ($(event.target).closest("#back").length) return;
	if ($(event.target).closest("#forward").length) return;
    $('#form3').slideUp(900);
	$('#pod3').fadeOut(700);
	
    event.stopPropagation();
  });
});

$('#callback').click(function(){
	$('#pod3').fadeIn(500);
	$('#form3').slideDown(1200);
});	

$('.button1').click(function(){
	$('#pod3').fadeIn(500);
	$('#form3').slideDown(1200);
});	

$('.button_m').click(function(){
	$('#pod3').fadeIn(500);
	$('#form3').slideDown(1200);
});	




//Маска полей ввода
$('#input_form3_phone').mask('+7(000)-000-00-00');
$('#input_form_phone').mask('+7(000)-000-00-00');


//Фото-галерея
	var imgArray = ['images/gallery/img1.jpg','images/gallery/img2.jpg','images/gallery/img3.jpg','images/gallery/img4.jpg','images/gallery/img5.jpg','images/gallery/img6.jpg','images/gallery/img7.jpg','images/gallery/img8.jpg','images/gallery/img9.jpg','images/gallery/img10.jpg','images/gallery/img11.jpg','images/gallery/img12.jpg'];
	var n=0;
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
