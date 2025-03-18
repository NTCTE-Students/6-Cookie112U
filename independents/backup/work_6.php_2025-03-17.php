<?php
//Напишите скрипт, который копирует содержимое одного файла в другой. Если файл назначения уже существует, выведите предупреждение.
function copyFile($source, $destination) {
    if (file_exists($source)) {
        if (!file_exists($destination)) {
            copy($source, $destination);
        } else {
            print("Ошибка: Файл назначения уже существует!\n");
        }
    } else {
        print("Ошибка: Исходный файл не найден!\n");
    }
}

copyFile("../example.txt", "../example-news.txt");