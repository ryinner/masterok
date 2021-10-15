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
    <title>Masterok | Main page</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cards.css">
</head>

<body id="body">

    <div class="site-container">
        <?php
            require_once("php/partials/header.php") 
        ?>
        <main>
            <?php
                require_once("php/partials/hero.php");
                require_once("php/partials/loginforms.php");
                require_once("php/partials/cards.php");            
            ?>
        </main>
        <?php
            require_once("php/partials/footer.php");          
        ?>
    </div>

    <script src="js/global.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/main.js"></script>
    
</body>

</html>