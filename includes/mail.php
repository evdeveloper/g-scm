<?php 
	$to  = "andrey.alexeich@gmail.com";
	$subject = "Обращение с сайта ООО ГСКМ"; 

	$name = $_POST['form__name-input'];
	$phone = $_POST['form__phone-input'];

	$message = ' 
	<html> 
	    <head> 
	        <title>Обращение с сайта ООО ГСКМ</title>
	    </head> 
	    <body>
	        <p><b>Имя:</b> '.$name.'</p> 
	        <p><b>Телефон:</b> '.$phone.'</p>
	    </body> 
	</html>'; 

	$headers  = "Content-type: text/html; charset=utf-8";

	mail($to, $subject, $name, $phone, $headers); 
?>