<?php
//send email , duha24@mail.ru 
//$email = "malikova.k.s@gmail.com, art6450180@yandex.ru, art-mk-metrika@yandex.ru";
$select = htmlspecialchars ($_POST[time_call]);
$email = "spb.grey@gmail.com, duha24@mail.ru, malikova.k.s@gmail.com, art6450180@yandex.ru, art-mk-metrika@yandex.ru";
//$email =  ;
$subject = "Заявка на сайте" ;
$server = $_SERVER['HTTP_HOST'];
$message = "Имя: $_POST[name]\nТелефон: $_POST[phone]\nВремя: $select\nМасте-класс: $_POST[MKN]
			\n .---------------------------------.
			\n UTM-метки:
			\nИсточник перехода: $_POST[utm]
			\nКанал компании: $_POST[utm1]
			\nКлючевое слово: $_POST[utm2]
			\nСодержание компании: $_POST[utm3]
			\nНазвание компании: $_POST[utm4]";

if(mail( "$email", "$subject",$message, "From: ADMIN@" . $_SERVER['HTTP_HOST'] ))
{
	include('amo_send.php');
}