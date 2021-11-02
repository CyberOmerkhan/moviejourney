<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styleForAdmin.css">
	<title>Опубликовать новость</title>
	<link rel= "icon" href= "img/icon.png" type=”image/x-icon”> 
</head>
<body>
	<div class="admin">
		<h1 style = "margin-left: 100px">Здравсвуйте, Господин.</h1>
		<div class="edit_news">
			<form action="save_news.php" method="post">
				<input type = "text" name = "news_subject" placeholder = "Тема сообщения">
				<input type = "text" name = "date" placeholder = "Дата">
				<textarea name="news" placeholder="Сообщение"></textarea>
				<input type = "submit" value = "Опубликовать">
				<a href="logout.php">Вернуться к простым смертным</a>
			</form>
		</div>
	</div> 
</body>
</html>