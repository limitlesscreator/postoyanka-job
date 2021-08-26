$(document).ready(function(){

//кнопка "заказать звонок"

$('.but_call').click(function(){
	yaCounter26841144.reachGoal('callBack');
});

//кнопка "Отправить" на скрытой форме
$('.knopka_pod3').click(function(){
	yaCounter26841144.reachGoal('callBackGo');
});

//кнопка "Заказать сайт"
$('.knopka').click(function(){
	yaCounter26841144.reachGoal('site');
});

//кнопка "Отправка большой формы внизу сайта"
$('.knopka_contacts').click(function(){
	yaCounter26841144.reachGoal('bigform');
});


});