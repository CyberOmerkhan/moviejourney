<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<title>Создатели "Интерстеллара" заработали на продаже кукурузы</title>
	<link rel= "icon" href= "../img/icon.png" type=”image/x-icon”>  
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
					<li><a href="../index.php">Главная</a></li>
					<li><a href = "../films.php">Фильмы</a></li>
					<li><a href = "../soapoperas.php">Сериалы</a></li>
					<li><a href = "../ratings.php">Рейтинги</a></li>
					<li><a href = "../contacts.php">Контакты</a></li>
					<li class = "hidden"><a href="news.php">Новости</a></li>
					<?php if(isset($_COOKIE['name'])): ?>
					<li><a href = "../private.php">Кабинет[<?=$_COOKIE['name']?>]</a></li>
					<?php else:?>
					<li><a href = "../private.php">Кабинет</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
		<div class="site_content">
			<div class="sidebar_container">
				<div class="sidebar">
					<h2>Поиск</h2>
					<form method = "post" action = "../search.php">
						<input type = "search" name = "search" placeholder = "Ваш запрос">
						<input type = "submit" value = "Найти" class = "btn">
					</form>
				</div>
				<div class="sidebar">
					<h2>Вход</h2>
					<form method = "post" action = "../auth.php">
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
							<a href = "../pass.php">Забыли пароль?     </a>   |  <a href = "../registration.php">     Зарегистрироваться</a>
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
						<li><a href="../inter.php">Интерстеллар</a><span class = "value">8.5</span></li>
						<li><a href="../matrix.php">Матрица</a><span class = "value">8.1</span></li>
						<li><a href="../quiet_place_2.php">Тихое место 2</a><span class = "value">7.4</span></li>
						<li><a href="../quiet_place.php">Тихое место</a><span class = "value">7.1</span></li>
					</ul>
				</div>
			</div>
			<div class="content">
				<h2 style = "color: red; padding-bottom: 2%">Создатели "Интерстеллара" заработали на продаже кукурузы</h2>
				<p>Стал известен производственный бюджет фильма "Интерстеллар", который снял Кристофер Нолан. Как утверждает издание The Hollywood Reporter, он составил 165 миллионов долларов. Вероятнее всего, картина сможет без труда вернуть вложенные в ее съемки и продвижения средства, так как уровень предварительных продаж билетов свидетельствует о том, что в премьерные выходные ее кассовые сборы в Северной Америке могут превысить 60 миллионов долларов. У создателей фильма был и еще один довольно забавный источник заработка. Как рассказал в интервью Кристофер Нолан, им удалось выгодно продать кукурузу, собранную с полей, которые были специально засеяны для проведения съемок в окрестностях канадского Калгари. По словам режиссера, несмотря на интенсивность съемок и повреждение части посевов, урожай в итоге был собран отменный. Напомним, что в фильме снимались Мэттью МакКонахи, Энн Хэтэуэй, Джессика Честейн, Майкл Кейн, Тофер Грейс, Уэс Бентли, Кейси Аффлек, МакКензи Фой, Уильям Дивэйн, Эллен Берстин и другие актеры. "Интерстеллар" будет представлен зрителям 7 ноября 2014 года во всех форматах, в том числе IMAX. В некоторых кинотеатрах IMAX, оборудованных пленочными проекторами, зрители смогут увидеть картину раньше.</p>
			</div>
		</div>
		<div class="footer">
			<p>
				<a href="../index.php">Главная</a>
				<a href="../films.php">Фильмы</a>
				<a href="../soapoperas.php">Сериалы</a>
				<a href="../ratings.php">Рейтинги</a>
				<a href="../contacts.php">Контакты</a>
			</p>
	</div>
	</div>
</body>
</html>