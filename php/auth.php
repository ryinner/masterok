<?php

    require_once("db.php");

    $_POST = json_decode(file_get_contents("php://input"), true);

    $login = trim($_POST["login"]);
    $password = trim($_POST["password"]);    

    $sql = "SELECT `id`, `login`, `password` FROM `users` WHERE `login` = :l";
    $query = $connect -> prepare($sql);
    $query -> execute(["l" => $login]);
    $result = $query -> fetch(PDO::FETCH_ASSOC);

    if (password_verify($password, $result["password"])) {
        $_SESSION["id"] = $result["id"];
        $_SESSION["login"] = $result["login"];
        $data = array($_SESSION["id"], $_SESSION["login"]);
        echo json_encode($data);
    } else {
        echo json_encode("Не верный пароль");
    }
?>