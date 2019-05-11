<?php
/**
 * Created by PhpStorm.
 * User: Алия
 * Date: 18.04.2019
 * Time: 13:29
 */

// FRONT CONTROLLER
// Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
// Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');

// Вызов Router
$router = new Router();
$router->run();