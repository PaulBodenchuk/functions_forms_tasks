<?php

function show_all_img ($last_number = null){
    $folder_path = "gallery/";
    $img_arr = scandir($folder_path);

    $count = 1;
    if (!isset($last_number)) {
        for ($i = 0; $i < count($img_arr); $i++){
            $img_src = $folder_path.$img_arr[$i];
            if ($i > 1){
                adding_row($img_src, $count);
            }
            $count++;
        }
    } else {
        $img_src = $folder_path.$img_arr[$last_number];
        adding_row($img_src, $last_number + 1);
    }
 }
/* не полностью решена проблема добавления окартинок с одинаковыми названиями
   и есть проблема отображения неправильной картики при добавлении одиноковой картинки
   (при обновлении формы все ок (кроме последовательности))
*/
function download_img (){
    $folder_path = "gallery/";
    $file_name = $_FILES['uploadFile']['name'];
    if ($file_name !== ""){
        $src = $_FILES['uploadFile']['tmp_name'];
        $img = $folder_path.$file_name;
        $file_add = file_get_contents($src);
        $img = check_file_name($folder_path, $file_name);
        file_put_contents($img, $file_add);
        $img_arr = scandir($folder_path);
        show_all_img (count($img_arr) - 1);
    }
}


function adding_row ($img_src ,$row_number){
    $real_row_number = $row_number - 2;
    echo "<tr>";
    echo "<td width='50px' align='center' vertical-align='middle'>{$real_row_number}</td>";
    echo "<td align='center'><img src=$img_src alt='no file' width='150px' height='100px'></td>";
    echo "</tr>";
}

function check_file_name($folder_name, $file_name){
    while (file_exists($folder_name.$file_name)){
        echo 'test';
        $file_name_clear = substr($file_name, 0, strlen($file_name) - 4);
        $extension = substr($file_name, strlen($file_name) - 4, 4);
        $file_name = $file_name_clear."(1)".$extension;
        check_file_name($folder_name, $file_name);
    }
    return $folder_name.$file_name;
}

