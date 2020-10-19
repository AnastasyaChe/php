<?php
function madeGallery(string $direct) {
    $dir = opendir($direct);
    while ($element = readdir($dir)) {
        $c = $direct . '/' . $element;
        if (($element != ".") && ($element != "..")) {
        echo "<a target = '_blank'  href= '$c'>"; // Делаем ссылку на картинку
        echo "<img src= '$c' alt='alt' width='100' />"; // Вывод превью картинки
        echo "</a>";
    }
    }
    closedir($dir);
}