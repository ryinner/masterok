<?php

    require_once('db.php');

    // echo '<pre>';
    // echo 'files: '; 
    // var_dump($_FILES);
    // echo 'post: '; 
    // var_dump($_POST);
    // echo '</pre>';

    $address = $_POST['address'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $max_price = $_POST['max_price'];

    $imgSize = $_FILES['uploadFile']['size'];

    $uploadDir = '../img/orders/';
    $uploadFile = $uploadDir . basename($_FILES['uploadFile']['name']);

    $fileExtension = pathinfo($uploadFile, PATHINFO_EXTENSION);
    
    $allowedExtension = ['jpg','jpeg','png','bmp'];
    $allowedSize = 2097152;

    if ($imgSize < $allowedSize) {
        if (in_array($fileExtension, $allowedExtension)) {
            if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploadFile)) {
                $sql = 'INSERT INTO `orders`(`user_id`, `address`, `category`, `description`, `max_price`, `before_image`) VALUES 
                (:u, :a, :c, :d, :m, :b)';
                $query = $connect -> prepare($sql);
                $result = $query->execute(["u" => $_SESSION['id'], "a" => $address, "c" => $category, "d" => $description, "m" => $max_price, "b" => $uploadFile]);
                echo 'Добавление заявки успешно';
            } else {
                echo 'Возможная атака с помощью файловой загрузки!';
            }
        } else {
            echo 'Неверное расширение файла';
        }        
    } else {
        echo 'Файл слишком большой';
    }
    
?>