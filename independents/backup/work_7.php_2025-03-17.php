<?php
//Создайте скрипт, который удаляет указанный файл. Перед удалением проверьте, существует ли файл.
function deleteFile($file) {
    if (file_exists($file)) {
        unlink($file);
    } else {
        print("Ошибка: Файл не найден!\n");
    }
}

deleteFile("../example-new.txt");