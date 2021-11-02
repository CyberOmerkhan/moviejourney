<?php 
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	if(mb_strlen(filter_var(trim($name))) < 4){
		setcookie("error_name", "Имя не менее 4 символов", time() + 1, "/");
		header('Location: registration.php');
	}
	else if(mb_strlen(filter_var(trim($login))) < 4){
		setcookie("error_login", "Логин не менее 4 символов", time() + 1, "/");
		header('Location: registration.php');
	}
	else if(mb_strlen(filter_var(trim($pass))) < 4){
		setcookie("error_pass", "Пароль не менее 4 символов", time() + 1, "/");
		header('Location: registration.php');
	}
	else{
		$mysql = new mysqli('a371330.mysql.mchost.ru', 'a371330_1', '854RLnSiKN9D', 'a371330_1');
		$mysql -> query('set names utf8');
		$mysql -> query('set character set utf8');
		$mysql -> query('set character_set_client=utf8');
		$mysql -> query('set character_set_results=utf8');
		$mysql -> query('set character_set_connection=utf8');
		$mysql -> query('set character_set_database=utf8');
		$mysql -> query('set character_set_server=utf8');
		$mysql ->  query("SET SESSION collation_connection = 'utf8_general_ci';");
		$mysql -> query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");
		setcookie("login", $login, time() + 3600*24*365*10, "/");
		setcookie("pass", $pass, time() + 3600*24*365*10, "/");
		setcookie("name", $name, time() + 3600*24*365*10, "/");
		header('Location: authorization.php');
	}
?>