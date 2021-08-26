$(document).ready(function(){
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



$('textarea')
	.focus(function() { 
		$(this).css("background", "none"); 
	})
	.blur(function() { 
		if ($(this).attr('value') == '') { 
			$(this).css("background", "url(../images/benice.png)"); 
		} 
	});


/*Кнопка заказать звонок*/	

$('#form3').hide();
$('#pod3').hide();
$('.callback').click(function(){
	$('#pod3').slideDown(1200);
	$('#form3').slideDown(1200);
});	



/*Кнопка ОТПРАВИТЬ на скрытой форме*/	
	var but_p = $('.knopka_pod3');
but_p.mouseover(function(){
    document.body.style.cursor = 'pointer';//измениение курсора на руку
	$(this).animate({backgroundColor:'#FFDFCA','color':'#FF6600'},400);
});
but_p.mouseout(function(){
	document.body.style.cursor = 'default';//измениение курсора на стандарт
	$(this).animate({backgroundColor:'#FF6600','color':'#EEEEEE'},400);
});	

/*Кнопка "закрыть" на форме*/	
	var but_n = $('.close');
but_n.mouseover(function(){
    document.body.style.cursor = 'pointer';//измениение курсора на руку
	$(this).attr('src','images/close-hover.png');
});
but_n.mouseout(function(){
	document.body.style.cursor = 'default';//измениение курсора на стандарт
	$(this).attr('src','images/close.png');
});	
but_n.click(function(){
	$('#form3').slideUp(1200);
	$('#pod3').slideUp(1200);
});	

/*Кнопка ОТПРАВИТЬ в нижней форме*/	
var but_l = $('.knopka_contacts');
but_l.mouseover(function(){
    document.body.style.cursor = 'pointer';//измениение курсора на руку
	$(this).animate({backgroundColor:'#717187','color':'white'},400);
});
but_l.mouseout(function(){
	document.body.style.cursor = 'default';//измениение курсора на стандарт
	$(this).animate({backgroundColor:'white','color':'#717187'},400);
});
	
/*Кнопка Смотреть наши кейсы*/	
	var but_u = $('.knopka_1_uslugi');
but_u.mouseover(function(){
    document.body.style.cursor = 'pointer';//измениение курсора на руку
	$(this).animate({backgroundColor:'white','color':'#636363'},400);
	$(this).css('text-shadow','none');
});
but_u.mouseout(function(){
	document.body.style.cursor = 'default';//измениение курсора на стандарт
	$(this).animate({backgroundColor:'#2EA6F0;','color':'white'},400);
});	


//Маски для полей ввода

$('#input_form3_phone').mask('+7(000)-000-00-00');
$('#input_form_phone').mask('+7(000)-000-00-00');


/*Всплывающие формы обработка*/
//----------------------------------------------------------

//Отправка всплывающей формы
$(function(){
$('.knopka_pod3').click(function(e){
var provka = $('#input_form3_phone').val().length;
if (provka == 17){
//отменяем стандартное действие при отправке формы
//e.preventDefault();
//берем из формы метод передачи данных
var m_method=$('#form3').attr('method');
//получаем адрес скрипта на сервере, куда нужно отправить форму
var m_action=$('#form3').attr('action');
//получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
//то есть в стандартном формате передачи данных формы
var m_data=$('#form3').serialize();
$.ajax({
type: m_method,
url: m_action,
data: m_data,
success: function(result){                         //действия после отправки данных
$('#form3').slideUp(1200);
$('#pod3').slideUp(1200);
}
});
}
else{
	$('#input_form3_phone').css('border','2px solid red');
}
});
});

//Отправка всплывающей формы
$(function(){
$('.buttonForm').click(function(e){
var provka = $('#input_form_phone').val().length;
if (provka == 17){
//отменяем стандартное действие при отправке формы
//e.preventDefault();
//берем из формы метод передачи данных
var m_method=$('#form').attr('method');
//получаем адрес скрипта на сервере, куда нужно отправить форму
var m_action=$('#form').attr('action');
//получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
//то есть в стандартном формате передачи данных формы
var m_data=$('#form').serialize();
$.ajax({
type: m_method,
url: m_action,
data: m_data,
success: function(result){                         //действия после отправки данных
$('#form').slideUp(1200);
$('#pod').slideUp(1200);
}
});
}
else{
	$('#input_form_phone').css('border','2px solid blue');
}
});
});

		
});//конец скрипта