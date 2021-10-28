<?php

    session_start();
    session_unset();
    session_destroy();
    echo "Вы успешно вышли из аккаунта!";

?>