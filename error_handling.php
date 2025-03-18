<?php

$filename = 'example.txt';

// Пытаемся прочитать файл
$content = @file_get_contents($filename);

if ($content === false) {
    print('Ошибка: не удалось прочитать файл {$filename}.');
} else {
    print('Содержимое файла:\n{$content}');
}

// Пытаемся записать в файл
$data = 'Тестовая строка.';
$result = @file_put_contents($filename, $data);

if ($result === false) {
    print('Ошибка: не удалось записать в файл $filename.');
} else {
    print('Данные успешно записаны в файл $filename.');
}