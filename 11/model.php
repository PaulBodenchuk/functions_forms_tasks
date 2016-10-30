<?php

function upper_sentence ($text){
    $res_text = '';
    $sentence_arr = explode(".", $text);
    for ($i = 0; $i < count($sentence_arr); $i++) {
        $sentence_arr[$i] = ltrim($sentence_arr[$i]);
        if ($sentence_arr[$i] != ""){
            $words_arr = explode(" ", $sentence_arr[$i]);
            $new_sentence = '';
            for ($j = 0; $j < count($words_arr); $j++) {
                if ($j == 0) {
                    $words_arr[$j] = mb_convert_case($words_arr[$j], MB_CASE_TITLE, "UTF-8");;
                }
                $new_sentence .= $words_arr[$j];
                if ($j != count($words_arr) - 1) {
                    $new_sentence .= " ";
                }
            }
            $res_text .= $new_sentence . ".";
            if ($i != count($sentence_arr) - 1) {
                $res_text .= " ";
            }
        }
    }
    return $res_text;
}
