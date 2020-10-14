<?php

//組み込み関数使ってみる
$string = "asdfghjklqwertyuiop";

$result = substr($string, 3, 5);
echo $result;

echo "\n";

$replace = str_replace("asdf", "aaaa", $string);
echo $replace;

echo "\n";

$space = "      aaaaa aa      ";
$trimed = trim($space);
echo $trimed

?>
