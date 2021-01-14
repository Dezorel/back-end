<?php
require "config.php";
//из урока по АПИ
function getPost(){
    global $link;
    $sql='SELECT * FROM `myblog`';
    $query = $link->query($sql);
    return $query->fetchAll();
}


