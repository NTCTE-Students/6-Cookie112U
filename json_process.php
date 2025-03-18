<?php

// Путь к JSON-файлу
$filename = 'data.json';

// Читаем JSON-данные из файла
$jsonData = file_get_contents($filename);

// Преобразуем JSON в массив
$data = json_decode($jsonData, true);

// Добавляем новый элемент в массив
$data[] = [
    'id' => 3,
    'name' => 'Новый элемент',
    'description' => 'Это новый элемент, добавленный через PHP.'
];

// Преобразуем массив обратно в JSON
$newJsonData = json_encode($data, JSON_PRETTY_PRINT);

// Записываем обновленные данные в файл
file_put_contents($filename, $newJsonData);

print('Данные успешно обновлены и записаны в файл $filename.');