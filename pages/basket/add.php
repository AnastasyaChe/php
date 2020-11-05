<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = post('id');
    $productQty = post('quantity');
    

    if(isset($_SESSION['basket'][$productId])) {
        $_SESSION['basket'][$productId] += $productQty;
        updateOrder($productId, $_SESSION['basket'][$productId]);

    }else {
        $_SESSION['basket'][$productId] = $productQty;
        createOrder($productId, $_SESSION['basket'][$productId]);
    }
    redirect($_SERVER['HTTP_REFERER']);  
}




