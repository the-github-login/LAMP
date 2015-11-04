<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="index.css">
        <title> Регистрация </title>
    </head>

    <body>
        <div id="my_diver">
            <h1 id="header"> Регистрация </h1>

            <form action="validator.php" method="POST" autocomplete="on" id="moreBeaty">
                <p>
                    Email:
                    <input type="text" name="email" value="<?php if (isset($_POST["email"])) {echo $_POST["email"];} ?>" id="my_email" /> <br/>
                </p>

                <p>
                    Пароль:
                    <input type="password" name="pass" value="" /> <br/>
                </p>

                <p>
                    Подписаться на новости: 
                    <input type="checkbox" name="subscribe" value="<?php if (isset($_POST["subscribe"])) {echo $_POST["subscribe"];} ?>" /> <br/>
                </p>              

                <p>
                    Ваш пол:
                    <input type="radio" name="gender" value="male" /> M 
                    <input type="radio" name="gender" value="female" /> Ж 
                </p>

                <p>
                    <input 
                        type="submit" 
                        value="Зарегистрироваться" 
                        id="subbutton">
                </p>
            </form>
        </div>
    </body>
</html>
