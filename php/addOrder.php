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
    $uploadfile = $uploaddir . basename($_FILES['uploadFile']['name']);

    if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploadfile)) {
        $sql = 'INSERT INTO `orders`(`address`, `category`, `description`, `before_image`) VALUES ( a:, :c, :d, :b)'
        $query = $connect -> prepare($sql);
        $result = $query->execute(['a' => $address, 'c' => $category, 'd' => $description, 'b' => $uploadfile]);
        echo json_encode("Файл корректен и был успешно загружен.");
    } else {
        echo json_encode("Возможная атака с помощью файловой загрузки!");
    }    

    

?>