<?php


function getContent(){
    if (is_readable("messages_file.txt")){
        $messages = file_get_contents("messages_file.txt");
        $messages = unserialize($messages);
        return $messages;
    }
    return [];
}


function add_content($messages = array()){
    error_reporting(E_ALL);
    if (isset($_POST['submit'])) {
        $newPost['login'] = htmlspecialchars($_POST['login']);
        $newPost['comment'] = htmlspecialchars($_POST['comment']);
        $messages[] = $newPost;
        $messages_ser = serialize($messages);
        file_put_contents('messages_file.txt',$messages_ser);
    }
    return $messages;
}

function showContent ($messages){
    if (isset($messages)){
        $messages = array_reverse($messages);
        foreach ($messages as $post){
            echo "<p>{$post['login']}: {$post['comment']}</p>";
        }
    }
}
