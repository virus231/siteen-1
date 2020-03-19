$('#block').hover(function(){
	$('.add_desc').addClass('d-none');
}, function() {
	$('.add_desc').removeClass('d-none');
});

$('#none').hover(function(){
	$('.add_desc_2').addClass('d-none');
}, function() {
	$('.add_desc_2').removeClass('d-none');
});


$('.link-js').bind('click', function (e) {
    e.preventDefault();
    let target = $(this).attr("href");

    $('html, body').stop().animate({
        scrollTop: $(target).offset().top
    }, 1000, function () {
        location.hash = target;
    });
    if ($(window).width() < 1500) {
        $('.mobile-menu').removeClass('active');
        $('.hamb').removeClass('active');
        $('body').removeClass('fix');
        $('.header').removeClass('open-nav');
        $('.menu-link').removeClass('active');
        $('.pattern').removeClass('actived');
    }
    return false;
});



$(document).ready(function () { 
  $('.menu-link').on('click', function(e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $('.menu-link').toggleClass('burger');
    $('.mobile-menu').toggleClass('active');
    $('.pattern').toggleClass('actived');
    // $('.section').toggleClass('index');
  });
});


// $(".menu-link").on('click', function () {
//     if (!$(this).hasClass('active')) {
//         $(this).addClass('active');
//         $('#menu').addClass('active');
//         $('body').addClass('fix');
//         $('.pattern').addClass('actived');
        
//     } else {
//         $('body').removeClass('fix');
//         $(this).removeClass('active');
//         $('#menu').removeClass('active');
//         $('.pattern').removeClass('actived');
        
//     }
// });







