<?php

 $subdomain='new5a96b96f9215e';
 $CF_PHONE='491671';
 //$CF_EMAIL='151015';

function amo_auth()
{
	global $subdomain;

	$user=array(
	  'USER_LOGIN'	=>'art9892689@yandex.ru',
	  'USER_HASH'	=>'bfefdff0661fbc482342be8dcfcbf5c0' #API key
	);
	$link='https://'.$subdomain.'.amocrm.ru/private/api/auth.php?type=json';

	$curl=curl_init(); #��������� ���������� ������ cURL
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
	curl_setopt($curl,CURLOPT_URL,$link);
	curl_setopt($curl,CURLOPT_POST,true);
	curl_setopt($curl,CURLOPT_POSTFIELDS,http_build_query($user));
	curl_setopt($curl,CURLOPT_HEADER,false);
	curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
	curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
	$out=curl_exec($curl); #���������� ������ � API � ��������� ����� � ����������
	$code=curl_getinfo($curl,CURLINFO_HTTP_CODE); #������� HTTP-��� ������ �������
	curl_close($curl); #��������� ����� cURL

	$Response=json_decode($out,true);
	$Response=$Response['response'];
}

function amo_query($link,$go)
{
	global $subdomain;

	$curl=curl_init(); #Сохраняем дескриптор сеанса cURL
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');

	curl_setopt($curl,CURLOPT_URL,$link);

	if($go)
	{
		curl_setopt($curl,CURLOPT_POST,1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json'
		));
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($curl, CURLOPT_POSTFIELDS,       json_encode($go));
	}
	curl_setopt($curl,CURLOPT_HEADER,false);
	curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
	curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
 
	$out=curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
	curl_close($curl);
   	$json=json_decode($out, JSON_UNESCAPED_UNICODE);

	return $json;
}

/*function my_city()
{
	$ip=$_SERVER['REMOTE_ADDR'];

	$link="http://api.sypexgeo.net/json/$ip";

	$curl=curl_init(); #Сохраняем дескриптор сеанса cURL
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl,CURLOPT_URL,$link);
	curl_setopt($curl,CURLOPT_HEADER,false);
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
	$out=curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
	curl_close($curl);
   	$json=json_decode($out, JSON_UNESCAPED_UNICODE);

	return $json['city']['name_ru'];
}*/