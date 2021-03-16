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
function getBlogPost($postName){

    $tempArray = explode("-", $postName);
    $curentPostName = implode(" ", $tempArray);

    global $link;
    $sql="SELECT * FROM `blog` WHERE title = '$curentPostName'";
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
    if($data){
        http_response_code(200);
        echo json_encode($data,JSON_UNESCAPED_UNICODE );   //делаю массив в json с поддержкой русского
    }
    else {
        http_response_code(404);
        $res = [        //делаем ответ сервера при дообавлении
            "status"=>false,
            "message"=>"not found id"
        ];
        echo json_encode($res);
    }
}

function addContact ($data){
    global $link;
    $name = $data['name'];
    $email = $data['email'];
    $message = $data['message'];

    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);



    $stms = $link->prepare("INSERT INTO `contacts` (`name`, `email`, `message`) VALUES (:tmpName, :email, :message);");
    $stms->bindParam(':tmpName',$name);
    $stms->bindParam(':email',$email);
    $stms->bindParam(':message',$message);
    $query= $stms->execute();
    if($query){
        http_response_code(201);    //возвращаем код 201-создано
        $res = [        //делаем ответ сервера при дообавлении
            "status"=>true,
            "post_id"=>$link->lastInsertId()
        ];
    }
    else {
        http_response_code(501); //не реализовано
        $res = [        //делаем ответ сервера при ошибке
            "status"=>false
        ];
    }


    echo json_encode($res);
}