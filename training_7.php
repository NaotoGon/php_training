<?php

//参照渡し
$a = 1;
$b =& $a;
$a = 5;
echo $b;// 出力5

echo "\n";

$a = array(1, 2, 3);
$b =& $a;
$a[1] = 0;
echo $b[1];
echo "\n";
var_dump($b);//配列の中身が変わっている

//関数の参照渡し
function add (&$number){// 「&」を引数につける
  return ++$number;
}

$a = 1;
$b = add($a);

echo $a;
echo "\n";
echo $b;

?>