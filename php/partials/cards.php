<section class="cards">
    <div class="container">
        <h2 class="cards__title">Последние заявки на ремонт</h2>
        <div class="cards__container">
        <?php
            $sql = "SELECT timestamp, address, category, before_image, after_image  
            FROM orders o INNER JOIN categories c ON o.category_id = c.id  WHERE status = 'отремонтированно' ORDER BY timestamp DESC LIMIT 4";
            $query = $connect -> query($sql);
            $result = $query -> fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $key => $value) {
                echo '
                    <div class="card">   
                        <h4 class="card__text card__text_timestamp">' . $result[$key]["timestamp"] . '</h4>
                        <h3 class="card__text card__text_address">' . $result[$key]["address"] . '</h3>
                        <h4 class="card__text card__text_category">' . $result[$key]["category"] . '</h4>
                        <div class="images__container">
                            <img class="card__image move-image" src="' . $result[$key]["before_image"] . '" alt="картинка не пришла с бд :(">
                            <img class="card__image card__image_hidden" src="' . $result[$key]["after_image"] . '" alt="картинка не пришла с бд :)">
                        </div>                                    
                    </div>
                ';
            }
        ?>
        </div>
    </div>                
</section>