<?php
//Получаем данные с формы с помощью POST запроса.
$name =htmlspecialchars($_POST['name']);//Экранируем символы от тегов и прочего, чтоб не залезли в бд
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$org = htmlspecialchars($_POST['organization']);
$subject = $_POST['subject'];
$headers = "MIME-Version: 1.0" . "\r\n";//определяем хэдеры для письма
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";


// При выборе определенного select в форме, сюда пересылается его value и в зависимости от выбранной темы вопроса, письма сыпятся на определенный почтовый ящик. в 3 варианте необходим Будников, а не я, это был пробный вариант. Прочитать про switch-> case можно вот тут http://php.net/manual/ru/control-structures.switch.php
switch ($subject) {
	case '1':
	$to = 'zaharov@gne.gov.spb.ru';
	$subject = 'Вопрос с официального сайта';
	$m = "Организация:$org \r\n Имя:$name \r\n Почта:$email \r\n  Сообщение:$message";
		if (mail($to,$subject , $m, $headers)) { //функция mail() отправляет письмо подробней про функцию можно глянуть вот тут- http://php.net/manual/en/function.mail.php
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