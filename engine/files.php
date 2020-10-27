<?php

// function getFiles(string $directory): array { //ф. которая сканирует директорию и с пом.форыча убирает условные папки, возвращая массив с фотками
//     $files = [];
//     $result = scandir($directory);
//     foreach($result as $file) {
//       if(in_array($file, ['.', '..'])) {
//         continue;
//       }
//       $files[] = $file;
//     }
//     return $files;
//   }