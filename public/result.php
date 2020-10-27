<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
$result = include PUBLIC_DIR . 'calc.php';
?>
<html>
<head>
<title> Калькулятор </title>
</head>
<body>
<b> Результат вычислений: </b>
<br>
<?=$result ?>
</body>
</html>