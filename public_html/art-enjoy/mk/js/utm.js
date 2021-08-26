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

});