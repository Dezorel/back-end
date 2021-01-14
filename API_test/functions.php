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

function addPost($data){
    global $link;
    $title = $data['title'];
    $post = $data['post'];
    $sql = "INSERT INTO `myblog` (`name_user`, `title`, `post`) VALUES ('Leonid', '$title', '$post');";
    $query= $link->query($sql);
    $res = [        //делаем ответ сервера при дообавлении
        "status"=>true,
        "post_id"=>$link->lastInsertId()
    ];
    http_response_code(201);    //возвращаем код 201-создано
    echo json_encode($res);
}

function updatePost($data, $id){
    global $link;
    $title = $data['title'];
    $post = $data['post'];
    $sql = "UPDATE `myblog` SET `title` = '$title', `post` = '$post' WHERE `id_post` = '$id'";
    $query = $link->query($sql);
    http_response_code(200);
    $res =[
        "status"=>true,
        "message"=>'Post is updated'
    ];
    echo json_encode($res);
}
