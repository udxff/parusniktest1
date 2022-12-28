<?php
//Парусник - 12.2022
    session_start();
    require_once 'connect.php';
    $mlogin = $_POST['loginh'];
    $passwordm = $_POST['passwordh'];
    $check_user = mysqli_query($connect,"SELECT * FROM `users` WHERE `login` = '$mlogin' AND `passwordm` = '$passwordm'");
    if (mysqli_num_rows($check_user) > 0) {
        //Успешная авторизация
        $userb=mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
          "id" => $userb['ID'],
          "realname" => $userb['realname'],
          "login" => $userb['login']
        ];

        header("Location: ../myprofile.php");
    }
    else {
        $_SESSION['message'] = 'Ошибка при входе';
        header('Location: ../login.php');
    }

?>