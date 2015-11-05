<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Список</title>
    </head>
    <body>
        <h2>Список пользователей:</h2>
        
        <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL);    
        
            $file = fopen("data.csv", "r");
            $string = "";
            while ($list = fgetcsv($file)) {
                foreach ($list as $field) {
                    $string.=$field;
                    for ($space = 0; $space < 30-strlen($field); $space++) {
                        $string.=" ";
                    }
                }
                echo '<pre><p>'.$string.'</p></pre><br>';
                $string = "";
                //echo "<br>";
            }
        ?>
    </body>
</html>
