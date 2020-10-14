<?php
/* 1*/
$a = 7;
$b = 3;
if ($a >= 0 && $b >= 0) {
    var_dump($a - $b);
}elseif ($a < 0 && $b < 0) {
    var_dump($a * $b);
} elseif ($a < 0 xor $b < 0) {
    var_dump($a + $b);
} 
/* 2 */
function sum($a, $b) {
    return $a + $b;
}
function dif($a, $b) {
    return $a - $b;
}
function mult($a, $b) {
    return $a * $b;
}
function div($a, $b) {
    return $a / $b;
}

var_dump(dif(15, 4));

/* 3 */

function mathOperation($arg1, $arg2, $operation){
    switch ($operation) {
        case '+' :
            return $arg1 + $arg2;
        break;
        case '-' :
            return $arg1 - $arg2;
        break;
        case '*' :
            return $arg1 * $arg2;
        break;
        case '/' :
            return $arg1 / $arg2;
        break;
        default: 
        echo 'stop';
    };
};
var_dump(mathOperation(5, 5, '/'));

/* 4 */
function power($val, $pow){
    return !$pow ? 1 : $val * power($val, $pow - 1);
}

var_dump(power(5, 1));
   
/* 5 */
?>
<h1> Title </h1>
<p> <?php echo date('Y') ?> </p> <!-- помню, что лучше в переменную вынести... -!>

