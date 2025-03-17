<?php
//Создайте скрипт, который ищет определенное слово в текстовом файле и заменяет его на другое. Результат сохраните в новый файл.
function searchAndReplace($file, $searchWord, $replaceWord) {
    $content = file_get_contents($file);
    $newContent = str_replace($searchWord, $replaceWord, $content);
    file_put_contents($file, $newContent);
}

// Пример использования
$file = 'example.txt';
$searchWord = 'world';
$replaceWord = 'planet';
searchAndReplace($file, $searchWord, $replaceWord);