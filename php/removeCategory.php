<?php

    require_once('db.php');

    $category = file_get_contents("php://input");

    $sql = 'DELETE FROM `categories` WHERE `category` = :c';
    $query = $connect -> prepare($sql);
    $result = $query->execute(["c" => $category]);
    if ($result) {
        echo 'Удаление категории успешно';
    }
    
?>