<?php 
	$to = "andrey.alexeich@gmail.com";
	$subject = "Обращение с сайта ООО ГКСМ"; 

	$name = $_POST['form_name_input'];
	$phone = $_POST['form_phone_input'];

	$message = ' 
	<html> 
	    <head> 
	        <title>Обращение с сайта ООО "ГКСМ"</title>
	    </head> 
	    <body>
	        <p><b>Имя:</b> '.$name.'</p> 
	        <p><b>Телефон:</b> '.$phone.'</p>
	    </body> 
	</html>'; 

	$headers = "Content-type: text/html; charset=utf-8";

	mail($to, $subject, $message, $headers); 
?>