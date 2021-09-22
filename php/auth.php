<?php

    require_once('db.php');

    $_POST = json_decode(file_get_contents("php://input"), true);

    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    $sql = "SELECT `id`, `login`, `password` FROM `users` WHERE `login` = :l";
    $query = $connect -> prepare($sql);
    $query->execute(['l' => $login]);
    $result = $query -> fetchAll(PDO::FETCH_ASSOC);
    print_r($result);

    if (password_verify($password, $result[0]['password'])) {
        $_SESSION['id'] = $result[0]['id'];
        $_SESSION['login'] = $result[0]['login'];
        echo 'Вы успешно авторизированны!';
    } else {
        echo $password;
        echo $result[0]['password'];
        echo 'Не верный пароль';
    }

?>