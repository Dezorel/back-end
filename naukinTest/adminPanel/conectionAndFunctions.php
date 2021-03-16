<?php
$my_host = 'localhost';
$username = 'root';
$password = '';
$database = 'naukin';

try{
    $link = new PDO('mysql:host='.$my_host.';dbname='.$database, $username, $password);
    $link->exec("SEET NAMES UTF8");
}catch(Exception $e){
    die("Не удалось подключиться". $e->getMessage());
}

function getAllPosts(){
    global $link;
    $sql = "SELECT * FROM `blog`";
    $query= $link->query($sql);
    $query->execute();
    $data = $query->fetchAll();
    return $data;
}