<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
$host = '127.0.0.1';
$login = 'root';
$password = 'root';
$db = 'php20202';
$res = mysqli_connect($host, $login, $password, $db) ;
var_dump($res) ;

?>
