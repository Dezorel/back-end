<?php
require "config.php";

function getBlogPosts(){
    global $link;
    $sql="SELECT * FROM `blog`";
    $query = $link->query($sql);
    $tempData = $query->fetchAll();
    $data = null;
    foreach ($tempData as $tmp){
        $data[] = [
            "id"=>$tmp['id'],
            "image"=>$tmp['image'],
            "title"=>$tmp['title'],
            "description"=>$tmp['description'],
            "post"=>$tmp['post'],
            "data"=>$tmp['data']
        ];
    }
    echo json_encode($data,JSON_UNESCAPED_UNICODE );   //делаю массив в json с поддержкой русского
}
function getBlogPost($id){
    global $link;
    $sql="SELECT * FROM `blog` WHERE id = $id;";
    $query = $link->query($sql);
    $tempData = $query->fetchAll();
    $data = null;
    foreach ($tempData as $tmp){
        $data[] = [
            "id"=>$tmp['id'],
            "image"=>$tmp['image'],
            "title"=>$tmp['title'],
            "description"=>$tmp['description'],
            "post"=>$tmp['post'],
            "data"=>$tmp['data']
        ];
    }
    echo json_encode($data,JSON_UNESCAPED_UNICODE );   //делаю массив в json с поддержкой русского
}