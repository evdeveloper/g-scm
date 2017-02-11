var certificates_slider = $('#certificates-slider').slick({
    infinite: true,
    autoplay: true,
    variableWidth: true,
    draggable: false,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 1
});

$('#certificates-slider__left').click(function(){
   certificates_slider.slick("slickPrev"); 
});

$('#certificates-slider__right').click(function(){
   certificates_slider.slick("slickNext");  
});