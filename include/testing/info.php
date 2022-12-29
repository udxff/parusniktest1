<?php
session_start();
require_once "../DefaultSettings.php";
$_SESSION['message'] = $name . $version;
header('Location: ../../login.php');
?>