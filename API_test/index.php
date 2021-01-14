<?php
// Создание API
require "functions.php";
header('Content-type: json/application');   //делаю так что бы страница отображалась как json

$q = $_GET['q']; //переменная получаемая из htaccess = всему тому что идёт после index.php/.... в url строке
$params = explode('/', $q); //разбиваю строку через слэш, тем самым получая массив введённых данных


$type = $params[0];
if(isset($params[1])){
    $id = $params[1];
}


if ($type === 'posts'){     //если мы напишем в адерсной строке /posts то соотв. нам выведется список постов (кастомайз апи)

    if(isset($id)){            //если есть id то выводим только 1 пост конкретный
        $post = getPost($id);
    }
    else{
        $posts = getPosts();

    }
}



