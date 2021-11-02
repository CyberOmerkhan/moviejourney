<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel= "icon" href= "img/icon.png" type=”image/x-icon”> 
	<title>Сериалы</title>
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
					<li class = "selected"><a href = "soapoperas.php">Сериалы</a></li>
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
				<div class="film-box">
					<img src="img/breakingbad.png" alt="Взлом жепы">
					<p class="film-box-text">Сериал знакомит зрителя с жизнью Уолтера Уайта — 50-летнего школьного учителя химии из города Альбукерке. Помимо преподавания он вынужден подрабатывать на автомойке, чтобы содержать свою беременную жену и сына-инвалида. Однако Уолтеру приходится пересмотреть свой привычный образ жизни, когда у него диагностируют неоперабельный рак лёгкого. С целью оплаты лечения и обеспечения финансового будущего своей семьи Уолтер Уайт решает заняться производством метамфетамина. Его напарником становится бывший ученик — Джесси Пинкман . Вместе они покупают домик на колёсах и отправляются в пустыню, чтобы приготовить первую партию наркотика. Но приготовление — это лишь полдела, нужно ещё продать полученный метамфетамин. И на этом пути напарники то и дело попадают в сложные ситуации, в которых им приходится принимать непростые решения.</p>
					<p><a href="nosoapopera.html">Смотреть</a></p>
				</div>
				<div class="film-box">
					<img src="img/dead.png" alt="Взлом жепы">
					<p class="film-box-text">Помощник шерифа Рик Граймс получает тяжёлое пулевое ранение во время перестрелки с преступниками, вследствие чего впадает в кому. Очнувшись в больнице, он замечает, что весь медицинский персонал отсутствует, а в самом здании царит разруха. Постепенно Рик приходит к осознанию того, что произошла трагедия, как-то связанная с ожившими трупами. Он пытается во что бы то ни стало найти свою жену и сына, по-видимому, сумевших уцелеть, и помочь им выжить в новом опасном мире. По ходу сюжета Рик встречается с другими выжившими и благодаря своим лидерским способностям возглавляет борьбу за выживание.</p>
					<p><a href="nosoapopera.html">Смотреть</a></p>
				</div>
				<div class="film-box">
					<img src="img/silicon.png" alt="Взлом жепы">
					<p class = "film-box-text">Чудаковатый предприниматель Эрлих Бахман в своё время заработал на приложении для поиска авиабилетов «Aviato». Он открывает в своём доме инкубатор для стартапов, собирая IT специалистов с интересными идеями. Так в его доме появляются программист «ботаник» Ричард Хендрикс, пакистанец Динеш, канадец Гиллфойл и Нельсон «Башка» Бигетти. Работая в интернет корпорации Hooli, Ричард параллельно разработал и начал продвигать медиаплейер Пегий Дудочник (Pied Piper). Приложением, которое по первоначальному замыслу помогало находить нарушение авторских прав, никто не интересовался. Однако выяснилось, что в его основе лежит революционный алгоритм сжатия данных. Офисом будущей компании становится дом Эрлиха, который предлагает организовать стартап под названием «Пегий Дудочник».</p>
					<p><a href="nosoapopera.html">Смотреть</a></p>
				</div>
				<div class="film-box">
					<img src="img/xfiles.png" alt="Взлом жепы">
					<p class="film-box-text">Сериал «Секретные материалы» повествует о работе и личной жизни специальных агентов Федерального Бюро Расследований Фокса Малдера и Даны Скалли. Малдер — талантливый сыщик, твёрдо верящий во всё сверхъестественное, в том числе в существование разумной внеземной жизни и её присутствие на планете Земля. Из-за подобных убеждений сослуживцы прозвали его «Spooky» (рус. Призрак) и отправили в непопулярный отдел X-Files, специализирующийся на загадочных нераскрытых преступлениях. Его вера в паранормальные явления проистекает из многолетнего опыта, который начинается с похищения сестры Саманты (англ. Samantha) инопланетянами. Этот инцидент становится главной движущей силой в его карьере. На протяжении всего действия Малдер ищет истину, скрываемую государством, и в то же время пытается сохранить объективность в своих поисках</p>
					<p><a href="nosoapopera.html">Смотреть</a></p>
				</div>
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