<?php

Class Db {
    public static  function  getConnection() {
        $paramsPath = ROOT . "/config/db_params.php";
        $params = include ($paramsPath);

        $dsn = "mysql:host={$params["host"]};dbname={$params["dbname"]}";
        $db = new PDO($dsn, params["user"],$params["password"]);
        return $db;
    }
}
//$host = "localhost";
//$dbname = "mvc_site";
//$user = "root";
//$password = " ";
//$db = new PDO ("mysqli:host;dbname=$dbname, $user, $password");

$newsList = array();
?>
