$(".form").validate({
	submitHandler: function (form) {
	    $.ajax({
           type: "POST",
           url: "includes/mail.php",
           data: $(".form").serialize(),
           success: function(data) {
               $(".form").append('<p style="color: green">Спасибо за обращение! С Вами скоро свяжутся</p>');
           }
        });

	    e.preventDefault();
	},

	rules: {
		name: {
	  		minlength: 4,
	    	required: true
		},
		phone: {
	  		number: true,
	    	required: true
		}
	},

	messages: {
		name: {
			minlength: "Имя должно содержать как минимум 4 символа",
			required: "Поле не должно быть пустым"
		},
		phone: {
			number: "Неправильный формат",
			required: "Поле не должно быть пустым"
		}
	}
});