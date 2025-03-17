<?php
//Создайте скрипт, который читает CSV-файл и выводит его содержимое в виде таблицы HTML.
function readCSV($file) {
    $data = array_map('str_getcsv', file($file));
    $html = '<table>';
    foreach ($data as $row) {
        $html .= '<tr>';
        foreach ($row as $cell) {
            $html .= '<td>' . $cell . '</td>';
        }
        $html .= '</tr>';
    }
    $html .= '</table>';
    return $html;
}

print(readCSV('example.csv'));