<html>

<body>



<?php



//send email

$email = "malikova.k.s@gmail.com" ;
//$email = "duha24@mail.ru" ;

$subject = "Заявка на сайте" ;

$server = $_SERVER['HTTP_HOST'];

$message = "Имя: $_POST[name]\nТелефон: $_POST[phone]\nПочта: $_POST[mail]
			\n .---------------------------------.
			\n UTM-метки:
			\nИсточник перехода: $_POST[utm]
			\nКанал компании: $_POST[utm1]
			\nКлючевое слово: $_POST[utm2]
			\nСодержание компании: $_POST[utm3]
			\nНазвание компании: $_POST[utm4]";

mail( "$email", "$subject",

$message, "From: ADMIN@" . $_SERVER['HTTP_HOST'] );


?>



</body>

</html>