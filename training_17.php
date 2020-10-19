<?php

//phpの型
$string = "aaa";
$integer = 111;
$boolean = true;
$array = [
  "key" => "value",
];

//アクセス修飾子
class Super {
  protected function protectedFunc(){
    echo "Pretected\n";
  }
  private function privateFunc(){
    echo "Private\n";
  }
  public function publicFunc(){
    echo "Public\n";
  }
}

$super = new Super;
//$super->protectedFunc(); エラー
//$super->privateFunc(); エラー
$super->publicFunc();

?>