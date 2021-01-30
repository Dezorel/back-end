<?php
require "functions.php";

header('Access-control-Allow-Origin: *');
header('Access-control-Allow-Headers: *');
header('Access-control-Allow-Methods: *');
header('Access-control-Allow-Credentials: true');

header('Content-type: application/json; charset=utf-8');

$q = $_GET['q'];
$params = explode('/', $q);

$method = $_SERVER['REQUEST_METHOD'];


$type = $params[0];
if(isset($params[1])){
    $id = $params[1];
}

switch ($method) {
    case 'GET':
        if($type === 'posts'){
            if(isset($id)){     //если указан id
                $post = getBlogPost($id);

            }
            else{               //если не указан id
                $posts = getBlogPosts();
            }
        }
        break;
}

