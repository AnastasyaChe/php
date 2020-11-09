<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = post('id');
    $productQty = post('qty');
    
    if(isset($_SESSION['basket'][$productId])) {
        $_SESSION['basket'][$productId] +=$productQty;
        updateOrder($productId, $_SESSION['basket'][$productId]);

    }else {
        $_SESSION['basket'][$productId] = $productQty;
        createOrder($productId, $_SESSION['basket'][$productId]);
    }  
}
echo json_encode(['status' => 'success', 'message' => 'товар успешно добавлен в корзину']);


 




