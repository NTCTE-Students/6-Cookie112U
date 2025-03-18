<?php

// Путь к файлу
$filename = 'example.txt';

// Данные для записи
$data = 'Это новая строка, которая будет записана в файл.\n';

// Записываем данные в файл
$result = file_put_contents($filename, $data);

// Проверяем результат
if ($result !== false) {
    print('Данные успешно записаны в файл $filename.');
} else {
    print('Ошибка при записи в файл $filename.');
}