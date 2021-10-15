<div class="forms-background" id="forms-background">

    <form class="form form__login" id="login-form" autocomplete="off">
        <h3 class="form__title orange-text">Войти в аккаунт</h3>
        <div class="form__input">
            <input id="login" type="text" class="form__field" autocomplete="off" />
            <label class="form__label">Введите логин</label>
        </div>
        <div class="alert">Только английские буквы, точка и нижнее подчеркивание. <br> Поле должно быть
            заполнено
        </div>

        <div class="form__input">
            <input id="password" type="password" class="form__field" autocomplete="off" />
            <label class="form__label">Введите пароль</label>
        </div>
        <div class="alert">Поле должно быть заполнено. Минимальное количество символов 8, максимальное - 72,
            разрешены любые буквы,
            цифры и спецсимволы.</div>

        <div class="form__action">
            <button type="submit" class="form__action-button">Войти</button>
        </div>

        <h3 class="form__title form__open-reg-form orange-text" id="regFormButton">Впервые тут?
            Зарегистрироваться</h3>
    </form>

    <form class="form form__register" id="register-form" method="post" novalidate>
        <h3 class="form__title orange-text">Зарегистрироваться</h3>

        <div class="form__input">
            <input name="name" id="name" type="text" class="form__field" autocomplete="off" />
            <label class="form__label">Введите ваше ФИО</label>
        </div>
        <div class="alert">Только русские буквы, пробел и дефис. <br> Поле должно быть заполнено</div>

        <div class="form__input">
            <input name="login" id="reg-login" type="text" class="form__field" autocomplete="off" />
            <label class="form__label">Введите логин</label>
        </div>
        <div class="alert">Только английские буквы, точка и нижнее подчеркивание. <br> Поле должно быть
            заполнено</div>

        <div class="form__input">
            <input name="email" id="email" type="text" class="form__field" autocomplete="off" />
            <label class="form__label">Введите вашу электронную почту</label>
        </div>
        <div class="alert">Формат адреса электронной почты: <br> xx-xx_x.x@xxx.xxx, дефис и нижнее
            подчеркивание разрешены в первых двух разрешены до символа точки после символа "@", точка только
            до символа "@". Поле должно быть заполнено</div>

        <div class="form__input">
            <input name="password" id="reg-password" type="password" class="form__field"
                autocomplete="off" />
            <label class="form__label">Введите пароль</label>
        </div>
        <div class="alert">Поле должно быть заполнено. Минимальное количество символов 8, максимальное - 72,
            разрешены любые буквы,
            цифры и спецсимволы.</div>

        <div class="form__input">
            <input name="password_conf" id="password-conf" type="password" class="form__field"
                autocomplete="off" />
            <label class="form__label">Повторите ваш пароль</label>
        </div>
        <div class="alert">Пароли должны совпадать. Поле должно быть заполнено</div>

        <div class="form__input form__input_checkbox">
            <input name="confirmation" id="dataConfirmation" type="checkbox" />
            <label class="form__label_checkbox">Согласие на обработку персональных данных</label>
        </div>
        <div class="alert">Невозможно продолжить без подтверждения согласия на обработку данных</div>

        <div class="form__action">
            <button type="submit" class="form__action-button">Отправить</button>
        </div>
    </form>
</div>