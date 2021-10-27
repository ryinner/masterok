<?php

    require_once('db.php');

    echo '<pre>';
    echo 'files: '; 
    var_dump($_FILES);
    echo 'post: '; 
    var_dump($_POST);
    echo '</pre>';

    $address = $_POST['address'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $max_price = $_POST['max_price'];

    $imgSize = filesize($_FILES['uploadFile']['name']);
    $fileExtension = pathinfo($_FILES['uploadFile']['name'], PATHINFO_EXTENSION);
    
    $allowedExtension = ['jpg','jpeg','png','bmp'];
    $allowedSize = 2097152;
    
    $uploaddir = '../img/orders/';
    $uploadfile = $uploaddir . basename($_FILES['uploadFile']['name']);

    if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploadfile)) {
        $sql = 'INSERT INTO `orders`(`address`, `category`, `description`, `max_price`, `before_image`) VALUES 
        (:a, :c, :d, :m, :b)';
        $query = $connect -> prepare($sql);
        $result = $query->execute(["a" => $address, "c" => $category, "d" => $description, "m" => $max_price, "b" => $uploadfile]);
        if ($result) {
            echo 'Файл корректен и был успешно загружен.';
        } else {
            echo 'Execute вернул false';
        }
    } else {
        echo 'Возможная атака с помощью файловой загрузки!';
    }      

?>