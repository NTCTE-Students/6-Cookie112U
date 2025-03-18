<?php

// Проверяем, существует ли файл
if (file_exists('example.txt')) {
    // Открываем файл для чтения
    $file = fopen('example.txt', 'r');
    
    // Читаем и выводим содержимое файла
    while (($line = fgets($file)) !== false) {
        print("{$line}<br>");
    }
    
    // Закрываем файл
    fclose($file);
} else {
    print('Файл не найден.');
}