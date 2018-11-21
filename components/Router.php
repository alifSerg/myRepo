<?php
class Router
{

    private $routes; //массив, в котором будут храниться маршруты

    public function __construct()
    {
        $routesPath = ROOT . "/config/routes.php"; //путь к файлу с маршрутами и к коренной папке
        $this->routes = include($routesPath); //присвоение свойству routes массив, который ханится в файле rotes.php при помощи метода include

    }

    private function getURI()
    {
        if (!empty($_SERVER["REQUEST_URI"])) {
            return trim($_SERVER["REQUEST_URI"], "/");
        }
    }

    public function run() //принимает отправления от фронт контроллера
    {

    }
//метод run: получить строку запроса
$uri = $this->getURI();
echo $uri;

//проверить наличие такого запроса в rotes.php
foreach ($this->routes as $uriPattern => $path)
{
echo "<br>$uriPattern -> $path";
}

//Сравнить $uriPattern и $uri
if (preg_match("~$uriPattern~", $uri)) {
   echo '-';
}
//если есть совпадение, определить какой контроллер и action обрабатывают запрос
$segments = explode("/", $path);

$controllerName = array_shift ($segments)."controller";
$controllerName = ucfirst($controllerName);
echo $controllerName;
//ucfirst меняет первую букву на заглавную
$actionName = "action".ucfirst(array_shift($segments));
//подключить файл класса контроллера
$controllerFile = ROOT. "/controllers/".
    $controllerName. ".php";

if (file_exists($controllerFile)) {
    include_once($controllerFile);
}
//создать объект, вызвать метод (action)
$controllerObject = new $controllerName;
$result = $controllerObject->$actionName ();
if ($result !=null) {
    break;
}

}
}




?>