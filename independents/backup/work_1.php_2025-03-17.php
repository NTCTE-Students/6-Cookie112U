<?php
//Создайте скрипт, который читает содержимое текстового файла и выводит его на экран. Если файл не существует, выведите сообщение об ошибке.

function readFileContent($filename) {
    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        print($content);
    } else {
        print("Ошибка: Файл не найден!\n");
    }
}

readFileContent("../example.txt");