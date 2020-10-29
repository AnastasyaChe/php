<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "gallery.php";


$photos = getGalleryImages();


include VIEWS_DIR . "gallery.php";// так мы добавляем верстку..
?>