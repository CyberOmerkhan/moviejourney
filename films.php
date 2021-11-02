<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Фильмы</title>
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
				<div class="film-box">
					<img src="img/inter.png" alt="Взлом жепы">
					<p class = "film-box-text">В 2067 году неурожай и пыльные бури угрожают выживанию человечества. Кукуруза — последняя жизнеспособная сельхозкультура. Мир также превратился в общество постправды, где молодым поколениям преподают идеи, что высадка Аполлона на Луну была сфальсифицирована. Овдовевший инженер и бывший пилот НАСА Джозеф Купер теперь занимается фермерством. С ним живёт его тесть Дональд, 15-летний сын Том и 10-летняя дочь Мёрфи (или Мёрф). И теперь команда исследователей берет на себя самую важную миссию в истории человечества путешествуя за пределами нашей галактики, чтобы узнать есть ли у человечества будущее среди звезд.</p>
					<p><a href="inter.php">Смотреть</a></p>
				</div>
				<div class="film-box">
					<img src="img/matrix.png" alt="Взлом жепы">
					<p class="film-box-text">Фильм изображает будущее, в котором реальность, существующая для большинства людей, есть в действительности симуляция типа «мозг в колбе», созданная разумными машинами, чтобы подчинить и усмирить человеческое население, в то время как тепло и электрическая активность их тел используются машинами в качестве источника энергии. Узнав об этом, хакер по кличке Нео оказывается втянут в повстанческую борьбу против машин, в которую также вовлечены другие люди, освободившиеся из «мира снов» и выбравшиеся в реальность.</p>
					<p><a class = "film-box-a" href="matrix.php">Смотреть</a></p>
				</div>
				<div class="film-box">
					<img src="img/quiet-place.jpg" alt="Взлом жепы" style = "width: 150px">
					<p class="film-box-text">История одной семьи, которая проживает в небольшой уединённой ферме в далёкой американской глубинке. У главных героев есть двое детей. Казалось бы, жизнь этих людей совершенно не отличается от жизни других таких семей. Но главные герои живут в доме, который наполнен ужасными монстрами, реагирующими на любой звук. Герои разучили целый комплекс специальных жестов, которые помогают им общаться друг с другом, не издавая ни единого звука. Кроме того, каждый из членов семьи должен очень тихо передвигаться по всей территории дома, чтобы опасные существа не заметили их. Однако дом, где живут маленькие дети, не может быть самым тихим местом на земле.</p>
					<p><a href="quiet_place.php">Смотреть</a></p>
				</div>
				<div class="film-box">
					<img src="img/quiet-place2.jpg" alt="Взлом жепы" style = "width: 150px">
					<p class="film-box-text">Действие сиквела будет происходить после событий первой части и расскажет также о других людях, существующих в мире, полном чудовищ-людоедов, которые ищут своих жертв по звуку. Семья Эбботт продолжает бороться за жизнь в полной тишине. Вслед за смертельной угрозой, с которой они столкнулись в собственном доме, им предстоит познать ужасы внешнего мира. Они вынуждены отправиться в неизвестность, где быстро обнаруживают, что существа, охотящиеся на звук, – не единственные враги за пределами безопасной песчаной тропы.</p>
					<p><a href="quiet_place_2.php">Смотреть</a></p>
				</div>
				<div class="film-box">
					<img src="img/invisible-guest.jpg" alt="Взлом жепы" style = "width: 150px">
					<p class="film-box-text">Молодого бизнесмена Адриана Дориа обвиняют в убийстве любовницы, и он решает воспользоваться услугами Вирджинии Гудман, лучшего в стране специалиста по выходу из самых сложных ситуаций. Адриан содержится под домашним арестом, а завтра состоится судебное заседание, поэтому вечером к нему приходит Вирджиния, чтобы придумать наилучшую стратегию защиты. Для неё это последнее дело, и она не собирается его проигрывать.</p>
					<p><a href="invisible_guest.php">Смотреть</a></p>
				</div>
				<div class="film-box">
					<img src="img/collector.jpg" alt="Взлом жепы" style = "width: 150px">
					<p class="film-box-text">Аркин — бывший заключённый, который в составе рабочей артели занимается ремонтом дома семьи Чейз. Бывшая жена Аркина задолжала ростовщикам, поэтому, чтобы защитить её и их общую дочь Синди, Аркин планирует вломиться в дом Чейзов и украсть редкий драгоценный камень, чтобы жена могла отдать свой долг. Вечером того же дня, Аркин вламывается в дом, поднимается по лестнице и начинает взламывать сейф. Однако вскоре он обнаруживает, что кто-то его опередил и подготовил множество смертельных ловушек по всему дому. Теперь задача Аркина усложняется в два раза!</p>
					<p><a href = "collector.php">Смотреть</a></p>
				</div>
				<div class="film-box">
					<img src="img/dont_breathe.png" alt="Взлом жепы" style = "width: 150px">
					<p class="film-box-text">Грабители забираются в дом одинокого слепого старика с целью украсть огромную сумму, которая, по слухам, спрятана где-то внутри. Казалось бы — что может быть проще, чем вынести деньги из дома практического беспомощного человека. Но они жестоко ошибаются: преследуемый становится преследователем. И тайна, которую он хранит, гораздо страшнее, чем обычные пенсионные накопления.</p>
					<p><a href = "dont_breathe.php">Смотреть</a></p>
				</div>
				<div class="film-box">
					<img src="img/greta.jpg" alt="Взлом жепы" style = "width: 150px">
					<p class="film-box-text">Фильм изображает симпатичную и одинокую девушку по имени Фрэнсис Маккален. Девушка, недавно переехавшая на Манхэттен, случайно встречается с такой же одинокой и загадочной вдовой. Между ними завязывается дружба, и необычная знакомая окружает юную подругу вниманием и заботой. Но вскоре одна из них поймет, что оказалась в крепких объятиях лжи…</p>
					<p><a href = "greta.php">Смотреть</a></p>
				</div>
				<div class="film-box">
					<img src="img/21.jfif" alt="Взлом жепы" style = "width: 150px">
					<p class="film-box-text">
						Фильм повествует на историю студента, которому срочно нужна круглая сумма на обучение в колледже. В какой-то момент он понимает, что звезду с неба ему не сорвать и поэтому просто живет. Ходит с друзьями по пятницам выпить пару бокалов пива, но не больше. Участвует в каком-то конкурсе 'очкариков-неудачников'. И так бы и продолжалось, если бы не знакомство с преподавателем математики, который изменил его жизнь целиком. Тот научил его играть в карты с помощью науки, и тут жизнь молодого парня засияла новыми красками. Главный герой начинает чувствовать вкус другой, во всех смыслах этого слова, жизни. Вылеты в Вегас каждый уикенд, ночи в самых дорогих и шикарных отелях мира, а главное бесконечный азарт и работающая схема по выводу денег из кармана казино. Но все не может продолжаться вечно...</p>
					<p><a href = "21.php">Смотреть</a></p>
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