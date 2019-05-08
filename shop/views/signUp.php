<?php
require "db.php";
require "index.php";

$data = $_POST;

if (isset($data["username"]) && isset($data["secondName"]) && isset($data["email"]) && isset($data["password"])) {
    $errors = [];
    if (trim($data['email'] == '')) {
        $errors = "Введите email";
    }
    if (trim($data['password'] == '')) {
        $errors = "Введите пароль ";
    }
    if (R::count('users', "email = ?", array($data['email'])) > 0) {
        $errors[] = 'Пользователь с таким Email уже существует!';
    }
    if (empty($errors)) {
        $name = $data['username'];
        $secondName = $data['secondName'];
        $email = $data['email'];
        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        $user = R::exec("INSERT INTO users(username, secondname, email, password) VALUES 
          ('$name', '$secondName', '$email', '$password')");
       // var_dump($user);


    } else {
        //TODO: выводить ошибки
        // echo '<div style="color: red;">' . array_shift($errors) . '</div><hr>';
    }
}