<?php
class Router {

    private $routes; //массив, в котором будут храниться маршруты

    public function __construct ()
    {
         $routesPath = ROOT. "/config/routes.php"; //путь к файлу с маршрутами и к коренной папке
         $this->routes = include($routesPath); //присвоение свойству routes массив, который ханится в файле rotes.php при помощи метода include

    }

//метод run: получить строку запроса

//проверить наличие такого запроса в rotes.php

//если есть совпадение, определить какой контроллер и action обрабатывают запрос

//подключить файл класса контроллера

//создать объект, вызвать метод (action)
    public function run () //принимает отправления от фронт контроллера
    {
         echo "Class Router, method run";
    }

}




?>