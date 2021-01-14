<?php
// Создание API
require "functions.php";

header('Content-type: json/application');   //делаю так что бы страница отображалась как json

$posts = getPost();

//foreach ($posts as $post){
//    echo '<h2>'.$post['title'].'</h2>'.'<p>'.$post['post'].'</p><br>';
//}

echo json_encode($posts);   //делаю массив в json


