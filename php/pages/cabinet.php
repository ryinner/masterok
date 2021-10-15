<?php 
    require_once('../db.php');
    if (!isset($_SESSION['id']) || !isset($_SESSION['login'])) {
        header('Location: /index.php'); 
    }
?>

<title>Masterok | Cabinet</title>

<link rel="icon" href="/img/favicon.ico">

<link rel="stylesheet" href="/css/global.css">
<link rel="stylesheet" href="/css/vendor.css">
<link rel="stylesheet" href="/css/header.css">
<link rel="stylesheet" href="/css/cabinet.css">
<link rel="stylesheet" href="/css/footer.css">

<body>
    <div class="site-container">

        <?php require_once('../partials/header.php') ?>

        <main>
            <section class="cabinet hero">

                <div class="hero__bg">
                    <div class="container cabinet__container">
                        <button class="add-order-btn">Добавить заявку на ремонт</button>
                        <pre>
                            <?php
                                print_r($_SESSION);
                            ?>
                        </pre>
                    </div> 
                </div>
                
            </section>
        </main>

        <?php require_once('../partials/footer.php'); ?>

    </div>

    <script src="/js/global.js"></script>
    <script src="/js/functions.js"></script>
    <script src="/js/cabinet.js"></script>
    
</body>