<?php
$connection = mysqli_connect($host, $login, $password, $db);
//выполнение запроса без выборки
function execute(string $query) {
    return mysqli_query($connection, $query);
}
//выполнение запроса когда одна строка содержится в результате
function queryOne(string $query) {
$sql = "SELECT * FROM products";
$res = mysqli_query($connection, $sql);
return mysqli_fetch_row($res);
}
//выполнение запроса когда не знаем сколько будет строк
function queryAll(string $query) {
    $sql = "SELECT * FROM products";
    $res = mysqli_query(connection, $sql);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
