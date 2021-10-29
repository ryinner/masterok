<?php

    require_once('db.php');

    $orderId = file_get_contents("php://input");

    $sql = 'DELETE FROM `orders` WHERE `id` = :i';
    $query = $connect -> prepare($sql);
    $result = $query->execute(["i" => $orderId]);
    if ($result) {
        echo 'Удаление заявки прошло успешно';
    }
    
?>