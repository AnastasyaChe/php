<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require ENGINE_DIR . "base.php";

session_start();

if(!isset($_SESSION['user'])) {
    redirect('/login.php');
}
?>

<h2>Hello, <?=$_SESSION['user']['name']?>!</h2>
<p>Ваш логин: <?=$_SESSION['user']['login']?></p>