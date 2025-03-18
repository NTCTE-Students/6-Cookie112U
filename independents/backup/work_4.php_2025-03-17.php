<?php
//Напишите скрипт, который подсчитывает количество строк в текстовом файле и выводит результат.
function countLines($filename) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return count($lines);
}

$filename = "../example.txt";
$lineCount = countLines($filename);
print("Количество строк в файле: $lineCount");