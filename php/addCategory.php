<?php

    require_once('db.php');

    $category = file_get_contents("php://input");

    $sql = 'INSERT INTO `categories` (`category`) VALUES (:c)';
    $query = $connect -> prepare($sql);
    $result = $query->execute(["c" => $category]);
    if ($result) {
        echo 'Добавление категории успешно';
    }
    
?>