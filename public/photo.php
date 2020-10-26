<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once CONFIG_DIR . "conf.php";
$id = $_GET['id']; //принимаем id;

$connection = mysqli_connect($host, $login, $password, $db) ;

$sql = "SELECT * FROM gallery WHERE id = {$id}"; 
$res = mysqli_query($connection, $sql);
$photo = mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
?>
<img src= "<?=$photo['description']?>" alt='alt'>





