$(document).ready(function(){

$('.open-win').hide();
$('.white-window').hide();
$('.connect-you').hide();


$('.open-win').click(function(event) {
  if ($(event.target).closest("#open-form").length) return;
      $('.open-win').fadeOut(500);
  event.stopPropagation();
});

$('.open-win img').click(function() {
    $('.open-win').fadeOut(500);
});


$('nav a, .go').click(function(e){
        var anchor = $(this);
        var hh = 34; //header height

        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - hh + 'px'
        }, 750);
    e.preventDefault();
    });

$('.mobile-menu p').click(function(e){
        var anchor = $(this);
        var hh = 34; //header height
        $('.mobile-menu').toggleClass("t");
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - hh + 'px'
        }, 750);
    e.preventDefault();
    });



  $("#open-form").submit(function(e) { //устанавливаем событие отправки для формы с id=form
    e.preventDefault();
    var form_data = $(this).serialize(); //собераем все данные из формы
    $.ajax({
    type: "POST", //Метод отправки
    url: $('#open-form').attr('action'), //путь до php фаила отправителя
    data: form_data,
    success: function() {
    //код в этом блоке выполняется при успешной отправке сообщения
    $('#open-form').fadeOut(500);
    $('.connect-you').fadeIn(500);
    setTimeout(function() {    // Выставляем таймер
      $('.open-win').hide(500);
    }, 4500);

    }
  });
});

$('.mobile-button').click(function(){
  $('.mobile-menu').toggleClass("t");
});


$('.reg-me, .but_up').click(function(e){
    var a = $(this).attr('href');
    $('.open-win').fadeIn(900);
    $('#dataMk').attr("value",a);
    e.preventDefault();
});

/*Увеличение изображения*/
$('.img-mk').click(function(){
  var img = $(this);
  var src = img.attr('src');
  $('body').append("<div class='popup'>"+
                    "<div class='popup_bg'></div>"+
                    "<img src='"+src+"' class='popup_img' />"+ // Само увеличенное фото
                    "</div>");
  $('.popup').fadeIn(800);
  $('header').fadeOut(300);
  $('#firstDisplay').fadeOut(300);
  $('.popup_bg').click(function(){
    $('.popup').fadeOut(800);    // Медленно убираем всплывающее окно
    $('header').fadeIn(300);
    $('#firstDisplay').fadeIn(800);
    setTimeout(function() {    // Выставляем таймер
      $('.popup').remove();
    }, 800);
  });
});

$('.day-discript').click(function() {
  var d = $(this).attr('id');
  if (d == "day-1"){
    $('.img-container').removeClass("active");
    $('#day-1-img').toggleClass("active");
  }
  if (d == "day-2"){
    $('.img-container').removeClass("active");
    $('#day-2-img').toggleClass("active");
  }
  if (d == "day-3"){
    $('.img-container').removeClass("active");
    $('#day-3-img').toggleClass("active");
  }
  if (d == "day-4"){
    $('.img-container').removeClass("active");
    $('#day-4-img').toggleClass("active");
  }
  if (d == "day-5"){
    $('.img-container').removeClass("active");
    $('#day-5-img').toggleClass("active");
  }
  if (d == "day-6"){
    $('.img-container').removeClass("active");
    $('#day-6-img').toggleClass("active");
  }
  if (d == "day-7"){
    $('.img-container').removeClass("active");
    $('#day-7-img').toggleClass("active");
  }
  if (d == "day-8"){
    $('.img-container').removeClass("active");
    $('#day-8-img').toggleClass("active");
  }
  if (d == "day-9"){
    $('.img-container').removeClass("active");
    $('#day-9-img').toggleClass("active");
  }
  if (d == "day-10"){
    $('.img-container').removeClass("active");
    $('#day-10-img').toggleClass("active");
  }
  if (d == "day-11"){
    $('.img-container').removeClass("active");
    $('#day-11-img').toggleClass("active");
  }
  if (d == "day-12"){
    $('.img-container').removeClass("active");
    $('#day-12-img').toggleClass("active");
  }
  if (d == "day-13"){
    $('.img-container').removeClass("active");
    $('#day-13-img').toggleClass("active");
  }
  if (d == "day-14"){
    $('.img-container').removeClass("active");
    $('#day-14-img').toggleClass("active");
  }
  if (d == "day-15"){
    $('.img-container').removeClass("active");
    $('#day-15-img').toggleClass("active");
  }
});

/*$.mask.definitions['~']='[+-]';*/
$('#phoneForm').mask('(999) 999-9999');





});//конец скрипта