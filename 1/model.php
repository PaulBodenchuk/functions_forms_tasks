<?php

function getCommonWords($text1, $text2){
    $result_arr = array();
    $word_arr1 = explode(" ", $text1);
    $word_arr2 = explode(" ", $text2);

    foreach ($word_arr1 as $word1){
        foreach ($word_arr2 as $word2){
            if ($word1 === $word2) {
                $result_arr[] = $word2;
            }
        }
    }
    return $result_arr;
}