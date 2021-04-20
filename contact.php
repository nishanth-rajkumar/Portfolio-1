<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['text'];

	$email_from = 'jerrin.bright2018@vitstudent.ac.in';

	$email_subject = 'New Form from .tech';

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";

	$to = "jerriebright@gmail.com"

	$headers = "From: $email_from \r\n";

	$headers = "Reply-To: $visitor_email \r\n";

	mail($to, $email_subject, $email_body, $headers);

	header("Location: index.html");

?>