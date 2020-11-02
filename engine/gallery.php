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

function getAllProducts()
{
    return queryAll("SELECT * FROM gallery");
}

function getProductById($id)
{
    return queryOne("SELECT * FROM gallery WHERE id = {$id}");
}
