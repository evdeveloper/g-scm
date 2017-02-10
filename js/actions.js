$(document).ready(function() {
    //FIXED TOP NAV
    var $menu = $(".top__nav");
    $(window).scroll(function() {
        if ($(this).scrollTop() > $(".header").height() && $menu.hasClass("default")) {
            $menu.removeClass("default").addClass("top-fixed");
        } else if ($(this).scrollTop() <= $(".header").height() && $menu.hasClass("top__fixed")) {
            $menu.removeClass("top__fixed").addClass("default");
        }
    });




    // TOP BUTTON
    var amountScrolled = 600;
    $(window).scroll(function() {
        if ($(window).scrollTop() > amountScrolled) {
            $(".top__btn").fadeIn(400);
        } else {
            $(".top__btn").fadeOut(400);
        }
    });




	//INPUT PLACEHOLDERS
	$(".top-nav__search-input").focus(function() {
        $(this).attr("placeholder", "");
    });

    $(".top-nav__search-input").blur(function() {
        $(this).attr("placeholder", "ПОИСК...");
    });

    $(".footer__form-input__name").focus(function() {
        $(this).attr("placeholder", "");
    });

    $(".footer__form-input__name").blur(function() {
        $(this).attr("placeholder", "Ваше имя");
    });

    $(".footer__form-input__phone").focus(function() {
        $(this).attr("placeholder", "");
    });

    $(".footer__form-input__phone").blur(function() {
        $(this).attr("placeholder", "Ваш телефон");
    });

	$(".callback-form__name-input").focus(function() {
        $(this).attr("placeholder", "");
    });

    $(".callback-form__name-input").blur(function() {
        $(this).attr("placeholder", "Ваше имя");
    });

    $(".callback-form__phone-input").focus(function() {
        $(this).attr("placeholder", "");
    });

    $(".callback-form__phone-input").blur(function() {
        $(this).attr("placeholder", "Ваш телефон");
    });



	//POPUP CATALOG
	$(".top__nav-toggle").click(function() {
		$(".toggle__catalog").slideToggle(200);
	});


	
	//SEARCH FIELD
	$(".top__nav-icon").click(function() {
		$(this).fadeOut({opacity:0},150);
		$(".top__nav-close").fadeIn(150);
		$(".top__nav-search input").animate({width:'toggle',opacity:1},150);
	});

	$(".top__nav-close").click(function() {
        $(this).fadeOut(150);
		$(".top__nav-search input").animate({width:'toggle',opacity:0},150);
		$(".top__nav-icon").fadeIn({opacity:1},150);
	});



    //CALLBACK OVERLAY
    $(".header__callback-btn").click(function() {
        $("#callback__overlay").fadeIn(200);
    });

    $(".overlay__close").click(function() {
        $("#callback__overlay").fadeOut(200);
    });
});