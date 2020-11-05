<?php
$basket = [];
if(!empty($_SESSION['basket'])) {
    $productIds = array_filter(
        array_keys($_SESSION['basket']),
        function ($element) {
            return is_int($element);
        }
    );
    $products = getAllProducts($productIds);
    foreach($products as $product){
        
        $basket[] = [
            'product' => $product,
            'qty' => $_SESSION['basket'][$product['id']]
        ];
       
    }
    
}


if ($_SERVER['REQUEST_METHOD'] =='POST') {
    $newQnty = post('product');
    
       
}
   
    
   
echo render('lk', ['basket' => $basket]);
?>