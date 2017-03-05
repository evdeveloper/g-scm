$(".popup-form").validate({
	submitHandler: function (form) {
	    $.ajax({
           type: "POST",
           url: "includes/mail.php",
           data: $(".popup-form").serialize(),
           success: function(data) {
               alert("Спасибо за обращение! С Вами скоро свяжутся");
               $("#callback-overlay").fadeOut(200);
           }
        });
	},

	rules: {
		form_name_input: {
	  		minlength: 4,
	    	required: true
		},
		form_phone_input: {
	  		minlength: 17,
	    	required: true
		}
	},

	messages: {
		form_name_input: {
			minlength: "Имя должно содержать как минимум 4 символа",
			required: "Поле не должно быть пустым"
		},
		form_phone_input: {
			minlength: "Номер телефона должен содержать 11 символов",
			required: "Поле не должно быть пустым"
		}
	}
});


$(".footer-form").validate({
	submitHandler: function (form) {
	    $.ajax({
           type: "POST",
           url: "includes/mail.php",
           data: $(".footer-form").serialize(),
           success: function(data) {
               alert("Спасибо за обращение! С Вами скоро свяжутся");
           }
        });
	},

	rules: {
		form_name_input: {
	  		minlength: 4,
	    	required: true
		},
		form_phone_input: {
	  		minlength: 17,
	    	required: true
		}
	},

	messages: {
		form_name_input: {
			minlength: "Имя должно содержать как минимум 4 символа",
			required: "Поле не должно быть пустым"
		},
		form_phone_input: {
			minlength: "Номер телефона должен содержать 11 символов",
			required: "Поле не должно быть пустым"
		}
	}
});