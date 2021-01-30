<?php
require "config.php";

function getBlogPosts(){
    global $link;
    $sql='SELECT * FROM `blog`';
    $query = $link->query($sql);
    $tempData = $query->fetchAll();
    $data = null;
    foreach ($tempData as $tmp){
        $data[] = [
            "id"=>$tmp['id'],
            "title"=>$tmp['title'],
            "description"=>$tmp['description'],
            "post"=>$tmp['post']
        ];
    }
    echo json_encode($data,JSON_UNESCAPED_UNICODE );   //делаю массив в json с поддержкой русского
}