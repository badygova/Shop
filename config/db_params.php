<?php
// Массив с параметрами подключения к базе данных
function getInfo()
{
    $arr = array(
        'host' => 'localhost',
        'dbname' => 'lashop',
        'user' => 'postgres',
        'password' => '123',
    );
    return $arr;
}