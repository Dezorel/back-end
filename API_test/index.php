<?php
// Создание API
require "functions.php";
header('Content-type: json/application');   //делаю так что бы страница отображалась как json

$q = $_GET['q']; //переменная получаемая из htaccess = всему тому что идёт после index.php/.... в url строке
$params = explode('/', $q); //разбиваю строку через слэш, тем самым получая массив введённых данных

$method = $_SERVER['REQUEST_METHOD'];      //смотрим какой метод используется post, get и тд

$type = $params[0];
if(isset($params[1])){
    $id = $params[1];
}

if($method === 'GET'){      //прооверка методов
    if ($type === 'posts'){     //если мы напишем в адерсной строке /posts то соотв. нам выведется список постов (кастомайз апи)

        if(isset($id)){            //если есть id то выводим только 1 пост конкретный
            $post = getPost($id);
        }
        else{
            $posts = getPosts();

        }
    }
}
elseif ($method === 'POST'){
    if($type === 'posts'){
        addPost($_POST);
    }
}
elseif ($method === 'PATCH'){
    if($type === 'posts'){
        if(isset($id)){
            $data = file_get_contents('php://input');   //позволяет получить данные из метода ПАТЧ
            $data = json_decode($data,true);    //при значении тру делаем ассоциативный массив, при фолс - получаем объект
            updatePost($data, $id);
        }
    }
}
elseif ($method === 'DELETE'){
    if($type === 'posts'){
        if(isset($id)){
            deletePost($id);
        }
    }
}




