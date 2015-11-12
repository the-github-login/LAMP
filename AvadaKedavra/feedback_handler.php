<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="mystyle.css"/>
        <meta charset="UTF-8">
        <title></title>
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
            ini_set('display_errors', 1);
            error_reporting(E_ALL);

            $user_email = filter_input(INPUT_POST, "email");
            $file = fopen("data.csv", "r+"); //get user database
            $is_registrated = FALSE;
            // searching user in database
            while ($file_content = fgetcsv($file)) {
                if (strcmp($file_content[0], $user_email) == 0) {
                    $is_registrated = TRUE;
                    break;
                }
            }
            
            if (!$is_registrated) {
                echo '<p class="hint"> Вы не зарегистрированы!</p>';
            } else {
                $comments = fopen("feedback.csv", "a+"); //get user feedback
                // addition
                $list = array(
                    array($user_email, $_POST["feedback"])
                );
                foreach ($list as $fields) {
                    fputcsv($comments, $fields);
                }

                echo '<p class="notification"><a href="comment_list.php"> Посмотреть отзывы </a></p>';

                fclose($comments);
            }

            fclose($file);
        }
        ?>
    </body>
</html>
