<?php
	setcookie("login", $login, time() - 3600*24*365*10, "/");
	setcookie("pass", $pass, time() - 2678400, "/");
	setcookie("name", $name, time() - 2678400, "/");
	header('Location: private.php');