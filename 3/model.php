<?php

function max_3_words($text1, $max_word_size){
    $word_arr = explode(" ", $text1);
    $res_string = '';
    foreach ($word_arr as $key => $word){
        if(mb_strlen($word,'UTF-8') > $max_word_size){
            unset($word_arr[$key]);
        } else {
            $res_string .= $word.' ';
        }
    }
    return $res_string;
}

