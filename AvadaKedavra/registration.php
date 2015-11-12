<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="mystyle.css"/>
        <meta charset="UTF-8">
        <title>Регистрация</title>
    </head>
    <body>
        <header>
            <p>
                <a href="index.php">Главная</a>
                <a href="registration.php">Зарегистрироваться</a>
                <a href="feedback.php">Отзывы</a>
            </p>
        </header>

        <article>
            <h3 class="header"> Регистрация </h3>
            <form class="form_format" action="reg_handler.php" method="POST">
                <p>
                    <span class="field">Почтовый ящик:</span>
                    <input type="email" 
                           name="email" 
                           value="<?php
                           if (isset($_POST["email"])) {
                               echo $_POST["email"];
                           }
                           ?>" 
                           required="" 
                           id="email"/>
                </p>

                <p>
                    <span class="field">Пароль:</span>
                    <input type="password"
                           name="password"
                           value="<?php
                           if (isset($_POST["password"])) {
                               echo $_POST["password"];
                           }
                           ?>" 
                           required="" 
                           id="password"/> <br/>
                </p>

                <p>
                    <span class="field">Пол:</span>
                    <input type="radio"
                           name="gender"
                           value="male" 
                           checked="" 
                           id="gender"/> Мужской
                    <input type="radio"
                           name="gender"
                           value="female" /> Женский
                </p>

                <footer>
                    
                    <p>
                        <span class="news">Подписаться на новости</span>
                        <input type="checkbox"
                               name="subscribe" />
                        
                        <input type="submit"
                               name="submit"
                               value="Зарегистрироваться" 
                               id="submit"/>
                    </p>

                </footer>
            </form>
        </article>

    </body>
</html>
