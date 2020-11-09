<?php
if ($_SERVER['REQUEST_METHOD'] =='POST') {
    $data = post('data');
    createData($data);
    redirect($_SERVER['REQUEST_URI']);
}

echo render('order');