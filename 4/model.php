<?php

function list_dir ($path){
    $file_list = scandir($path);
    $str_result = '';
    foreach ($file_list as $file){
        $str_result .= $file."</br>";
    }
    return $str_result;
}