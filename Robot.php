<?php

// Robotというクラスを作成してください
// 名前（$name)プロパティ、食べ物($food)プロパティを作成してください。（アクセス修飾子はpublicでよい）
class Robot{
  // ここをpublicからprivateに変更し、エラーが出ないようにしてください（セッター記述）
  private $name;
  private $food;

  //コンストラクタで各プロパティの初期値を設定してください
  

  function setName($namae){
    $this->name = $namae;
  }

  function getName(){
    return $this->name;
  }

  function setFood($tabemono){
    $this->food = $tabemono;
  }

  function getFood(){
    return $this->food;
  }


  // 以下のメソッドを作成しましょう
  // talkメソッド：「こんにちは、僕の名前は$nameです」と出力する処理
  // eatメソッド；「好きな食べ物は$foodです」と出力する処理
  function talk(){
    echo "こんにちは、僕の名前は".$this->name."です<br>";
  }

  function eat(){
    echo "好きな食べ物は".$this->food."です<br>";
  }

  // greetingメソッド：talk()メソッドとeat()メソッドを呼び出す処理
  function greeting()
  {
    $this->talk();
    $this->eat();
  }

}

// Robotを使ってインスタンス化
$dora = new Robot();

//インスタンス化したロボットのプロパティにそれぞれ値をセットし、echoで表示してみましょう

// $dora->name = "ドラえもん";
// $dora->food = "どら焼き";
$dora->setName("どらえもん");
$dora->setFood("どら焼き");

// echo $dora->name;
// echo $dora->food;

echo $dora->getName();
echo $dora->getFood();

// ここにtalkメソッド、eatメソッドを呼び出す
$dora->talk();
$dora->eat();

$dora->greeting();

?>