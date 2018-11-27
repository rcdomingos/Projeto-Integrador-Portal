<?php
session_start();
$_SESSION['idioma'] = $_GET['idioma'];
// $_SESSION['url'] = $_GET['url'];
$url = $_GET['url'];
header('location:../'.$url);
//$urlidioma = basename($_SERVER['SCRIPT_FILENAME']);
?>