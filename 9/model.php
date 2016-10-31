<?php
function revers_text ($text){
    $char_arr = preg_split('//',$text,-1,PREG_SPLIT_NO_EMPTY);
    $char_arr = array_reverse($char_arr);
    $reverse_text = implode("", $char_arr);
    return $reverse_text;
}