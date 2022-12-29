<?php
session_start();
$_SESSION['message'] = 'ПАРУСНИК версия от 27/12/22(b0.1)';
header('Location: ../../login.php');
?>