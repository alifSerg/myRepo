<?php
//Информационный раздел,состоит:
//1) Список записей
//2) Просмотр одной записи

// FRONT COTROLLER

// 1. Общие настройки

ini_set('display_errors', 1); //распознавание ошибок на этапе разработки
error_reporting(E_ALL);

// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php'); //подключение файла

// 3. Установка соединения с БД


// 4. Вызор Router

$router = new Router();
$router->run();
*/
?>