<?php

// Путь к файлу
$filename = 'example.txt';

// Данные для добавления
$newData = 'Эта строка будет добавлена в конец файла.\n';

// Добавляем данные в файл
$result = file_put_contents($filename, $newData, FILE_APPEND);

// Проверяем результат
if ($result !== false) {
    print('Данные успешно добавлены в файл $filename.');
} else {
    print('Ошибка при добавлении данных в файл $filename.');
}