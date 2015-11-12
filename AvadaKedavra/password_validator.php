<?php
$is_ok = TRUE;
if (isset($_POST["submit"])) {
    $rule1 = "/[a-zA-Z0-9]+/";
    $rule2 = "/[a-zA-Z0-9]{6,}/";
    $rule3 = "/^[a-zA-Z0-9]{6,14}$/";
    $password = $_POST["password"];
    if (!preg_match($rule1, $password)) {
        echo '<p class="hint">Пароль может содержать только латинские буквы и цифры.</p>';
        $is_ok = FALSE;
    } 
    if (!preg_match($rule2, $password)) {
        echo '<p class="hint">Пароль должен содержать не менее 6 символов.</p>';
        $is_ok = FALSE;
    } else if (!preg_match($rule3, $password)) {
        echo '<p class="hint">Пароль должен содержать не более 14 символов.</p>';
        $is_ok = FALSE;
    }
}
?>

