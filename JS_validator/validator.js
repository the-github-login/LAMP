function validateForm() {
    var password = document.forms["regForm"]["password"].value;
    
    var rule1 = new RegExp("[a-z]+");
    var rule2 = new RegExp("[A-Z]+");
    var rule3 = new RegExp("[0-9]+");
    var rule4 = new RegExp("^[a-zA-Z0-9]+$");
    var rule5 = new RegExp("^[a-zA-Z0-9]{6,11}$");
    
    var message = new Array("Пароль должен содержать хотя бы одну строчную латинскую букву.",
                            "Пароль должен содержать хотя бы одну прописную латинскую букву.",
                            "Пароль должен содержать хотя бы одну цифру.",
                            "Пароль должен содержать только латинские буквы и цифры.",
                            "Длина пароля должна быть в пределах от 6 до 11 символов."
    );
    
    if (!rule1.test(password)) {
        alert(message[0]);
    } else if (!rule2.test(password)) {
        alert(message[1]);
    } else if (!rule3.test(password)) {
        alert(message[2]);
    } else if (!rule4.test(password)) {
        alert(message[3]);
    } else if (!rule5.test(password)) {
        alert(message[4]);
    } else {
        alert("Регистрация прошла успешно!");
    }
}