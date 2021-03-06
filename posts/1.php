<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<title>Как снимали Матрицу</title>
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
				<h2 style = "color: red; padding-bottom: 2%">Как снимали Матрицу?</h2>
				<p>Ларри и Энди Вачовски с детства обожали кино. Родители (отец был бизнесменом, мать медсестрой) регулярно брали детей в кинотеатр, устраивая двойные, а то и тройные сеансы. Разбуженную фильмами фантазию юноши выплёскивали, играя в Dungeons & Dragons и рисуя комиксы. Как они позже признавались, ролевые игры во многом схожи с созданием фильма — приходится напрягать воображение, продумывать действия героев и строить целые миры у себя в голове.Ни один из Вачовски так и не смог закончить колледж — они оба решили оставить образование ради заработков. Но при этом братья не забывали про детское увлечение комиксами, которое через некоторое время стало приносить доход. В начале девяностых Ларри переехал из Чикаго в Нью-Йорк, где заполучил для себя и для брата работу в издательстве Marvel. Однажды при работе над очередным комиксом Вачовски обсуждали свои вымышленные миры, и кого-то из них посетила мысль: а что, если бы наш собственный мир оказался лишь компьютерной программой? Эта идея, одновременно пугающая и впечатляющая, как нельзя лучше подходила для сценария большого научно-фантастического кино. А давняя любовь братьев к аниме и фильмам про восточные единоборства уже тогда определила стиль будущей ленты. «Матрица» была далеко не первым сценарием, за который взялись Вачовски. Ещё в колледже Ларри сочинил адаптацию романа «Принцесса-невеста» Уильяма Голдмана и связывался с самим Голдманом, чтобы обсудить покупку прав на экранизацию, но писатель просто бросил трубку. С тех пор Вачовски набрались опыта и сумели продать несколько сценариев: первой их работой стал триллер о каннибалах «Плотоядный», второй — экранизация комикса «Пластиковый человек». Но подлинный успех пришёл к братьям в 1994 году со сценарием лихого криминального боевика «Наёмные убийцы», который понравился продюсеру студии Warner Bros. Лоренцо Ди Бонавентуре. Воспользовавшись моментом, Вачовски подсунули ему и остальные свои идеи, включая синопсис «Матрицы». Ди Бонавентура и его коллега Джоэл Сильвер, который вскоре стал курировать братьев, не сразу осознали, что у них в руках — будущий культурный феномен. Сильверу понравилась общая концепция, но материал казался ему слишком сложным для широкой публики. Он потребовал вставить побольше поясняющих диалогов. Трудностей добавлял и размах проекта, требовавший сложных визуальных эффектов, многие из которых ещё не были изобретены. Продюсеры согласились дать сценаристам шанс, если их менее амбициозные проекты понравятся публике, и заключили с ними предварительный контракт на три фильма. Однако уже съёмки первого из них, «Наёмных убийц», стали для Вачовски холодным душем. Первоначально ставить фильм планировал Мел Гибсон, но съёмки его исторического эпоса «Храброе сердце» непредвиденно затянулись, и он передал картину своему другу Ричарду Доннеру. А тот сразу же нанял нового сценариста Брайана Хелгеланда, который переписал сценарий, убрал из него большую часть насилия, а главного героя сделал пресным и «правильным». Вачовски были в ярости и даже требовали убрать свои имена из титров. Голливуд есть Голливуд — если ты продал свою работу, надо быть готовым к тому, что с ней могут делать всё что угодно, не спросив твоего мнения. Эта история послужила братьям уроком. Если Вачовски хотели, чтобы их замысел воплотился на экране в неизменном виде, они должны были сами стать режиссёрами. Проблема в том, что такой масштабный и амбициозный проект, как «Матрица», требовал денег. Разумеется, никто не хотел отдавать восьмизначные суммы в руки дебютантов, у которых в активе не было даже ни одной короткометражки. И снова Лоренцо Ди Бонавентура и Джоэл Сильвер помогли Вачовски. Хотите сами поставить «Матрицу»? Хорошо, мы дадим вам эту возможность, если докажете, что умеете снимать. Вачовски приняли вызов. Их «выпускным экзаменом» стал неонуарный детектив «Связь». Фильм имел весьма небольшой бюджет, но зато Вачовски получили полный творческий контроль над картиной.Параллельно со съёмками дебюта они дорабатывали сценарий «Матрицы» и завершили его за пять месяцев до выхода «Связи» на экраны. Этот вариант довольно близок к итоговому, если не считать некоторых мелочей. Например, знаменитая сцена, где Нео и Тринити штурмуют небоскрёб, выглядела куда проще: герои бесшумно убивали нескольких охранников с помощью пистолетов с глушителями и метательных звёздочек. Или, скажем, в финале воскресший Нео не творил чудеса, а просто показывал агенту Смиту средний палец, снимал трубку телефона и покидал Матрицу. По этим отличиям видно, что на тот момент Вачовски ещё сдерживали свою фантазию. Братья прекрасно понимали, что им могут не выделить бюджет на постановку чрезмерно масштабных сцен. Осенью 1996 года «Связь» впервые показали на Венецианском кинофестивале. Фильм не вышел в широкий прокат и не окупил свой и без того небольшой бюджет, зато критики были в восторге. Вачовски удостоились комплиментов за крепкую режиссуру и отменное чувство стиля, их называли новыми братьями Коэн. Экзамен был сдан. Лоренцо Ди Бонавентура ещё испытывал сомнения насчёт проекта, но всё же дал «Матрице» зелёный свет. Согласие продюсеров не решило всех проблем. Братья требовали восьмидесятимиллионный бюджет, а студия не готова была рисковать такими деньгами. Вачовски, в свою очередь, не хотели жертвовать зрелищностью. Джоэл Сильвер в конце концов нашёл выход из положения — фильм решили снимать в Австралии, где аренда съёмочной площадки была значительно дешевле, чем в США. Итоговый бюджет составил 63 миллиона долларов — не так уж много по меркам нынешнего Голливуда, но по тем временам сумма внушительная.В конце концов список кандидатур на роль Нео сократился до двух актёров — Джонни Деппа и Киану Ривза. Сами Вачовски предпочитали Деппа, и это понятно: как актёр он куда сильнее и многограннее Ривза. В карьере Киану до «Матрицы» не было ни одной роли с репликами длиннее, чем пять предложений подряд. Однако продюсеры настояли на Ривзе — и их тоже можно понять. В это трудно поверить, но в те годы Депп ещё не считался звездой, способной привлечь зрителей в кинотеатры. На счету Ривза между тем уже было несколько боевиков, в том числе и одна картина в жанре киберпанка — «Джонни Мнемоник». А главное, сам Киану, прочитав сценарий, очень заинтересовался проектом и был согласен незамедлительно подписать контракт. Сейчас, по прошествии пятнадцати лет, трудно представить, как бы сложилась дальнейшая карьера Деппа, стань он в 1999 году звездой боевиков. В одном можно быть уверенным: «Пираты Карибского моря» в этой альтернативной реальности вышли бы совсем иными. А вот стала бы «Матрица» другим фильмом? Вряд ли. Её успех сложился из многих факторов, и определяющими были всё же сюжет и визуальные эффекты, а не актёрская игра. Возможно, общий настрой и акценты в некоторых сценах были бы чуть другими, но эффект от фильма остался бы примерно таким же.Зато разница могла проявиться в сиквелах, которые ругали как раз за слабую актёрскую игру. Вполне вероятно, что Депп лучше сумел бы показать развитие характера Нео, который был вынужден жить с бременем избранности, а затем узнал, что всё это было частью плана машин. Все эти факторы сложились воедино и подарили нам действительно великий фильм. Недаром в 2012 году году «Матрица» была признана национальным достоянием и включена в Библиотеку американского Конгресса. И пускай Вачовски не удалось второй раз войти в ту же реку — стоит сказать им большое спасибо за то, что в 1999 году они показали нам, как глубока кроличья нора.
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