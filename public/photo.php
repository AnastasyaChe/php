<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "base.php";
require_once ENGINE_DIR . "db.php";
require_once ENGINE_DIR . "gallery.php";
$config = include CONFIG_DIR . 'db.php';
// $id = (int) $_REQUEST['id']; //принимаем id;
session_start();
    if($id = get('id')) {
    $product = getProductById($id);
    $_SESSION['product'] = ['id' => $product['id'], 'name' => $product['name'], 'quantity' => $user['quantity']];
}

incrementImageViews($id);

// if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
//     $comment = post('comment');
//     updateProduct($id, $comment);
    
// }
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $quantity = post('quantity');
    updateProductQuanty($id, $quantity);
    $_SESSION['products'][] = $_SESSION['product'];
}



include VIEWS_DIR . "photo.php";

?>



