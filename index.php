<?php

	require_once 'PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPDebug = 2;
	$mail->Host = 'smtp.gmail.com';
	$mail->Username = 'flexterandro@gmail.com';
	$mail->Password = 'Pakito90901';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;

	$mail->From = 'flexterandro@gmail.com';
	$mail->FromName = 'Paskal Novakov';
	$mail->addReplyTo('flexterandro@gmail.com', 'Reply address');
	$mail->addAddress('flexterandro@gmail.com', 'Paskal');
	
	$mail->Subject = 'here is an email';
	$mail->Body = 'This is the body an email';
	$mail->AltBody = 'This is the body an email';

	var_dump($mail->send());


?>


<html>
<head>
	<title>asd</title>
</head>
<body>


<h1>TITLE</h1>

</body>
</html>