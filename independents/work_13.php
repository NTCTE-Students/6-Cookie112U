<?php
//Создайте скрипт, который читает JSON-файл, добавляет новый элемент в массив данных и сохраняет обновленные данные обратно в файл.

function writeJSON($file, $data) {
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);
}


$data = [
    ['name' => 'John', 'age' => 30],
    ['name' => 'Jane', 'age' => 25],
    ['name' => 'Bob', 'age' => 40]
];

writeJSON('data.json', $data);