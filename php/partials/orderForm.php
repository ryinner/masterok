<form class="form form__order" id="add-order-form" autocomplete="off">
    
    <h3 class="form__title orange-text">Создать заявку</h3>

    <div class="form__input">
        <input id="address" name="address" type="text" class="form__field" autocomplete="off" />
        <label class="form__label">Адрес помещения</label>
    </div>

    <div class="form__input">
        <textarea class="form__description" name="description" id="description" placeholder="Введите описание" 
            rows="10"></textarea>
    </div>

    <div class="form__input">
        <select class="form__categories" size="1" name="category" id="category">
            <?php
                $sql = "SELECT DISTINCT `category` FROM orders";
                $query = $connect -> query($sql);
                $result = $query -> fetchAll(PDO::FETCH_COLUMN);  

                for ($i=0; $i < count($result); $i++) { 
                    echo '<option value="'. $result[$i] .'">'. $result[$i] .'</option>';
                }
            ?>
        </select>
    </div>

    <div class="form__input">
        <input id="max_price" name="max_price" type="text" class="form__field" autocomplete="off" />
        <label class="form__label">Максимальная цена ремонта</label>
    </div>

    <div class="form__input form__input_file">
        <span class="form__text">Прикрепите изображение:</span>
        <input type="file" name="uploadFile" id="uploadFile">
    </div>

    <button type="submit" class="add-order-btn">Создать</button>

</form>