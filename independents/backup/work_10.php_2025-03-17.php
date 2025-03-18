<?php
//Напишите скрипт, который записывает массив данных в CSV-файл. Каждый элемент массива должен быть новой строкой в файле.

function writeCSV($file, $data) {
    $fp = fopen($file, 'w');
    foreach ($data as $row) {
        fputcsv($fp, $row);
    }
    fclose($fp);
    print ("Данные успешно записаны в CSV-файл.");

}

$data = [
    ['name' => 'John', 'age' => 30],
    ['name' => 'Jane', 'age' => 25],
    ['name' => 'Bob', 'age' => 40]
];

writeCSV('data.csv', $data);