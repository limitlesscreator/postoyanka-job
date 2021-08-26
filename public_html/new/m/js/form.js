$(document).ready(function(){
$('#formDiv h2').hide();
//Отправка формы
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
$('#form input').fadeOut(700);
$('#politika').fadeOut(700);
$('.buttonForm').fadeOut(700);
$('#formDiv h2').fadeIn(700);
}
});
}
else{
	$('#input_form_phone').css('border','2px solid blue');
}
});
});


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
//$('#form3').slideUp(1200);
//$('#pod3').fadeOut(1200);
$('#form3').animate({'height':'100px'},700);
$('.inp').slideUp(1200);
$('.knopka_pod3').slideUp(1200);
$('.h3').text('Спасибо за заявку, в ближайшее время Вам перезвонит наш менеджер');
}
});
}
else{
	$('#input_form3_phone').css('border','2px solid blue');
}
});
});

//Кнопка скрыть форму
	var close = $('.close');
	
close.click(function(){
	$('#form3').slideUp(900);
	$('#pod3').fadeOut(700);
});	

});//конец скрипта