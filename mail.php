<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
/*echo $name . $email . $message . $subject;*/



switch ($subject) {
	case '1':
	$to = 'svistunov@gne.gov.spb.ru';
	$subject = 'Вопрос с официального сайта';
	$m = "$name \n $email \n $message";
		mail("$to,$subject , $message, $headers");
		echo "$to . $subject . $m";
		break;
	case '2':
	$to = 'mazaev@gne.gov.spb.ru';
	$subject = 'Вопрос с официального сайта';
	$m = "$name \n $email \n $message";
		mail("$to,$subject , $message, $headers");
		echo "$to . $subject . $m";
		break;
	case '3':
	$to = 'chegotova@gne.gov.spb.ru';
	$subject = 'Вопрос с официального сайта';
	$m = "$name \n $email \n $message";
		mail("$to,$subject , $message, $headers");
		echo "$to . $subject . $m";
		break;
	case '4':
	$to = 'techsupport@gne.gov.spb.ru';
	$subject = 'Вопрос с официального сайта';
	$m = "$name \n $email \n $message";
		mail("$to, $subject , $message, $headers");
		echo "$to . $subject . $m";
		break;
}
?>