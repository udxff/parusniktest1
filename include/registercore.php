<?php
    session_start();
    require_once 'connect.php';
    $mrealname = $_POST['realname'];
    $mlogin = $_POST['login'];
    $memail = $_POST['email'];
    $mpassword = $_POST['password'];
    $mpasswordconfirm = $_POST['password_confirm'];
    if ($mpassword == $mpasswordconfirm) {
        //Пароль совпадает
        mysqli_query($connect, "INSERT INTO `users` (`ID`,`realname`,`login`,`email`,`passwordm`) VALUES (NULL,'$mrealname', '$mlogin','$memail','$mpassword')");
        $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: ../login.php');
    }
    else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>