<?php

function get_unique_words ($text){
    $unique_words_arr = array();
    $text_arr_income = explode(" ", $text);
    foreach ($text_arr_income as $word_to_check){
        if (!in_array($word_to_check, $unique_words_arr, true)){
            $unique_words_arr[] = $word_to_check;
        }
    }
    return count($unique_words_arr);
}

