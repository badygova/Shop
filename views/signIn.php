<?php
require "db.php";

$data = $_POST;
if( isset($data['email'])&&isset($data['password'])) {
    $errors = array();
    $user =  R::findOne('users', 'email = ?', array($data['email']));
    if ( $user ) {
        if ( password_verify($data['password'], $user->password)) {
            //TODO: сделать приветствие
            require "authorized.php";
            echo  $user["username"].", "."привет";
        } else {
            require "index.php";
            $errors[] = 'Неверно введен пароль или логин!';
        }
    } else {
        $errors[] = 'Пользователь с таким логином не найден!';
    }

    if (empty($errors) ) {
        //TODO: выводить ошибки
//        echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
}