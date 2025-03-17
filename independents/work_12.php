<?php
//Напишите скрипт, который записывает в лог-файл текущую дату и время, а также произвольное сообщение. Лог-файл должен дополняться при каждом запуске скрипта.

function writeLog($message) {
    $logFile = 'log.txt';
    $logMessage = date('Y-m-d H:i:s') . ' - ' . $message . "\n";
    file_put_contents($logFile, $logMessage, FILE_APPEND);
}
writeLog('Привет, мир!');