<?php
// 1.
$a = 0;
$b = 0;
while(++$a < 100) {
    $b = $a;
    $b %= 3;
    if ($b == 0) {
      echo $a."<br>";
    }
}
// 2.
function getNumbers($nums){
    $a = 0;
    do {
        
        $b = $a;
        $b %= 2;
        if ($a == 0) {
            echo $a. " - ноль" . "<br>";
        }elseif ($b == 0) {
            echo $a. " - четное число" . "<br>";
        }else {
            echo $a. " - нечетное число" . "<br>";
        }
    
    }while (++$a <= $nums);
}
getNumbers(10);
// 3.
$cities = [
    'Московская обл' => [' Мытищи,', ' Балашиха,', ' Клин'],
    'Ленинградская обл' => [' Выборг,', ' Всеволжск,', ' Павловск'],
    'Рязанская обл' => [' Касимов,', ' Кораблино,', ' Новомучинск'],
    'Вогоградская обл' => [' Жирновск,', ' Быково,', ' Волжский'],
    'Астраханская обл' => [' Черный Яр,', ' Ахтубинск,', ' Камызяк,', ' Знаменск'],

];

foreach ($cities as $key => $value) {
    echo $key. ' - '. implode($value) . '<br>';
}
// 4.

function transliterate(string $word):string {
    $dictionary = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'h',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'sch',
        'ъ' => 'i',
        'ы' => 'y',
        'ь' => 'i',
        'э' => 'eh',
        'ю' => 'yu',
        'я' => 'ya',
    ];
    $newAr = [];
    $str = iconv('UTF-8', 'windows-1251', $word);
    foreach (str_split($str) as $index => $value2) {
            foreach($dictionary as $key => $value) {
                if ($key == iconv('windows-1251','UTF-8', $value2)) {
                    array_push($newAr, $value); 
                    
                }
                
            }
    }
    return implode($newAr);
};

echo transliterate('смирение');
// 5.
function transmit(string $someStr):string {
     return preg_replace('/\s+/', '_', $someStr);

}
echo transmit('При всех апостасийных процессах');

// 6.

    function menuIs() {
        $elNav = [
            'item1' =>'Личные вещи',
            'item2' =>'Транспорт',
            'item3' =>'Для дома и дачи'
        ];
       echo '<ul><br>';
        foreach($elNav as $key => $value){
            echo '<li>'. $value. '</li><br>';
        }
        echo '</ul><br>';
        
    }

// 7.
for ($i = 0; $i <= 10;  print $i++){
  }

?>
<h1>Title</h1>
<nav><?php menuIs()?><nav>
<p>Content</p>
<p> <?php echo date('Y') ?> </p>





