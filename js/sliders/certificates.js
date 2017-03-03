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