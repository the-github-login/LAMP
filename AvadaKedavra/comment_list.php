<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="mystyle.css"/>
        <meta charset="UTF-8">
        <title>Список</title>
    </head>
    <body>
        <header>
            <p>
                <a href="index.php">Главная</a>
                <a href="registration.php">Зарегистрироваться</a>
                <a href="feedback.php">Отзывы</a>
            </p>
        </header>
        
        <h3 class="notification">Наши отзывы:</h3>
        
        <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL);    
        
            $file = fopen("feedback.csv", "r");
            $string = "";
            while ($list = fgetcsv($file)) {
                foreach ($list as $field) {
                    $string.=$field;
                    for ($space = 0; $space < 30-strlen($field); $space++) {
                        $string.=" ";
                    }
                }
                echo '<pre><p id="comment">'.$string.'</p></pre><br>';
                $string = "";
            }
        ?>
    </body>
</html>
