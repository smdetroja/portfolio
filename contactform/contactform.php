<?php
		$name = $_POST['name'];
		$email= $_POST['email'];
		$subject =  $_POST['subject'];
		$message= $_POST['message'];

		$to = "godkaecilius@gmail.com";

		$txt = "Name = ". $name . "\r\n Email = "
			. $email . "\r\n Message =" ." . $message;

		$headers .= 'From:'.$email .'\r\n To : @smdetroja.com \r\n";
			
		if($email != NULL) {
			mail($to, $subject, $txt, $headers);
		}

		header("Location:file: index.html");
?>
