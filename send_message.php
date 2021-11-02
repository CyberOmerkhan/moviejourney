<?php 
	$to = "amalekaidarhan@gmail.com";
	$from = $_POST['from'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	if(!stristr($from, "@gmail.com")){
		setcookie("error_email", "Введите в формате @gmail.com", time() + 1, "/");
		header('Location: contacts.php');
	}
	else if(mb_strlen(trim($subject)) < 5){
		setcookie("error_subject", "Тема сообщения не менее 5 символов", time() + 1, "/");
		header('Location: contacts.php');
	}
	else if(mb_strlen($message) < 15){
		setcookie("error_message", "Сообщение не менее 15 символов", time() + 1, "/");
		header('Location: contacts.php');
	}
	else{
		$subject = "=?utf-8?B?".base64_encode($subject)."?=";
		$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset = utf-8\r\n";
		mail($to, $subject, $message, $headers);
		header('Location: contacts.php');
	}
?>