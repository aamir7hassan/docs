<?php 
	$to = $email;
	$subject = 'ExamsCard Purchased Pins';
	$from = 'sales@examscard.com';
	 
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// $from="sales@yeswecan.pk";
	
	// Create email headers -- this will make it spam free
	
	$headers .= 'From: '.$from."\r\n".
		'Reply-To: '.$from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
	 
	// Compose a simple HTML email message for user
	$message = '<html><body style="padding:2%">';
	$message .= '<h1 style="color:#f40;">Hi Dear Customer!</h1>';
	$message .= '<p style="font-size:15px;">SALES DEPARTMENT ExamsCard!</p><br/>';
	$message .= '</body></html>';
	 
	// Sending email
	$to_admin="examscard@gmail.com";
	//$to_admin="aamir7hassan@gmail.com";
	mail($to, $subject, $message, $headers);
?>