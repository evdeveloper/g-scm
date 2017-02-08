$(document).ready(function() {
    var main_slider = $('#main__slider').lightSlider({
        item: 1,
        pager: false,
        slideMargin: 0,
        controls: false,
        auto: true,
        loop: true,
        enableDrag: false,
        pauseOnHover: true,
        pause: 6000
    });

    $('#main__slider-left').click(function(){
        main_slider.goToPrevSlide(); 
    });

    $('#main__slider-right').click(function(){
        main_slider.goToNextSlide(); 
    });



    var products_slider = $('#products__slider').lightSlider({
        item: 4,
        pager: false,
        adaptiveHeight: true,
        slideMargin: 75,
        controls: false,
        auto: true,
        loop: true,
        enableDrag: false,
        pauseOnHover: true,
        pause: 6000
    });

    $('#products__slider-left').click(function(){
        products_slider.goToPrevSlide(); 
    });

    $('#products__slider-right').click(function(){
        products_slider.goToNextSlide(); 
    });




    var certificates_slider = $('#certificates__slider').lightSlider({
        item: 4,
        pager: false,
        slideMargin: 56,
        controls: false,
        auto: true,
        loop: true,
        enableDrag: false,
        pauseOnHover: true,
        pause: 6000
    });

    $('#certificates__slider-left').click(function(){
       certificates_slider.goToPrevSlide(); 
    });

    $('#certificates__slider-right').click(function(){
       certificates_slider.goToNextSlide(); 
    });



    var manufacturers_slider = $('#manufacturers__slider').lightSlider({
        item: 5,
        pager: false,
        slideMargin: 56,
        controls: false,
        auto: true,
        loop: true,
        enableDrag: false,
        pauseOnHover: true,
        pause: 6000
    });

    $('#manufacturers__slider-left').click(function(){
       manufacturers_slider.goToPrevSlide(); 
    });

    $('#manufacturers__slider-right').click(function(){
       manufacturers_slider.goToNextSlide(); 
    });
});