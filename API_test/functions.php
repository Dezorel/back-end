<?php
require "config.php";
//из урока по АПИ
function getPosts(){
    global $link;
    $sql='SELECT * FROM `myblog`';
    $query = $link->query($sql);
    return $query->fetchAll();
}
function getPost($id){
    global $link;
    $sql="SELECT * FROM `myblog` WHERE `id_post` = '$id'";
    $query = $link->query($sql);
    return $query->fetchAll();
}

