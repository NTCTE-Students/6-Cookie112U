<?php

// Проверяем, был ли загружен файл
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $target_dir = __DIR__ . '/uploads/';
    $target_file = $target_dir . basename($_FILES['file']['name']);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Проверяем, является ли файл изображением
    $check = getimagesize($_FILES['file']['tmp_name']);
    if ($check !== false) {
        print("Файл является изображением - {$check['mime']}<br>");
        $uploadOk = 1;
    } else {
        print('Файл не является изображением.<br>');
        $uploadOk = 0;
    }
    
    // Проверяем размер файла (не более 5 МБ)
    if ($_FILES['file']['size'] > 5000000) {
        print('Файл слишком большой.<br>');
        $uploadOk = 0;
    }
    
    // Разрешаем только определенные форматы файлов (например, JPG, PNG, GIF)
    if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'gif') {
        print('Разрешены только файлы JPG, PNG и GIF.<br>');
        $uploadOk = 0;
    }
    
    // Проверяем, можно ли загружать файл
    if ($uploadOk == 0) {
        print('Файл не был загружен.<br>');
    } else {
        // Пытаемся загрузить файл
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
            print('Файл ' . basename($_FILES['file']['name']) . ' был успешно загружен.<br>');
        } else {
            print('Ошибка при загрузке файла.<br>');
        }
    }
} else {
    print('Ошибка: файл не был загружен.<br>');
}