<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="mystyle.css"/>
        <meta charset="UTF-8">
        <title>Welcome!</title>
    </head>
    <body>
        <header>
            <p>
                <a href="index.php">Главная</a>
                <a href="registration.php">Зарегистрироваться</a>
                <a href="feedback.php">Отзывы</a>
            </p>
        </header>

        <?php
        if (isset($_POST["submit"])) {

            include 'password_validator.php';
            if (!$is_ok) {
                exit();
            }

            $file = fopen("data.csv", "a+");
            // searching user in database
            while ($file_content = fgetcsv($file)) {
                if (strcmp($file_content[0], $_POST["email"]) == 0) {
                    echo '<h3 class="hint"> Вы уже зарегистрированы! </h3>';
                    exit();
                }
            }
            // addition
            $list = array(
                array($_POST["email"], $_POST["password"], $_POST["subscribe"], $_POST["gender"])
            );
            foreach ($list as $fields) {
                fputcsv($file, $fields);
            }

            fclose($file);
            echo '<h3 class="notification">Регистрация прошла успешно</h3>';
        }
        ?>
    </body>
</html>
