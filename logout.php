<?php
//Парусник - 12.2022
session_start();
$_SESSION['user'] = [
    "id" => 'Вы не вошли в систему',
    "realname" => 0,
    "login" => 0

];
header('Location: index.php');

?>