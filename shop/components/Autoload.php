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
function __autoload($class_name)
{
    // Массив папок, в которых могут находиться необходимые классы
    $array_paths = array(
        '/models/',
        '/components/',
        '/controllers/',
    );
    // Проходим по массиву папок
    foreach ($array_paths as $path) {
        // Формируем имя и путь к файлу с классом
        $path = ROOT . $path . $class_name . '.php';
        // Если такой файл существует, подключаем его
        if (is_file($path)) {
            include_once $path;
        }
    }
}