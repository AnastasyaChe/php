<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/main.php";
require_once ROOT_DIR . "/draw.php";
$dir = opendir('images/');
 while ($element = readdir($dir)) {
    if (($element != ".") && ($element != "..")) {
    echo "<a href='images/{$element}'>"; // Делаем ссылку на картинку
    echo "<img src= 'images/{$element}' alt='alt' width='100' />"; // Вывод превью картинки
    echo "</a>";
    }
  }
closedir($dir);

echo '<br/>';

    
    madeGallery('images');
  
?>
