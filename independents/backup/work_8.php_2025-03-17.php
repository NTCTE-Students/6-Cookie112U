<?php
//Напишите скрипт, который переименовывает файл. Проверьте, существует ли файл с новым именем, чтобы избежать перезаписи.
function renameFile($oldName, $newName) {
    if (file_exists($newName)) {
        print("Ошибка: Файл с новым именем уже существует!\n");
    } else {
        rename($oldName, $newName);
    }
}

renameFile("../example.txt", "../examples.txt");