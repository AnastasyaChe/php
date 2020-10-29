<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "base.php";
require_once ENGINE_DIR . "db.php";
require_once ENGINE_DIR . "gallery.php";
$config = include CONFIG_DIR . 'db.php';
// $id = (int) $_REQUEST['id']; //принимаем id;
if($id = get('id')) {
    $photo = getImageById($id);
}

incrementImageViews($id);

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $comment = post('comment');
    updateProduct($id, $comment);
    
    }



include VIEWS_DIR . "photo.php";

?>



