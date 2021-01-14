<?php
require "config.php";
//из урока по АПИ
function getPosts(){
    global $link;
    $sql='SELECT * FROM `myblog`';
    $query = $link->query($sql);
    $data = $query->fetchAll();
    echo json_encode($data);   //делаю массив в json
}
function getPost($id){
    global $link;
    $sql="SELECT * FROM `myblog` WHERE `id_post` = '$id'";
    $query = $link->query($sql);
    $data = $query->fetchAll();
    if(!$data){        // если пост не найден
        $res = [        //устанавливаю ответ если поста нет
            "status"=>false,
            "message"=>"Post not found"
        ];
        http_response_code(404);   //указываем код который возвращаем
        echo json_encode($res);
    }
    else {

        echo json_encode($data);
    }
}

