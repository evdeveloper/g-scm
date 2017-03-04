$(document).ready(function() {
    //FIXED TOP NAV
    var $menu = $(".topnav-container");
    $(window).scroll(function() {
        if ($(this).scrollTop() > $(".header").height() && $menu.hasClass("default")) {
            $menu.removeClass("default").addClass("top-fixed");
        } else if ($(this).scrollTop() <= $(".header").height() && $menu.hasClass("top-fixed")) {
            $menu.removeClass("top-fixed").addClass("default");
        }
    });




    // TOP BUTTON
    var amountScrolled = 600;
    $(window).scroll(function() {
        if ($(window).scrollTop() > amountScrolled) {
            $(".top-btn").fadeIn(400);
        } else {
            $(".top-btn").fadeOut(400);
        }
    });

    $(".top-btn").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 700);
        return false;
    });




	//INPUT PLACEHOLDERS
	$(".topnav-container__search-input").focus(function() {
        $(this).attr("placeholder", "");
    });

    $(".topnav-container__search-input").blur(function() {
        $(this).attr("placeholder", "ПОИСК...");
    });

    $(".form__name-input").focus(function() {
        $(this).attr("placeholder", "");
    });

    $(".form__name-input").blur(function() {
        $(this).attr("placeholder", "Ваше имя");
    });

    $(".form__phone-input").focus(function() {
        $(this).attr("placeholder", "");
    });

    $(".form__phone-input").blur(function() {
        $(this).attr("placeholder", "Ваш телефон");
    });

    $(".catalog-filter__search-input").focus(function() {
        $(this).attr("placeholder", "");
    });

    $(".catalog-filter__search-input").blur(function() {
        $(this).attr("placeholder", "ПОИСК...");
    });

    $(".f__price-input").focus(function() {
        $(this).attr("placeholder", "");
    });

    $(".f__price-input").blur(function() {
        $(this).attr("placeholder", "2");
    });

    $(".t__price-input").focus(function() {
        $(this).attr("placeholder", "");
    });

    $(".t__price-input").blur(function() {
        $(this).attr("placeholder", "2484639");
    });




	
    //MOBILE MENU
    $(".topnav-container__mobile-toggle").click(function() {
        $(".topnav-container__menu").slideToggle(200);
    });



    //POPUP CATALOG
    $(".topnav-container__toggle").click(function() {
		$(".topnav-container__catalog-container").slideToggle(200);
	});


	
	//SEARCH FIELD
	$(".topnav-container__search-icon").click(function() {
		$(this).fadeOut({opacity:0},150);
		$(".topnav-container__search-close").fadeIn(150);
		$(".topnav-container__search-input").animate({width:'toggle',opacity:1},150);
	});

	$(".topnav-container__search-close").click(function() {
        $(this).fadeOut(150);
		$(".topnav-container__search-input").animate({width:'toggle',opacity:0},150);
		$(".topnav-container__search-icon").fadeIn({opacity:1},150);
	});



    //COUNT 
    $(".count-minus").click(function () {
        var $input = $(this).parent().find(".count-input");
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });

    $(".count-plus").click(function () {
        var $input = $(this).parent().find(".count-input");
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });



    //OVERLAYS
    $(".right-section__callback").click(function() {
        $("#callback-overlay").fadeIn(150);
    });

    $(".overlay-container__close").click(function() {
        $("#callback-overlay").fadeOut(150);
    });

    $(".product-item__btn-cart").click(function() {
        $("#cart-overlay").fadeIn(150);
    });

    $(".overlay-container__close").click(function() {
        $("#cart-overlay").fadeOut(150);
    });
});