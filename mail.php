<?php
//Получаем данные с формы с помощью POST запроса.
$name =htmlspecialchars($_POST['name']);//Экранируем символы от тегов и прочего, чтоб не залезли в бд
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$org = htmlspecialchars($_POST['organization']);
$subject = $_POST['subject'];
$headers = "MIME-Version: 1.0" . "\r\n";//определяем хэдеры для письма
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";



switch ($subject) {
	case '1':
		$to = 'zaharov@gne.gov.spb.ru';
		break;
	case '2':
		$to = 'volkov@gne.gov.spb.ru';
		break;
	case '3':
		$to = 'techsupport@gne.gov.spb.ru';
		break;
	case '4':
		$to = 'chegotova@gne.gov.spb.ru';
		break;
	case '5':
		$to = 'svistunov@gne.gov.spb.ru';
		break;
	case '6':
		$to = 'chegotova@gne.gov.spb.ru';
		break;
}
	$subject = 'Вопрос с официального сайта';
	$m = "Организация:$org \r\n Имя:$name \r\n Почта:$email \r\n  Сообщение:$message";
	if (mail($to,$subject , $m, $headers)) {
				echo "Your message has been sent";
			}
			else{
				echo "Произошла ошибка. Сообщение не отправлено";
			}
?>