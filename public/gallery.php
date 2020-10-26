<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once PUBLIC_DIR . "photo.php";
require_once CONFIG_DIR . "conf.php";


$connection = mysqli_connect($host, $login, $password, $db) ;

// $sql = "INSERT INTO gallery (name, description) VALUES ('First', '/images/')";
// $sql = "INSERT INTO gallery (name, description) VALUES ('Third', '/images/')";
// $sql = "INSERT INTO gallery (name, description) VALUES ('Second', '/images/')";
$sql = 'SELECT * FROM gallery'; 
$res = mysqli_query($connection, $sql);
$photos = mysqli_fetch_all($res, MYSQLI_ASSOC);

include VIEWS_DIR . "gallery.php";// так мы добавляем верстку..
?>