<?php

//phpの型
$string = "aaa";
$integer = 111;
$boolean = true;
$array = [
  "key" => "value",
];

//----------------------------

//アクセス修飾子
class Super {
  protected function protectedFunc(){
    echo "Protected\n";
  }
  private function privateFunc(){
    echo "Private\n";
  }
  public function publicFunc(){
    echo "Public\n";
  }

  public function usePrivate(){
    $this->privateFunc();
  }
  public function useProtected(){
    $this->protectedFunc();
  }
}

$super = new Super;
//$super->protectedFunc(); エラー
//$super->privateFunc(); エラー
$super->publicFunc();
$super->usePrivate();
$super->useProtected();


//継承クラス
class Sub extends Super{
  public function publicFunc(){
    parent::protectedFunc();
  }
  // function foo(){
  //   $this->protectedFunc();
  // }
}

$sub = new Sub();
$sub->publicFunc();
//$sub->protectedFunc();エラー
//$sub->foo();

//-------------------------------------
//名前空間

require_once "namespace_1.php";
require_once "namespace_2.php";

//echo sayGreeting();エラー
$test = new aaa\Test();
$test->sayGreeting();

$test = new bbb\Test();
$test->sayGreeting();

?>