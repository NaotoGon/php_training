<?php

//if
$score = 70;
if($score > 80){
  echo "合格";
}else{
  echo "不合格";
}
echo "\n";

//for
$array = [
  "a",
  "b",
  "c",
  "d",
  "e",
];

for($i = 0; $i < 5; $i++){
  echo $array[$i];
}
echo "\n";

//foreach
foreach($array as $i){
  echo $i;
  echo "\n";
}

$array2 = [
  "fruit" => "りんご",
  "car" => "レクサス",
];

foreach($array2 as $key => $value){
  echo $key."といえば".$value."\n";
}

//while
$i = 1;
while ($i <= 5){
  echo $i++."\n";
}

?>