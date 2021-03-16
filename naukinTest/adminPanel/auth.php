<?php
session_start();

$login = $_POST['login'];
$password = $_POST['password'];

if($login === "NaukinAdminPanel"){
    if($password == "123"){
        $_SESSION['user']=[
            "status"=>'true',
        ];
        header('Location: admin.php');
        exit();
    }
    else{
        $_SESSION['user']=[
            "status"=>'false',
        ];
        header('Location: index.html');
        exit();
    }
}
else
{
    $_SESSION['user']=[
        "status"=>'false',
    ];
    header('Location: index.html');
    exit();
}
