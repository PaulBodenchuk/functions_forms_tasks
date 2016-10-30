<?php

function list_dir ($path, $fileName){
    $file_list = scandir($path);
    $str_result = '';
    foreach ($file_list as $file){
        if (stripos($file, $fileName) !== false) {
             $str_result .= $file."</br>";
        }
    }
    return $str_result;
}
