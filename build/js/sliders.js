var certificates_slider = $('#certificates-slider').slick({
    infinite: true,
    autoplay: true,
    variableWidth: true,
    draggable: false,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    }
    ]
});

$('#certificates-slider__left').click(function(){
   certificates_slider.slick("slickPrev"); 
});

$('#certificates-slider__right').click(function(){
   certificates_slider.slick("slickNext");  
});
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
var manufacturers_slider = $('.manufacturers-slider').slick({
    infinite: true,
    autoplay: true,
    variableWidth: true,
    draggable: false,
    arrows: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 320,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      }
    }
    ]
});

$('#manufacturers-slider__left').click(function(){
   manufacturers_slider.slick("slickPrev"); 
});

$('#manufacturers-slider__right').click(function(){
   manufacturers_slider.slick("slickNext");  
});
var products_slider = $('.slider-products').slick({
    infinite: true,
    autoplay: true,
    variableWidth: true,
    draggable: false,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 320,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    }
    ]
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
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 320,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    }
    ]
});

$('#sale-slider__left').click(function(){
    sales_slider.slick("slickPrev"); 
});

$('#sale-slider__right').click(function(){
    sales_slider.slick("slickNext"); 
});