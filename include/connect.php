<?php
    //Парусник - 12.2022
    //Если Вы устанавливаете на свой сервер ПОМЕНЯЙТЕ ДАННЫЕ ВНИЗУ НА СВОИ(тут MySQL5.6, метод Mysqli)
    $connect = mysqli_connect('localhost','root','','parusnik-test');

    if (!$connect) {
        die('Error while connecting to MYSQL - Парусник');
    }
?>