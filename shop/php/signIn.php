<?php
require "db.php";
require "index.php";

$data = $_POST;
if( isset($data['signIn']) ) {
    $errors = array();
    $user =  R::findOne('users', 'email = ?', array($data['email']));
    if ( $user ) {
        if ( password_verify($data['password'], $user->password)) {
            //TODO: сделать приветствие
            echo  $user["name"].", "."привет";
        } else {
            $errors[] = 'Неверно введен пароль или логин!';
        }
    } else {
        $errors[] = 'Пользователь с таким логином не найден!';
    }

    if ( ! empty($errors) ) {
        //TODO: выводить ошибки
//        echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }

}