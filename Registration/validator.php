<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <style type="text/css"></style>
        <title> Message </title>
    </head>
    <body>
        <?php

        function is_valid_password($password) {
            $pattern = "/[a-zA-Z0-9]{6,14}/";
            return preg_match($pattern, $password);
        }

        function email_search($email, $data) {
            for ($i = 0; $i < count($data); $i++) {
                if (strcmp($data[$i][0], $email) == 0) {
                    return TRUE;
                }
            }
            return FALSE;
        }

        //email
        $user_email = filter_input(INPUT_POST, "email");
        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            echo "Введите корректный email\n";
            exit();
        }

        //password
        $user_pass = filter_input(INPUT_POST, "pass");
        if (is_valid_password($user_pass) == false) {
            echo "Проверьте правильность введённого пароля:<br> ";
            echo "1) пароль может содержать цифры;<br>";
            echo "2) пароль может содержать прописные и строчные латиниские буквы;<br>";
            echo "3) пароль должен содержать от 6 до 14 символов.";

            exit();
        }

        //subscibe
        $user_subscr = isset($_POST["subscribe"]) ? "yes" : "no";

        //gender
        $user_gender = $_POST["gender"];
        if (!isset($user_gender)) {
            echo "Все поля должны заполненными.<br>";
            echo "Перепроверьте форму регистрации ещё раз.";

            exit();
        }

        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        $file = fopen("data.csv", "a+");

        // searching user in database
        while ($file_content = fgetcsv($file)) {
            if (strcmp($file_content[0], $user_email) == 0) {
                echo "<h3> Вы уже зарегистрированы! </h3>";
                exit();
            }
        }

        // addition
        $list = array(
            array($user_email, $user_pass, $user_subscr, $user_gender)
        );
        foreach ($list as $fields) {
            fputcsv($file, $fields);
        }

        fclose($file);
        ?>  

        <h2>Регистрация прошла успешно!</h2>

    </body>
</html>