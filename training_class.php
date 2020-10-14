<?php

Class Shop{
  //プロパティの設定
  public $name;
  public $price;
  //静的変数
  public static $tax = 0.1;
  //コンストラクタ
  public function __construct(){
    echo "construct called\n";
  }
  //デストラクタ
  public function __destruct(){
    echo "destruct called\n";
  }
  //クラスメソッドの設定
  public static function cls(){
    echo "いらっしゃいませ";
  }
  //インスタンスメソッドの設定
  public function sayItem(){
    echo "商品: ".$this->name ." 値段: ".$this->price * (1 + Shop::$tax)."円";
  }
}

//インスタンス生成
$water = new Shop();
$water->name = "水";
$water->price = 100;

$tea = new Shop();
$tea->name = "お茶";
$tea->price = 150;

//クラスメソッド呼び出し
Shop::cls();
echo "\n";
//インスタンスメソッド呼び出し
$water->sayItem();
echo "\n";
//デストラクト呼び出し
$water = null;
$tea->sayItem();
echo "\n";

//静的変数を参照
$tax = Shop::$tax;
echo $tax."\n";

//継承
Class Present extends Shop{
  //独自メソッド
  function sayPresent(){
    echo "水とお茶を買うと".$this->name ."をプレゼント";
  }
}

$pan = new Present();
$pan->name = "パン";
$pan->price = 120;

$pan->sayItem();
echo "\n";
$pan->sayPresent();

echo "\n";

?>