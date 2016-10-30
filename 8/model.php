<?php

//забрать комментарии из файла
function getContent(){
    if (is_readable("messages_file.txt")){
        $messages = file_get_contents("messages_file.txt");
        $messages = unserialize($messages);
        return $messages;
    }
    return [];
}

// Добавить 1 коментарий в файл после нажатия submit
function add_content($messages = array()){
    error_reporting(E_ALL);
    if (isset($_POST['submit'])) {
        $newPost['login'] = $_POST['login'];
        $newPost['comment'] = strip_tags($_POST['comment'], '<b>');
        $newPost['comment'] = censored($newPost['comment']);
        if ($newPost['comment'] !== ""){
            $messages[] = $newPost;
            $messages_ser = serialize($messages);
            file_put_contents('messages_file.txt',$messages_ser);
        }
    }
    return $messages;
}

//Вывести весь список комментариев
function showContent ($messages){
    if (isset($messages)){
        $messages = array_reverse($messages);
        foreach ($messages as $post){
            echo "<p>{$post['login']}: {$post['comment']}</p>";
        }
    }
}

//АнтиМАТ
function censored ($comment){
    if (is_readable("forbidden_words.txt")){
        $words_to_avoid = file_get_contents("forbidden_words.txt");
        $words_to_avoid_arr = explode(",", $words_to_avoid);
        foreach ($words_to_avoid_arr as $word){
            if($comment !== str_replace($word, "", $comment)){
                echo "<script>alert('Некорректный комментарий');</script>";
                $comment = "";
            }
        }
    }
    return $comment;
}