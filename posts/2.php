<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<title>Почему Ти Джей Миллер ушел из культового сериала "Кремниевая долина"</title>
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
				<h2 style = "color: red; padding-bottom: 2%">Ти Джей Миллер объяснил причину своего ухода из сериала</h2>
				<p>Миллер — известный комедийный актёр и стендап-комик. В последние годы у него начала складываться карьера в Голливуде: он снимался в четвёртых «Трансформерах» и «Дэдпуле», а также участвовал в озвучке многих анимационных картин, включая «Как приручить дракона» и «Как приручить дракона 2».Миллер обладает взрывным характером не только на экране: в декабре 2016 года он был арестован за то, что дал пощёчину водителю Uber во время спора о президенте Трампе. В ближайшие несколько лет Миллера можно будет видеть в фильмах «Первому игроку приготовиться» Стивена Спилберга, «Дэдпул 2», а также слышать в «Эмоджи фильме» и «Как приручить дракона 3». В середине мая актёр в шутку высадился на пляже у Каннского кинофестиваля, чтобы рассказать местной публике об «Эмоджи фильме», которому до подобных смотров далеко. В «Кремниевой долине» Миллер играл красноречивого владельца стартап-инкубатора, который приютил главных героев. Актер рассказал, что в пятом сезоне ему предложили «сокращенную» роль. Телекомпания HBO предоставила Миллеру условия, по которым его персонаж, Эрлих Бахман, появится в пяти или трех эпизодах нового сезона. В итоге актер полностью отказался от участия в шоу.
			</p>
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