
<?php
$name = "GeekBrains user";
echo "Hello, $name!";

define('MY_CONST', 100);
echo MY_CONST;

$a = 'Hello,';
$b = 'world';
$c = $a . $b;
echo $c;
/* 3 */
$a = 5;
$b = '05';
var_dump($a == $b);                             // Почему true? потому что ==нестрогое сравнение, сравнение по значению, а не по типам
var_dump((int)'012345');                        // Почему 12345? (int) приводит к числовому формату
var_dump((float)123.0 === (int)123.0); // Почему false? разный тип данных?
var_dump((int)0 === (int)'hello, world'); // Почему true? строка без чисел внутри будет в числовом типе равна 0
/* 4 */
$title = 'Title 1';
$content = 'Content';
?>
<h1> <?php echo $title; ?> </h1>
<p> <?php echo $content; ?> </p>

<?php
/*5*/
$a = 1;
$b = 2;
echo " a = $a";
echo "b = $b; <br />";

$a = $b;
$b = 1;

echo " a = $a";
echo "b = $b";


