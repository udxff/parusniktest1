<?php
session_start();
?>
<html>
<head>
	<title>Логин</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<a href="index.php">
	<img src="logo.jpg" alt="Парус" width="400" height="400">
</a>
	<form class="loginform" action="include/logincore.php" method="post">
		<label>Логин</label>
		<input type="text" name="loginh" placeholder="Введите логин"><BR><BR>
		<label>Пароль</label>
		<input type="password" name="passwordh" placeholder="Введите пароль"><BR><BR>
		<button type="submit">Войти</button>
		<p>
			У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь!</a>
		</p>
		<?php
			if ($_SESSION['message']) {
				echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
			}
			unset($_SESSION['message']);
			unset($_SESSION['message']);
		?>
	</form>
</body>
</html>