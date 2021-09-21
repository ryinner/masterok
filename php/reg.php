<?php

    $_POST = json_decode(file_get_contents("php://input"), true);

    $name = trim($_POST['name']);
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    // $response = json_encode($_POST);
    // echo $response;
    
?>  