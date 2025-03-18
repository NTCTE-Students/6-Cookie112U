<?php
//Создайте скрипт, который добавляет новую строку в конец существующего файла. Если файл не существует, создайте его.
function appendToFile($filename, $data) {
    $file = fopen($filename, 'a+');
    fwrite($file, $data . PHP_EOL);
    fclose($file);
}
appendToFile("../example.txt", "Hellos, world!");