$(document).ready(function() {
    var main_slider = $('#main__slider').slick({
        infinite: true,
        autoplay: true,
        draggable: false,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('#main__slider-left').click(function(){
        main_slider.slick("slickPrev"); 
    });

    $('#main__slider-right').click(function(){
        main_slider.slick("slickNext"); 
    });



    var products_slider = $('.products__slider').slick({
        infinite: true,
        autoplay: true,
        variableWidth: true,
        draggable: false,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1
    });

    $('#products__slider-left').click(function(){
        products_slider.slick("slickPrev"); 
    });

    $('#products__slider-right').click(function(){
        products_slider.slick("slickNext"); 
    });

    $('#sale__slider-left').click(function(){
        products_slider.slick("slickPrev"); 
    });

    $('#sale__slider-right').click(function(){
        products_slider.slick("slickNext"); 
    });




    var certificates_slider = $('#certificates__slider').slick({
        infinite: true,
        autoplay: true,
        variableWidth: true,
        draggable: false,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1
    });

    $('#certificates__slider-left').click(function(){
       certificates_slider.slick("slickPrev"); 
    });

    $('#certificates__slider-right').click(function(){
       certificates_slider.slick("slickNext");  
    });



    var manufacturers_slider = $('.manufacturers__slider').slick({
        infinite: true,
        autoplay: true,
        variableWidth: true,
        draggable: false,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 1
    });

    $('#manufacturers__slider-left').click(function(){
       manufacturers_slider.slick("slickPrev"); 
    });

    $('#manufacturers__slider-right').click(function(){
       manufacturers_slider.slick("slickNext");  
    });
});