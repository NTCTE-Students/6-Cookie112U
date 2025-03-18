<?php

// Путь к файлу
$filename = 'example.txt';

// Проверяем, существует ли файл
if (file_exists($filename)) {
    // Читаем содержимое файла
    $content = file_get_contents($filename);

    // Выводим содержимое файла
    print("<pre>Содержимое файла:\n{$content}</pre>");
} else {
    print("Файл {$filename} не существует.");
}