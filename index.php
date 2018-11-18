<?php
// regular expressions
// preg_match, preg_replace

$string = "ученик сидит за партой";
$pattern = "/ученик/";

$result = preg_match ($pattern, $string);

//preg_match ищет совпадения,принимает 2 параметра, возвращает true/false

var_dump ($result);

echo $string;
?>

