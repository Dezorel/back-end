<?php
session_start();
$status = $_SESSION['user']['status'];
if($status !== 'true'){
    header('Location: index.html');
    exit();
}
require 'conectionAndFunctions.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="script.js" defer></script>

    <title>Admin Panel</title>
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">
       <a class="navbar-brand" href="#">Панель админа</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav">
               <li class="nav-item active">
                   <a class="nav-link" href="#">Блог <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">Контакты</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">Заявки</a>
               </li>
           </ul>
       </div>
   </div>
</nav>
<div class="row">
    <div class="col-md-7 offset-4">
        <h1>Создать новый пост</h1>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <form action="">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" maxlength="50" id="login" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="postName">PostName</label>
                    <input type="text" name="postName" class="form-control" maxlength="50" id="login" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" maxlength="250" id="login" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="postText">Post text</label>
                    <textarea class="form-control" name="postText" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group ">
                    <label for="example-date-input" class="col-2 col-form-label">Data</label>
                    <input class="form-control" type="date" id="example-date-input">
                </div>
                <div class="form-group">
                    <label for="image">Image URL</label>
                    <input type="text" name="image" class="form-control" id="login" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-block btn-success mb-5">Создать</button>
            </form>
        </div>
    </div>
</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col-4">#</th>
        <th scope="col">Title</th>
        <th scope="col">PostName</th>
        <th scope="col">Description</th>
        <th scope="col">Post text</th>
        <th scope="col">Data</th>
        <th scope="col">Image</th>
    </tr>
    </thead>
    <tbody>

<?php
$posts = getAllPosts();
foreach ($posts as $post){
    echo '<tr>';
    echo '<th scope="row">'.$post["id"].'</th>';
    echo '<td>'.$post["title"].'</td>';
    echo '<td>'.$post["postName"].'</td>';
    echo '<td>'.$post["description"].'</td>';
    echo '<td>'.$post["post"].'</td>';
    echo '<td>'.$post["data"].'</td>';
    echo '<td style="max-width: 200px; overflow: hidden">'.$post["image"].'</td>';
    echo '<td><a class="btn btn-danger" onclick="deletePost('.$post["id"].')">Удалить</a><a class="btn btn-warning mt-3" onclick="changePost('.$post["id"].')">Изменить</a>  </td>';
    echo '</tr>';

}
?>
    </tbody>
</table>

<div class="container">


</div>

<?php

?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>



