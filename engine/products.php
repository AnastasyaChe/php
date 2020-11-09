<?php
require_once ENGINE_DIR . "db.php";
function getGalleryImages(){
    return queryAll("SELECT * FROM gallery ORDER BY views DESC"); //от большего  к меньшему кол-ву просмотров
}

function getImageById(int $id) {
    return queryOne("SELECT * FROM gallery WHERE id = {$id}");
}

function incrementImageViews(int $id) {
return execute("UPDATE gallery SET views = views + 1 WHERE id = {$id}");
}

// function updateProduct(int $id, string $data) {
//     if(empty($data)) {
//         return null;
//     }
//     $sql = "UPDATE gallery SET opinion ='{$data}' WHERE id = {$id}";
//     return execute($sql);
// }
function updateProductQuanty(int $id, $data) {
    if(empty($data)) {
        return null;
    }
    $sql = "UPDATE gallery SET quantity = {$data} WHERE id = {$id}";
   
 return execute($sql);
}
function createData(array $data) {
    if (empty($data)) {
        return null;
    }
    $sql = "INSERT INTO user_info (fio, email, phone, adress)  VALUES ('{$data['fio']}', '{$data['email']}', {$data['phone']}, '{$data['adress']}')";
    return execute ($sql);
}
function createOrder(int $id, $data) {
    if (empty($data)) {
        return null;
    }
    $sql = "INSERT INTO orders (product_id, qnty)  VALUES ({$id}, '{$data}')";
    return execute ($sql);
}
function updateOrder(int $id, $data){
    if(empty($data)) {
        return null;
    }
    $sql = "UPDATE orders SET qnty={$data} WHERE product_id = {$id}";
    return execute($sql);
}

function getAllProducts(array $ids = [])
{
    $where = '';
    if(!empty($ids)) {
        $in = implode(', ', $ids);
        $where = "WHERE id IN ($in)";
    }
    return queryAll("SELECT * FROM gallery {$where}");
}


function getProductById($id)
{
    return queryOne("SELECT * FROM gallery WHERE id = {$id}");
}
function getAllInfo()
{
    return queryOne("SELECT * FROM user_info");
}
function delete(int $id)
{
    return execute("DELETE FROM orders WHERE product_id = {$id}");
}
