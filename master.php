<?php 
    require_once('php/db.php');
    if ($_SESSION['login'] !== 'admin') {
        header('Location: /index.php'); 
    }
?>

<title>Masterok | Cabinet</title>

<link rel="icon" href="/img/favicon.ico">

<link rel="stylesheet" href="/css/global.css">
<link rel="stylesheet" href="/css/vendor.css">
<link rel="stylesheet" href="/css/header.css">
<link rel="stylesheet" href="/css/master.css">
<link rel="stylesheet" href="/css/forms.css">
<link rel="stylesheet" href="/css/cards.css">
<link rel="stylesheet" href="/css/alert.css">
<link rel="stylesheet" href="/css/footer.css">
<link rel="stylesheet" href="/css/master.css">
<link rel="stylesheet" href="/css/cabinet.css">

<body id="body" class="cabinet__body">
    <div class="site-container">

        <?php 
            require_once('php/partials/header.php');
            require_once('php/partials/alert.php');        
        ?>

        <main>
            <section class="cabinet hero">

                <div class="hero__bg">
                    <div class="container cabinet__container master__container">
                        <h2 class="cabinet__title_h2">Добавить категорию</h2>
                        <form id="add__category" class="form-add-category">
                            <h3 class="form__title orange-text">Создание</h3>
                            <div class="form__input">
                                <input name="category" id="addCategory" type="text" class="form__field" autocomplete="off" />
                                <label class="form__label">Название категории</label>
                            </div>
                            <div class="form__action">
                                <button type="submit" class="form__action-button">Отправить</button>
                            </div>
                        </form>

                        <h2 class="cabinet__title_h2">Удалить категорию</h2>
                        <form id="remove__category" class="form-add-category">
                            <h3 class="form__title orange-text">Удаление</h3>
                            <div class="form__input">
                                <select class="form__categories" size="1" name="category" id="removeCategory">
                                    <?php
                                        $sql = "SELECT DISTINCT `category` FROM categories";
                                        $query = $connect -> query($sql);
                                        $result = $query -> fetchAll(PDO::FETCH_COLUMN);  

                                        for ($i=0; $i < count($result); $i++) { 
                                            echo '<option value="'. $result[$i] .'">'. $result[$i] .'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form__action">
                                <button type="submit" class="form__action-button">Отправить</button>
                            </div>
                        </form>

                        <h2 class="cabinet__title_h2">Все заявки</h2>
                        <?php
                        
                            $sql = "SELECT * FROM orders o INNER JOIN categories c ON o.category_id = c.id";
                            $query = $connect -> prepare($sql);
                            $query -> execute();
                            $result = $query -> fetchAll(PDO::FETCH_ASSOC);
                
                            foreach ($result as $key => $value) {
                                echo '
                                    <div id="' . $result[$key]["id"] . '" class="card card__cabinet">   
                                        <h4 class="card__text card__text_cabinet card__text_timestamp">' . $result[$key]["timestamp"] . '</h4>
                                        <h3 class="card__text card__text_cabinet">' . $result[$key]["address"] . '</h3>
                                        <h4 class="card__text card__text_cabinet card__text_category">' . $result[$key]["category"] . '</h4>
                                        <h4 class="card__text card__text_cabinet card__text_description">' . $result[$key]["description"] . '</h4>
                                        <h4 class="card__text card__text_cabinet card__text_max-price">' . $result[$key]["max_price"] . '</h4>
                                        <h4 class="card__text card__text_cabinet card__text_status">' . $result[$key]["status"] . '</h4>';
                                        if ($result[$key]["status"] == 'Новая') {
                                            echo '<div class="btn__container btn__container_card">
                                                <button id="toFinishedBtn" class="alert__btn">Сменить статус на "Отремонтированно"</button>
                                                <button id="toInWorkBtn" class="alert__btn">Сменить статус на "Ремонтируется"</button>
                                            </div>';
                                        }                                        
                                    echo '</div>
                                ';
                            }
                        
                        ?>
                        </div>
                        
                    </div> 
                </div>
                
            </section>
        </main>

        <?php 
            require_once('php/partials/footer.php'); 
        ?>

    </div>

    <script src="/js/global.js"></script>
    <script src="/js/functions.js"></script>
    <script src="/js/master.js"></script>
    
</body>