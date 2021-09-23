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
         <div class="forms-background" id="forms-background">

            <form class="form form__login" id="login-form" autocomplete="off" novalidate>
               <h3 class="form__title orange-text">Войти в аккаунт</h3>
               <div class="form__input">
                  <input id="login" type="text" class="form__field" autocomplete="off" />
                  <label class="form__label">Введите логин</label>
               </div>
               <div class="alert">Только английские буквы, точка и нижнее подчеркивание. <br> Поле должно быть заполнено
               </div>

               <div class="form__input">
                  <input id="password" type="password" class="form__field" autocomplete="off" />
                  <label class="form__label">Введите пароль</label>
               </div>
               <div class="alert">Поле должно быть заполнено. Минимальное количество символов 8, максимальное - 72, разрешены любые буквы,
                  цифры и спецсимволы.</div>

               <div class="form__action">
                  <button type="submit" class="form__action-button">Войти</button>
               </div>

               <h3 class="form__title form__open-reg-form orange-text" id="regFormButton">Впервые тут? Зарегистрироваться</h3>
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
                  <input name="password" id="reg-password" type="password" class="form__field" autocomplete="off" />
                  <label class="form__label">Введите пароль</label>
               </div>
               <div class="alert">Поле должно быть заполнено. Минимальное количество символов 8, максимальное - 72, разрешены любые буквы,
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