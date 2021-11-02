<?php 
	$news_subject = $_POST['news_subject'];
	$date = $_POST['date'];
	$news = $_POST['news'];
	if(strlen(trim($news_subject)) < 3)
		echo "ПИШИ";
	else if(strlen(trim($date)) < 10)
		echo "ПИШИ";
	else if(strlen(trim($news)) < 10)
		echo "ПИШИИИИ";
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
		$mysql -> query("INSERT INTO `news` (`news_subject`, `date`, `news`) VALUES('$news_subject', '$date', '$news')");
		$news = $mysql -> query("SELECT * FROM `news`");
		print_r($news);
	}
?>