<?php
// Создание API
require "functions.php";

$posts = getPost();

foreach ($posts as $post){
    echo '<h2>'.$post['title'].'</h2>'.'<p>'.$post['post'].'</p><br>';
}

