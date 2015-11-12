<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="mystyle.css"/>
        <meta charset="UTF-8">
        <title>Оставить отзыв</title>
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
            <h3 class="header">Оставить отзыв</h3>
            <form class="form_format" action="feedback_handler.php" method="POST">
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
                           id="f_email"/>
                </p>

                <p>
                    <span class="field">Отзыв:</span> <br/>
                    <textarea name="feedback" rows="5" cols="40"></textarea>
                </p>

                <p>
                    <input type="submit"
                           name="submit"
                           value="Оставить" 
                           id="f_submit"/>
                </p>
            </form>

        </article>

    </body>
</html>
