var main_slider = $('#main-slider').slick({
    infinite: true,
    autoplay: true,
    draggable: false,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1
});

$('#main-slider__left').click(function(){
    main_slider.slick("slickPrev"); 
});

$('#main-slider__right').click(function(){
    main_slider.slick("slickNext"); 
});