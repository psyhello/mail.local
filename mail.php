<?php

$name =htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$org = htmlspecialchars($_POST['organization']);
$subject = $_POST['subject'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";



switch ($subject) {
	case '1':
	$to = 'zaharov@gne.gov.spb.ru';
	$subject = 'Вопрос с официального сайта';
	$m = "Организация:$org \r\n Имя:$name \r\n Почта:$email \r\n  Сообщение:$message";
		if (mail($to,$subject , $m, $headers)) {
				echo "Your message has been sent";
			}
			else{
				echo "Произошла ошибка. Сообщение не отправлено";
			}
			//echo "$to . $subject . $m";
		break;
	case '2':
	$to = 'volkov@gne.gov.spb.ru';
	$subject = 'Вопрос с официального сайта';
	$m = "Организация:$org \r\n Имя:$name \r\n Почта:$email \r\n  Сообщение:$message";
		if (mail($to,$subject , $m, $headers)) {
				echo "Your message has been sent";
			}
			else{
				echo "Произошла ошибка. Сообщение не отправлено";
			}
		//echo "$to . $subject . $m";
		break;
	case '3':
	$to = 'mazaev@gne.gov.spb.ru';
	$subject = 'Вопрос с официального сайта';
	$m = "Организация:$org \r\n Имя:$name \r\n Почта:$email \r\n  Сообщение:$message";
		if (mail($to,$subject , $m, $headers)) {
				
				echo "Your message has been sent";
			}
			else{
				echo "Произошла ошибка. Сообщение не отправлено";
			}
		//echo "$to . $subject . $m";
		break;
	case '4':
	$to = 'fridental@gne.gov.spb.ru';
	$subject = 'Вопрос с официального сайта';
	$m = "Организация:$org \r\n Имя:$name \r\n Почта:$email \r\n  Сообщение:$message";
		if (mail($to,$subject , $m, $headers)) {
				echo "Your message has been sent";
			}
			else{
				echo "Произошла ошибка. Сообщение не отправлено";
			}
		//echo "$to . $subject . $m";
		break;
	case '5':
	$to = 'svistunov@gne.gov.spb.ru';
	$subject = 'Вопрос с официального сайта';
	$m = "Организация:$org \r\n Имя:$name \r\n Почта:$email \r\n  Сообщение:$message";
		if (mail($to,$subject , $m, $headers)) {
				echo "Your message has been sent";
			}
			else{
				echo "Произошла ошибка. Сообщение не отправлено";
			}

		break;
	case '6':
	$to = 'chegotova@gne.gov.spb.ru';
	$subject = 'Вопрос с официального сайта';
	$m = "Организация:$org \r\n Имя:$name \r\n Почта:$email \r\n  Сообщение:$message";
		if (mail($to,$subject , $m, $headers)) {
				echo "Your message has been sent";
			}
			else{
				echo "Произошла ошибка. Сообщение не отправлено";
			}
		break;
}
?>