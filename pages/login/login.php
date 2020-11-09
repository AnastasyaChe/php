<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = post('login');
    $password = post('password');

    $sql = "SELECT * FROM users 
            WHERE login = '{$login}' 
            AND password = '{$password}'";

    if($user = queryOne($sql)){
        session_start();
        $_SESSION['user'] = ['id' => $user['id'], 'name' => $user['name'], 'login' => $user['login']];
        redirect('/gallery.php');
    }else{
        echo "Не авторизованы!";
    }
}


?>

<form action="" method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" value="Войти">
</form>
