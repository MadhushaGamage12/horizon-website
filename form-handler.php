<?php
	$name=$_Post['name'];
	$visitor_email=$_Post['email'];
	$subject=$_Post['subject'];
	$message=$_Post['message'];
	
	$email_form ='horizoncampus@gmail.com';
	$email-subject='New Form Submission';
	$email_body="User Name: $name.\n".
					"User email: $visitor_email.\n".
					"Subject: $Subject.\n".
					"User message: $message.\n".
					
	$to='';
	$headers:"From: $email_form\r\n";
	$headers:"Reply-To: $visitor_email\r\n";
	mail($to,$email-subject,$email_body,$headers);
	
	header("Location:contact.html");
?>