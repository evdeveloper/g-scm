$(document).ready(function() {
    var main__slider = $("#main__slider").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false
    });

    $("#main__slider-right").click(function() {
        main__slider.slick("slickNext");
    }); 

    $("#main__slider-left").click(function() {
        main__slider.slick("slickPrev");
    });



    var products__slider = $(".products__slider").slick({
        infinite: true,
        autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        variableWidth: true,
        arrows: false
    });

    $("#products__slider-right").click(function() {
        products__slider.slick("slickNext");
    }); 

    $("#products__slider-left").click(function() {
        products__slider.slick("slickPrev");
    });

    $("#sale__slider-right").click(function() {
        products__slider.slick("slickNext");
    }); 

    $("#sale__slider-left").click(function() {
        products__slider.slick("slickPrev");
    });



    var certificates__slider = $("#certificates__slider").slick({
        infinite: true,
        autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        variableWidth: true,
        arrows: false
    });

    $("#certificates__slider-right").click(function() {
        certificates__slider.slick("slickNext");
    }); 

    $("#certificates__slider-left").click(function() {
        certificates__slider.slick("slickPrev");
    });



    var manufacturers__slider = $(".manufacturers__slider").slick({
        infinite: true,
        autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        variableWidth: true,
        arrows: false
    });

    $("#manufacturers__slider-right").click(function() {
        manufacturers__slider.slick("slickNext");
    }); 

    $("#manufacturers__slider-left").click(function() {
        manufacturers__slider.slick("slickPrev");
    });
});