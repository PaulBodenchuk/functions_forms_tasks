<?php

function max_3_words($text1, $word_count){
    $temp_arr = array();
    $length_arr = array();
    $result_arr = array();
    $word_arr1 = explode(" ", $text1);

    foreach ($word_arr1 as $word1){
        $temp_arr[] = array(
            'length' => strlen($word1),
            'word' => $word1
        );
        //$length_arr[] = strlen($word1);
        $length_arr[] = mb_strlen($word1,'UTF-8');
    }
    rsort($length_arr);

    $tmp = '';

    for($i=0; $i < $word_count; $i++){
        if(count($temp_arr) > 0){

            foreach ($temp_arr as $word){

                if ($length_arr[$i] == $word['length']){
                    $result_arr[] = $word['word'];
                    unset($temp_arr[array_search($word, $temp_arr)]);
                    break;
                }
            }
        }
    }

    return $result_arr;
}