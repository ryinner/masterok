<?php

    require_once('db.php');

    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';

    $address = $_POST['address'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $max_price = $_POST['max_price'];
    
    $uploaddir = '../img/orders/';
    $uploadfile = $uploaddir . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        require_once('db.php');
        $sql = 'INSERT INTO `images`(`path`) VALUES (:p)';
        $query = $connect -> prepare($sql);
        $result = $query->execute(['p' => $uploadfile]);
        echo json_encode("Файл корректен и был успешно загружен.");
    } else {
        echo json_encode("Возможная атака с помощью файловой загрузки!");
    }    

    $sql = 'INSERT INTO `orders`(`address`, `category`, `status`, `before_image`) 
    VALUES ( a:, :c, ,[value-4])'

?>