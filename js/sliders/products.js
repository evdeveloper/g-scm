var products_slider = $('.slider-products').slick({
    infinite: true,
    autoplay: true,
    variableWidth: true,
    draggable: false,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 1
});

$('#products-slider__left').click(function(){
    products_slider.slick("slickPrev"); 
});

$('#products-slider__right').click(function(){
    products_slider.slick("slickNext"); 
});

$('#recently-products-slider__left').click(function(){
    products_slider.slick("slickPrev"); 
});

$('#recently-products-slider__right').click(function(){
    products_slider.slick("slickNext"); 
});



var sales_slider = $('.slider-sales').slick({
    infinite: true,
    autoplay: true,
    variableWidth: true,
    draggable: false,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 1
});

$('#sale-slider__left').click(function(){
    sales_slider.slick("slickPrev"); 
});

$('#sale-slider__right').click(function(){
    sales_slider.slick("slickNext"); 
});