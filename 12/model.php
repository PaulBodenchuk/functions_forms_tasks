<?php

function upper_sentence ($text){
    $res_text = '';
    $sentence_arr = explode(".", $text);
    $sentence_arr = array_reverse($sentence_arr);
    for ($i = 0; $i < count($sentence_arr); $i++) {
        $sentence_arr[$i] = ltrim($sentence_arr[$i]);
        if ($sentence_arr[$i] != ""){
            $res_text .= $sentence_arr[$i].".";
            if ($i != count($sentence_arr) - 1) {
                $res_text .= " ";
            }
        }
    }
    return $res_text;
}
