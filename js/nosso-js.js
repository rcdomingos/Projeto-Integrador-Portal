$(document).ready(function() {

var slidebar_width  = 340; //tamamho do slide
var slide_bar       = $(".side-menu-sec"); //slidebar
var slide_open_btn  = $(".slide-menu-open");
var slide_close_btn = $(".menu-close");
var overlay         = $(".side-menu-overlay");
var btn_acess       = $(".btn-acess");

slide_open_btn.click(function(e){
    e.preventDefault();
    slide_bar.css( {"left": "0px"}); //lado que o menu vai abrir
    overlay.css({"opacity":"1", "width":"100%"});
    btn_acess.removeAttr('hidden');
    slide_open_btn.attr('aria-expanded', true)
});
slide_close_btn.click(function(e){
    e.preventDefault();
    slide_bar.css({"left": "-"+ slidebar_width + "px"}); //lado que o menu vai fechar
    overlay.css({"opacity":"0", "width":"0"});
    btn_acess.attr('hidden', true);
    slide_open_btn.attr('aria-expanded', false)
});

});
//tirando a rotação do carrosel
$('.carousel').carousel({
    interval: false
  });