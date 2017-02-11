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

    // $('#recently-products__slider-left').click(function(){
    //     products_slider.slick("slickPrev"); 
    // });

    // $('#recently-products__slider-right').click(function(){
    //     products_slider.slick("slickNext"); 
    // });
});