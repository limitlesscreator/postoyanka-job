<?php
    $message = "<h1>Заявка с сайта Пробуждение</h1>";
    $message .= "<b>Имя:</b> ".$_POST['first_name'];
    $message .= "<br /><b>Телефон:</b> ".$_POST['last_name'];
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf8' . "\r\n";
    if(mail('sklazer@mail.ru, art6450180@yandex.ru', 'Заявка с сайта Пробуждение', $message, $headers))
	{
		include('amo_send.php');
		header("Location: /success.html");
    }
	//die();