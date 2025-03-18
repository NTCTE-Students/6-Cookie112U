<?php
//Напишите скрипт, который записывает строку "Hello, World!" в текстовый файл. Если файл уже существует, перезапишите его содержимое.
function writeFile($filename, $data) {
$filename = '../example.txt';
$data = 'Hello, world!';
$result = file_put_contents($filename, $data);
if ($result !== false) {
    print('Данные успешно записаны в файл $filename.');
} else {
    print('Ошибка при записи в файл $filename.');
}
}
writeFile("../example.txt", "Hello, world!");