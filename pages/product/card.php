<?php

$id = get('id');
$product = getProductById($id);

echo render('product', ['product' => $product]);

?>



