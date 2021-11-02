<?php
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$mysql = new mysqli('a371330.mysql.mchost.ru', 'a371330_1', '854RLnSiKN9D', 'a371330_1');
	$mysql -> query('set names utf8');
	$mysql -> query('set character set utf8');
	$mysql -> query('set character_set_client=utf8');
	$mysql -> query('set character_set_results=utf8');
	$mysql -> query('set character_set_connection=utf8');
	$mysql -> query('set character_set_database=utf8');
	$mysql -> query('set character_set_server=utf8');
	$mysql ->  query("SET SESSION collation_connection = 'utf8_general_ci';");
	$result = $mysql -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' AND `name` = '$name'");
	$user = $result -> fetch_assoc();
	if(is_countable($user)){
		setcookie("login", $login, time() + 3600*24*365*10, "/");
		setcookie("pass", $pass, time() + 3600*24*365*10, "/");
		setcookie("name", $name, time() + 3600*24*365*10, "/");
		header('Location: private.php');
	}
	else{
		setcookie("error_logg", "Такого пользователя нет", time() + 5, "/");
		header('Location: private.php');
	}
	if($user['login'] == "Admin" && $user['name'] == "Amirkhan" && $user['pass'] == "Adeka2015"){
		header('Location: edit_news.php');
	}