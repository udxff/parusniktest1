<?php
    //Парусник - 12.2022
    //Подключение настроек из файла DefaultSettings
    require_once "DefaultSettings.php";
    $connect = mysqli_connect($hostm,$userm,$passwordm,$databasem);

    if (!$connect) {
        die('Error while connecting to MYSQL - Парусник');
    }
?>