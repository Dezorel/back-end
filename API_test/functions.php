<?php
require "config.php";

function getPost(){
    global $link;
    $sql='SELECT * FROM `myblog`';
    $query = $link->query($sql);
    return $query->fetchAll();
}