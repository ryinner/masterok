<?php 
    require_once('../db.php');   
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masterok | Cabinet</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/vendor.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
</head>
<body>
    <div class="site-container">

    <?php require_once('../partials/header.php') ?>

    <main>

        <section class="cabinet hero">

            <div class="hero__bg">
                <div class="container">
            <?php 
                echo '<pre>';
                print_r ($_SESSION);
                echo '</pre>';
            ?>
                </div>
            </div>
            
        </section>

    </main>

    <?php require_once("../partials/footer.php"); ?>

    </div>
</body>
</html>