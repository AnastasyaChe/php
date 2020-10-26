<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "base.php";
require_once ENGINE_DIR . "db.php";
require_once ENGINE_DIR . "gallery.php";
$config = include CONFIG_DIR . 'db.php';
$id = (int) $_REQUEST['id']; //принимаем id;

$text = post('text');
$sql= execute("INSERT INTO gallery (opinion) VALUES ('$text')");


$photo = getImageById($id);
incrementImageViews($id);

include VIEWS_DIR . "photo.php";

?>



