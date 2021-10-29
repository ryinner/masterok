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
<link rel="stylesheet" href="/css/forms.css">
<link rel="stylesheet" href="/css/cards.css">
<link rel="stylesheet" href="/css/alert.css">
<link rel="stylesheet" href="/css/footer.css">

<body class="cabinet__body">
    <div class="site-container">

        <?php 
            require_once('../partials/header.php');
            require_once('../partials/alert.php');        
        ?>

        <main>
            <section class="cabinet hero">

                <div class="hero__bg">
                    <div class="container cabinet__container">
                        <div class="cabinet__side cabinet__side_left">
                            <h2 class="cabinet__title_h2">Ваши заявки</h2>
                            <div class="orders__container">
                                <?php
                                
                                    $sql = "SELECT `id`, `timestamp`, `address`, `description`, `category`, `max_price`, `status`  
                                    FROM `orders` WHERE `user_id` = :u ORDER BY `timestamp` DESC";
                                    $query = $connect -> prepare($sql);
                                    $query -> execute(["u" => $_SESSION['id']]);
                                    $result = $query -> fetchAll(PDO::FETCH_ASSOC);
                        
                                    foreach ($result as $key => $value) {
                                        echo '
                                            <div id="' . $result[$key]["id"] . '" class="card card__cabinet">   
                                                <h4 class="card__text card__text_cabinet card__text_timestamp">' . $result[$key]["timestamp"] . '</h4>
                                                <h3 class="card__text card__text_cabinet">' . $result[$key]["address"] . '</h3>
                                                <h4 class="card__text card__text_cabinet card__text_category">' . $result[$key]["category_id"] . '</h4>
                                                <h4 class="card__text card__text_cabinet card__text_description">' . $result[$key]["description"] . '</h4>
                                                <h4 class="card__text card__text_cabinet card__text_max-price">' . $result[$key]["max_price"] . '</h4>
                                                <h4 class="card__text card__text_cabinet card__text_status">' . $result[$key]["status"] . '</h4>   
                                                <button class="card__btn alert__btn">Удалить</button>                      
                                            </div>
                                        ';
                                    }
                                
                                ?>
                            </div>
                        </div>
                        <div class="cabinet__side cabinet__side_right">
                            <?php require_once('../partials/orderForm.php') ?>
                        </div>
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