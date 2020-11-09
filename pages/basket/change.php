<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newData = post('quantity');
    
    foreach($newData as $key => $val) {
        if($val == 0) {
            unset($_SESSION['basket'][$key]);
            delete($key);
        } else {
            $_SESSION['basket'][$key] = $val;
            updateOrder($key, $_SESSION['basket'][$key]);
        }
    }
    redirect($_SERVER['HTTP_REFERER']);
}

