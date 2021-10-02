<?php 
   require_once('php/db.php');   
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">
    <title>Demo exam</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cards.css">
</head>

<body>

    <div class="site-container">

        <?php require_once('php/partials/header.php') ?>

        <main>

            <?php 

                require_once("php/partials/hero.php");
                require_once("php/partials/forms.php");
            
            ?>            

            <section class="cards">
                <div class="container">
                    <h2 class="cards__title">Последние заявки на ремонт</h2>
                    <div class="cards__container">
                    <?php
                        $sql = "SELECT orders.id, orders.timestamp, orders.address, orders.status, orders.category, images.path
                        AS image FROM `orders` JOIN `images` ON orders.id = images.order_id WHERE `status` = 'отремонтированно' 
                        ORDER BY `timestamp` DESC LIMIT 8";
                        $query = $connect -> query($sql);
                        $result = $query -> fetchAll(PDO::FETCH_ASSOC);                        

                        for ($i=0; $i < count($result); $i++) { 
                            $next_array = $i + 1;
                            array_push($result[$i], $result[$next_array]['image']);
                            unset($result[$next_array]);
                            $result = array_values($result);
                        }

                        foreach ($result as $key => $value) {
                            echo '
                                <div class="card">   
                                    <h4 class="card__text card__text_timestamp">' . $result[$key]["timestamp"] . '</h4>
                                    <h3 class="card__text card__text_address">' . $result[$key]["address"] . '</h3>
                                    <h4 class="card__text card__text_category">' . $result[$key]["category"] . '</h4>
                                    <div class="images__container">
                                        <img class="card__image move-image" src="' . $result[$key]["0"] . '" alt="картинка не пришла с бд :(">
                                        <img class="card__image card__image_hidden" src="' . $result[$key]["image"] . '" alt="картинка не пришла с бд :)">
                                    </div>                                    
                                </div>
                            ';
                        }
                    ?>
                    </div>
                </div>
                
            </section>
            

        </main>

        <footer class="footer">
            <div class="container footer__container">



            </div>
        </footer>

    </div>

    <script src="js/global.js"></script>
    <script src="js/main.js"></script>
</body>

</html>