<?php
//Создайте скрипт, который ищет определенное слово в текстовом файле и выводит количество его вхождений.

function searchWord($filename, $word) {
    $count = 0;
    $file = fopen($filename, 'r');
    while (!feof($file)) {
        $line = fgets($file);
        if (strpos($line, $word) !== false) {
            $count++;
        }
    }
    fclose($file);
    return $count;
}

$filename = "../example.txt";
$word = "Hello";
$count = searchWord($filename, $word);
print("Количество вхождений слова \"$word\": $count");