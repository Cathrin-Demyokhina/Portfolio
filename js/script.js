/**
 * Created by Cathrin
 * */
$(document).ready(function(){
    $('main_head').css('min-height', $(window).height());
});

//Portfolio
$('#portfolio-mixes').mixItUp({
    layout: {
        display: 'block'
    }
});


$(".portfolio li").click(function(){
   $(".portfolio li").removeClass("active");
    $(this).addClass("active");
});



//Pop-Up
$(".popup").magnificPopup({
    type: 'image'
});
$(".popup_content").magnificPopup({
    type: 'inline', midClick : true, showCloseBtn: true, closeBtnInside: true, fixedContentPos: true
});


//Swap the images
$('img').bind('mouseenter mouseleave', function() {
    $(this).attr({
        src: $(this).attr('data-other-src')
        , 'data-other-src': $(this).attr('src')
    })
});

//Form
$("input,textarea").not("[type=submit]").jqBootstrapValidation();

//Scroll
$(".top-menu a[href*='#']").mPageScroll2id();

//Animation
$(".top-text").animated("fadeInDown", "fadeOutUp");
$(".section-header h2").animated("fadeInUp", "fadeOutDown");


$(".animation-1").animated("zoomIn", "zoomOut");
$(".animation-2").animated("fadeInLeft", "fadeOutLeft");
$(".animation-3").animated("fadeInRight", "fadeOutRight");
$(".animation-4").animated("fadeInUp");
//Sandwich

$(".toggle-menu").click(function() {
   $(".sandwich").toggleClass("active");
});

//Menu
$(".top-menu ul a").click (function(){
    $(".top-menu").fadeOut(600);
    $(".sandwich").toggleClass("active");
});

$(".toggle-menu").click(function() {
    if ($(".top-menu").is(":visible")) {

        $(".top-menu").fadeOut(600);
        $(".top-menu li a").removeClass("fadeInUp animated");
        $(".top-text").css("z-index", "150");
    }  else {

        $(".top-menu").fadeIn(600);
        $(".top-menu li a").addClass("fadeInUp animated");
        $(".top-text").css("z-index", "-9999");
    }
});


//Loader
$(window).load(function() {
    $(".loader_inner").fadeOut();
    $(".loader").delay(400).fadeOut("slow");
});


