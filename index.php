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
</head>

<body>

    <div class="site-container">

        <?php require_once('php/partials/header.php') ?>

        <main>

            <section class="hero">

                <div class="hero__bg">

                    <div class="container hero__container">
                        <div>
                            <h1 class="hero__title_main">
                                Передовые технологии <br><span class="orange-text">в сфере ремонта.</span>
                            </h1>
                        </div>

                        <h3 class="hero__title">
                            Мы используем современные технологии и
                            стройматериалы, <br> что позволяет нам обеспечивать
                            семьи жильем, <br> которое они и заслуживают.
                        </h3>
                    </div>
                </div>

            </section>

            <?php require_once("php/partials/forms.php") ?>            

            <section class="cards">
                <div class="container">
                    <div class="card">

                        <img src="img/orders/1595_nachalsya-remont-v-bibliotek.jpg" alt="">
                        
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