<?php

function oddEven($num){
  if($num % 2 == 0){
    echo "偶数\n";
  }else{
    echo "奇数\n";
  }
}

oddEven(-4);

function square($num){
  return $num**2;
}

echo square(7);

?>