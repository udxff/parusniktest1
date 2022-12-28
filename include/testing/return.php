<?php
session_start();
$_SESSION['message'] = 'entire script error';
header('Location: ../../login.php');
?>