<?php
require "db.php";
require "index.php";

$data = $_POST;
if (isset($data["signUp"])) {
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
        $user = R::dispense('users');
        $user->name = $data['name'];
        $user->secondName = $data['secondName'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        R::store($user);
    } else {
        //TODO: выводить ошибки
        // echo '<div style="color: red;">' . array_shift($errors) . '</div><hr>';
    }
}