<?php
/*
return array ("news" => "news/index", //action index в newsController
"products" => "product/list", //actionList в productControl
);
*/
/*
return array (
    "news/77" => "news/view",
    "news/15" => "news/view",

    "news" => "news/index", // actionIndex в newsController
);
*/
return array (
    "news/ ([a-z]+)/([0-9]+)" => "news/view/$1/$2",


//    "news/([0-9]+)" => "news/view",

//    "news" => "news/index",
);
?>