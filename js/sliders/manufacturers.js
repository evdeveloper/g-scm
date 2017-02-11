var manufacturers_slider = $('.manufacturers-slider').slick({
    infinite: true,
    autoplay: true,
    variableWidth: true,
    draggable: false,
    arrows: false,
    slidesToShow: 5,
    slidesToScroll: 1
});

$('#manufacturers-slider__left').click(function(){
   manufacturers_slider.slick("slickPrev"); 
});

$('#manufacturers-slider__right').click(function(){
   manufacturers_slider.slick("slickNext");  
});