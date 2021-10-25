<?php

    require_once('db.php');

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    $_POST = json_decode(file_get_contents("php://input"), true);

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    $name = trim($_POST['name']);
    $login = trim($_POST['reglogin']);
    $email = trim($_POST['email']);
    $password = trim($_POST['regPassword']);

    $sql = "SELECT `login` FROM `users` WHERE `login` = :l";
    $query = $connect -> prepare($sql);
    $query->execute(['l' => $login]);
    $dbLogin = $query -> fetchAll(PDO::FETCH_COLUMN);

    if (empty($dbLogin)) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = 'INSERT INTO `users`(`name`, `login`, `email`, `password`) VALUES (:n, :l, :e, :p)';
        $query = $connect -> prepare($sql);
        $result = $query->execute(['n' => $name, 'l' => $login, 'e' => $email, 'p' => $password]);

        // echo json_encode('Вы успешно зарегистрировались!');

    } else {
        // echo json_encode('Такой логин уже зарегистрирован');
    }

?>