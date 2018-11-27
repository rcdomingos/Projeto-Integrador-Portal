$(document).ready(function() {

var slidebar_width  = 320; //tamamho do slide
var slide_bar       = $(".side-menu-sec"); //slidebar
var slide_open_btn  = $(".slide-menu-open");
var slide_close_btn = $(".menu-close");
var overlay         = $(".side-menu-overlay");

slide_open_btn.click(function(e){
    e.preventDefault();
    slide_bar.css( {"left": "0px"}); //lado que o menu vai abrir
    overlay.css({"opacity":"1", "width":"100%"});
});
slide_close_btn.click(function(e){
    e.preventDefault();
    slide_bar.css({"left": "-"+ slidebar_width + "px"}); //lado que o menu vai fechar
    overlay.css({"opacity":"0", "width":"0"});
});

});
