<?php
define("HOST", 'localhost');
define("USER", 'root');
define("PASS", '');
define("DBNAME", 'test');

try{
    $link = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASS);
    $link->exec("SEET NAMES UTF8");
}catch(Exception $e){
    die("Не удалось подключиться". $e->getMessage());
}