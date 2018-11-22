<?php
//format: dd-mm-yyyy
$string = "21-11-2015";

//Year 2015,month 11, day 21

$pattern = "/([0-9](2))-([0-9](2))-([0-9](0-4))/";

$replacement = "Year $3, month $2, day $1";

echo preg_replace($pattern, $replacement, $string);

echo "<br>";
//expamle
//Month 11, Day 21, Year; 2015!

$line = "11-21-2015";

$pat = "/([0-9](2))-([0-9](2))-([0-9](4))/";

$repl = "month $3, day $2, year $1";

echo preg_replace($pat, $repl, $line);
die;
/*


//$3 - первая подмаска ([0-9](2)), $2 вторая ([0-9](2)), $1 третья ([0-9](0-4))
//функция preg_replace выполняет посиск по строке $string по регулярному выражению $pattern, если содержимое найдено, производит замену строки $replace
?>
