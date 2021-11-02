<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Рейтинги</title>
	<link rel= "icon" href= "img/icon.png" type=”image/x-icon”> 
</head>
<body>
	<div class="main">
		<div class="header">
			<div class="logo">
				<div class="logo_text">
					<h1><a href = "index.php">Movie<span class = "bus">journey</span></a></h1>
					<h2>Исследуя мир кино with Amalek</h2>
				</div>
			</div>
			<div class="menubar">
				<ul class="menu">
					<li><a href="index.php">Главная</a></li>
					<li><a href = "films.php">Фильмы</a></li>
					<li><a href = "soapoperas.php">Сериалы</a></li>
					<li class = "selected"><a href = "ratings.php">Рейтинги</a></li>
					<li><a href = "contacts.php">Контакты</a></li>
					<li class = "hidden"><a href="news.php">Новости</a></li>
					<?php if(isset($_COOKIE['name'])): ?>
					<li><a href = "private.php">Кабинет[<?=$_COOKIE['name']?>]</a></li>
					<?php else:?>
					<li><a href = "private.php">Кабинет</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
		<div class="site_content">
			<div class="sidebar_container">
				<div class="sidebar">
					<h2>Поиск</h2>
					<form method = "post" action = "search.php">
						<input type = "search" name = "search" placeholder = "Ваш запрос">
						<input type = "submit" value = "Найти" class = "btn">
					</form>
				</div>
				<div class="sidebar">
					<h2>Вход</h2>
					<form method = "post" action = "auth.php">
						<?php if(!isset($_COOKIE['login'])): ?>
						<input type = "text" name = "name" placeholder = "Введите имя">
						<input type = "text" name = "login" placeholder = "Введите логин">
						<input type = "password" name = "pass" placeholder = "Введите пароль">
						<?php else:?>
						<input type = "text" name = "name" placeholder = "Введите имя" value = "<?=$_COOKIE['name']?>">
						<input type = "text" name = "login" placeholder = "Введите логин" value = "<?=$_COOKIE['login']?>">
						<input type = "password" name = "pass" placeholder = "Введите пароль" value = "<?=$_COOKIE['pass']?>">
						<?php endif; ?>
						<input type = "submit" class = "btn" value = "Войти">
						<div class="passreg">
							<a href = "pass.php">Забыли пароль?     </a>   |  <a href = "registration.php">     Зарегистрироваться</a>
						</div>
					</form>
				</div>
				<div class="sidebar">
					<h2>Новости</h2>
					<?php 
						$mysql = new mysqli('a371330.mysql.mchost.ru', 'a371330_1', '854RLnSiKN9D', 'a371330_1');
						$mysql -> query('set names utf8');
						$mysql -> query('set character set utf8');
						$mysql -> query('set character_set_client=utf8');
						$mysql -> query('set character_set_results=utf8');
						$mysql -> query('set character_set_connection=utf8');
						$mysql -> query('set character_set_database=utf8');
						$mysql -> query('set character_set_server=utf8');
						$mysql ->  query("SET SESSION collation_connection = 'utf8_general_ci';");
						$result = $mysql -> query("SELECT * FROM `news`");
						$result = $result -> fetch_assoc();
						if(is_countable($result)):
					?>
					<span class="date"><?=$result['date']?></span>
					<p><?=$result['news']?></p>
					<p><a href="news.php">читать</a></p>
					<?php else:?>
						<span class="date">Еще нет постов</span>
					<?php endif?>
				</div>
				<div class="sidebar">
					<h2>Рейтинги</h2>
					<ul>
						<li><a href="inter.php">Интерстеллар</a><span class = "value">8.5</span></li>
						<li><a href="matrix.php">Матрица</a><span class = "value">8.1</span></li>
						<li><a href="quiet_place_2.php">Тихое место 2</a><span class = "value">7.4</span></li>
						<li><a href="quiet_place.php">Тихое место</a><span class = "value">7.1</span></li>
					</ul>
				</div>
			</div>
			<div class="content">
				<table>
					<tr>
						<th></th>
						<th>Фильм</th>
						<th>Год</th>
						<th>Рейтинг</th>
					</tr>
					<tr>
						<td class = "center"><img src = "img/inter.png" alt = "Взлом жепы"></td>
						<td class = "center"><a href = "inter.php">Интерстеллар</a></td>
						<td class = "center">2014</td>
						<td class = "center">8.9</td>
					</tr>
					<tr>
						<td class = "center"><img src = "img/invisible-guest.jpg" alt = "Взлом жепы"></td>
						<td class = "center"><a href = "invisible_guest.php">Невидимый гость</a></td>
						<td class = "center">2018</td>
						<td class = "center">8.5</td>
					</tr>
					<tr>
						<td class = "center"><img src = "img/dont_breathe.png" alt = "Взлом жепы"></td>
						<td class = "center"><a href = "dont_breathe.php">Не дыши</a></td>
						<td class = "center">2016</td>
						<td class = "center">8.2</td>
					</tr>
					<tr>
						<td class = "center"><img src = "img/matrix.png" alt = "Взлом жепы"></td>
						<td class = "center"><a href = "matrix.php">Матрица</a></td>
						<td class = "center">1999</td>
						<td class = "center">8.0</td>
					</tr>
					<tr>
						<td class = "center"><img src = "img/greta.jpg" alt = "Взлом жепы"></td>
						<td class = "center"><a href = "greta.php">В объятиях лжи</a></td>
						<td class = "center">2018</td>
						<td class = "center">7.8</td>
					</tr>
					<tr>
						<td class = "center"><img src = "img/collector.jpg" alt = "Взлом жепы"></td>
						<td class = "center"><a href = "collector.php">Коллекционер</a></td>
						<td class = "center">2009</td>
						<td class = "center">7.5</td>
					</tr>
					<tr>
						<td class = "center"><img src = "img/quiet-place2.jpg" alt = "Взлом жепы"></td>
						<td class = "center"><a href = "quiet_place_2.php">Тихое место 2</a></td>
						<td class = "center">2020</td>
						<td class = "center">7.4</td>
					</tr>
					<tr>
						<td class = "center"><img src = "img/21.jfif" alt = "Взлом жепы"></td>
						<td class = "center"><a href = "21.php">Двадцать одно</a></td>
						<td class = "center">2008</td>
						<td class = "center">7.1</td>
					</tr>
					<tr>
						<td class = "center"><img src = "img/quiet-place.jpg" alt = "Взлом жепы"></td>
						<td class = "center"><a href = "quiet_place.php">Тихое место</a></td>
						<td class = "center">2018</td>
						<td class = "center">6.9</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="footer">
			<p>
				<a href="index.php">Главная</a>
				<a href="films.php">Фильмы</a>
				<a href="soapoperas.php">Сериалы</a>
				<a href="ratings.php">Рейтинги</a>
				<a href="contacts.php">Контакты</a>
			</p>
	</div>
	</div>
</body>
</html>