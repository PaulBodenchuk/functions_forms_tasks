<?php
function revers_text ($text){
    $char_arr = mb_split("UTF-8", $text);
    $char_arr = array_reverse($char_arr);
    $reverse_text = implode("", $char_arr);
    return $reverse_text;
}