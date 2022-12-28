<?php
//Парусник - 12.2022
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
	<form class="loginform" action="include/registercore.php" method="post">
		<label>Имя, фамилия</label>
		<input type="text" name="realname" placeholder="Введите имя и фамилию"><BR><BR>
		<label>Логин</label>
		<input type="text" name="login" placeholder="Введите логин"><BR><BR>
		<label>Почта</label>
		<input type="email" name="email" placeholder="Введите E-Mail адрес"><BR><BR>
		<label>Пароль</label>
		<input type="password" name="password" placeholder="Введите пароль"><BR><BR>
		<label>Подтверждение пароля</label>
		<input type="password" name="password_confirm" placeholder="Подтвердите пароль"><BR><BR>
		<button type="submit" >Зарегистрироватся</button>
		<p>
			У вас уже есть аккаунт? - <a href="login.php">войдите!</a>
		</p>
		<?php
			if ($_SESSION['message']) {
				echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
			}
			unset($_SESSION['message']);
		?>

	</form>
</body>
</html>