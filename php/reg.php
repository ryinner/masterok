<?php

    require_once('db.php');

    $_POST = json_decode(file_get_contents("php://input"), true);

    $name = trim($_POST['name']);
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT `login` FROM `users` WHERE `login` = :l";
    $query = $connect -> prepare($sql);
    $query->execute(['l' => $login]);
    $dbLogin = $query -> fetchAll(PDO::FETCH_COLUMN);

    print_r($dbLogin);
    
    if (empty($dbLogin)) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = 'INSERT INTO `users`(`name`, `login`, `email`, `password`) VALUES (:n, :l, :e, :p)';
        $query = $connect -> prepare($sql);
        $result = $query->execute(['n' => $name, 'l' => $login, 'e' => $email, 'p' => $password]);

        echo 'Вы успешно зарегистрировались!';

    } else {
        echo 'Такой логин уже зарегистрирован';
    }
    
?>