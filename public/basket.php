<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "gallery.php";
session_start();

if(!isset($_SESSION['user'])) {
    redirect('/login.php');
}

$products = getAllProducts();
include VIEWS_DIR . 'basket.php';