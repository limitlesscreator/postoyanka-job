$(document).ready(function(){

$('#dispalyArtisrs').hide();
$('#AP_1').hide();
$('#AP_2').hide();
$('#AP_3').hide();
$('#AP_4').hide();
$('#AP_5').hide();
$('#AP_6').hide();

$(function(){
  $('#dispalyArtisrs').click(function(event) {
    if ($(event.target).closest("#form3").length) return;
	if ($(event.target).closest("#back").length) return;
	if ($(event.target).closest("#forward").length) return;
    $('#dispalyArtisrs').fadeOut(700);
	$('#AP_1').hide();
	$('#AP_2').hide();
	$('#AP_3').hide();
	$('#AP_4').hide();
	$('#AP_5').hide();
	$('#AP_6').hide();
	event.stopPropagation();
  });
});

$('#ap_01').click(function(){
	$('#dispalyArtisrs').fadeIn(100);
	$('#AP_1').slideDown(1200);
	
});
$('#ap_02').click(function(){
	$('#dispalyArtisrs').fadeIn(100);
	$('#AP_2').slideDown(1200);
	
});

$('#ap_03').click(function(){
	$('#dispalyArtisrs').fadeIn(100);
	$('#AP_3').slideDown(1200);
	
});

$('#ap_04').click(function(){
	$('#dispalyArtisrs').fadeIn(100);
	$('#AP_4').slideDown(1200);
	
});

$('#ap_05').click(function(){
	$('#dispalyArtisrs').fadeIn(100);
	$('#AP_5').slideDown(1200);
	
});

$('#ap_06').click(function(){
	$('#dispalyArtisrs').fadeIn(100);
	$('#AP_6').slideDown(1200);
	
});

});//конец документа