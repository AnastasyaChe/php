<?php
//повторяется создание connection переносим это в отдельную функцию:
function getConnection(){
    $config = include CONFIG_DIR . 'db.php';
    static $connection = null;
        if(is_null($connection)) {
            $connection = mysqli_connect(
            $config['host'],
            $config['login'],
            $config['password'],
            $config['db'],

        );
    }
    return $connection;
}
//выполнение запроса без выборки
function execute(string $sql) : int {
   $res = mysqli_query(getConnection(), $sql);
    return mysqli_affected_rows(getConnection());
}
//выполнение запроса когда одна строка содержится в результате
function queryOne(string $sql) {
return queryAll($sql)[0];
}
//выполнение запроса когда не знаем сколько будет строк
function queryAll(string $sql) {
    $res = mysqli_query(getConnection(), $sql);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
