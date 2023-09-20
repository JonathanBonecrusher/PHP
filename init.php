<?php
$is_auth = rand(0, 1);
$title = 'Главная';
$user_name = 'Артём';
CONST HOST = "localhost";
CONST LOGIN = "xtdtuuht";
CONST PASSWORD = "uK7SkJ";
CONST BD_NAME = "xtdtuuht_m3";

$con = mysqli_connect( HOST, LOGIN, PASSWORD, BD_NAME);
mysqli_set_charset($con, "utf8");
?>