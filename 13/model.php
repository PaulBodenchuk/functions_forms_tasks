<?php

function get_number_of_words ($text){
    $unique_words_arr = array();
    $text_arr_income = explode(" ", $text);
    foreach ($text_arr_income as $word_to_check){

        if (array_key_exists($word_to_check, $unique_words_arr)){
            $unique_words_arr[$word_to_check] = $unique_words_arr[$word_to_check] + 1;
        } else {
            $unique_words_arr[$word_to_check] = 1;
        }
    }
    return $unique_words_arr;
}

function rsort_arr ($arr){
    $res_arr = array();
    $amount_arr = array_values($arr);
    rsort($amount_arr);;
    foreach ($amount_arr as $number_of_fruits){
        foreach ($arr as $fruit => $number){
            if ($number_of_fruits == $number){
                $res_arr[$fruit] = $number;
                unset($arr[$fruit]);
                break;
            }
        }
    }
    foreach ($res_arr as $fruit => $number){
        echo "{$fruit} - {$number}\n";
    }
}

