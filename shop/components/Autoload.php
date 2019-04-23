<?php
/**
 * Created by PhpStorm.
 * User: Алия
 * Date: 18.04.2019
 * Time: 13:31
 */
/**
 * Функция __autoload для автоматического подключения классов
 */
spl_autoload_register(function ($class_name) {
    include_once $class_name . '.php';
});