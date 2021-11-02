<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Тихое место</title>
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
					<li class = "selected"><a href = "films.php">Фильмы</a></li>
					<li><a href = "soapoperas.php">Сериалы</a></li>
					<li><a href = "ratings.php">Рейтинги</a></li>
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
				<h1>Трейлер фильма "Тихое место"</h1>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/WR7cc5t7tv8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div class="film-description">
					<p><span class="label">Фильм: </span><span class = "value-info">Тихое место</span><span class = "label">Год: </span><span class = "value-info">2018</span><span class="label">Режиссер: </span><span class="value-info">Джон Карасинки</span></p>
				</div>
				<div class="film-info">
					<hr>
					<h1>Описание фильма "Тихое место"</h1>
					<img src="img/quiet-place.jpg" alt="Взлом жепы">
					История одной семьи, которая проживает в небольшой уединённой ферме в далёкой американской глубинке. У главных героев есть двое детей. Казалось бы, жизнь этих людей совершенно не отличается от жизни других таких семей. Но главные герои живут в доме, который наполнен ужасными монстрами, реагирующими на любой звук. Герои разучили целый комплекс специальных жестов, которые помогают им общаться друг с другом, не издавая ни единого звука. Кроме того, каждый из членов семьи должен очень тихо передвигаться по всей территории дома, чтобы опасные существа не заметили их. Однако дом, где живут маленькие дети, не может быть самым тихим местом на земле.
				</div>
				<hr style = "margin-top: 30px">
				<div class="movie">
					<video width="100%" autoplay="autoplay" controls>
						<source src="films/Tihoe-mesto.mp4" type="video/mp4">
					</video>
				</div>
				<hr>
				<h1>Отзывы "Тихое место"</h1>
				<div class="reviews">
					<?php 
					if(isset($_POST['comment-name'])): 
						if(strlen($_POST['comment-name']) > 0 && strlen($_POST['comment-text']) > 0):
						$comment_name = $_POST['comment-name'];
						$comment_text = $_POST['comment-text'];
						$date = date("F j, Y, g:i a");
						$mysql = new mysqli('a371330.mysql.mchost.ru', 'a371330_1', '854RLnSiKN9D', 'a371330_1');
						$mysql -> query('set names utf8');
						$mysql -> query('set character set utf8');
						$mysql -> query('set character_set_client=utf8');
						$mysql -> query('set character_set_results=utf8');
						$mysql -> query('set character_set_connection=utf8');
						$mysql -> query('set character_set_database=utf8');
						$mysql -> query('set character_set_server=utf8');
						$mysql ->  query("SET SESSION collation_connection = 'utf8_general_ci';");
						$mysql -> query("INSERT INTO `quiet_place` (`comment_name`, `comment_text`, `date`) VALUES('$comment_name', '$comment_text', '$date')");
						$comments = $mysql -> query("SELECT * FROM `quiet_place`");
						foreach($comments as $comment){
					?>
					<div class="comment-name"><?=$comment['comment_name']?></div>
					<div class="comment-date"><?=$comment['date']?></div>
					<div class="comment-text"><?=$comment['comment_text']?></div>
					<?php } else: ?>
					<span style = "color: red; font-size: 1.3em">Напишите комментарий, чтобы увидеть остальные отзывы!!!</span>
					<?php endif?>
					<? else: ?>
					<span style = "color: red; font-size: 1.3em">Напишите комментарий, чтобы увидеть остальные отзывы!!!</span>
					<?php endif?>
				</div>
				<hr>
				<h1>Оставить отзыв</h1>
				<?php if(isset($_COOKIE['name'])): ?>
					<div class="send-comment">
						<form method = "post" action = "">
							<input type = "text" name = "comment-name" placeholder = "Ваше имя">
							<textarea name="comment-text" placeholder = "Ваши впечатления" class = "review-text"></textarea><br>
							<input type = "submit" class = "send-button" style = "margin-left: 280px">
						</form>
					</div>
				<?php else: ?>
					<p style = "font-size: 1.2em"><a href="registration.php">Зарегистрируйтесь</a> или <a href="authorization.php">авторизуйтесь</a>, чтобы писать отзывы</p>
				<?php endif?>
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