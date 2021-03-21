<?php
//
require 'conectionAndFunctions.php';
$currentId = $_POST['id'];
if($currentId){
    global $link;
    $sql = "DELETE FROM `blog` WHERE `blog`.`id` = $currentId";
    $query= $link->query($sql);
    if($query) {
        header("Location: admin.php");
        exit();
    }
}


