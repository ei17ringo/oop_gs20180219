<?php
// クラス名：Car
class Car{
  // プロパティ（クラス内でオブジェクトの要素を表すもの）
  // 時速の値を保持するプロパティ
  private $speed;

  //アクセス修飾子
  //public クラス内、クラス外どこからでもアクセス可能
  //private 同じクラス内からのみアクセス可能
  //protected 同じクラス、及び子クラスからアクセス可能

  // カプセル化：プロパティに直接アクセスできないようにし、プロパティの値を処理しやすいように保つこと
  //セッター：プロパティに値を代入。set+プロパティ名で表される
  function setSpeed($jisoku){
    if ($jisoku < 0){
      $this->speed = 60;
    }else{
      $this->speed = $jisoku;
    }

  }

  //ゲッター：プロパティから値を取得。get+プロパティ名で表される
  function getSpeed(){
    return $this->speed."km/h";
  }

  // メソッド（オブジェクトが行える処理を関数の形で記述するもの）
  function start(){
    // エンジンをかける
    echo "エンジンを掛けました<br>";
  }

  function run(){
    // $this 疑似変数...自分のオブジェクト（このクラス）
    echo "走り出しました<br>";
    $this->showSpeed();
  }

  function showSpeed(){
    echo "時速".$this->getSpeed()."ではしってます<br>";
  }

  function stop(){
    // ブレーキをかける
    echo "ブレーキを掛けて車を止めました<br>";
  }
}


// インスタンス化…クラスを指定してオブジェクトを生成すること
$car1 = new Car();
// $car1->speed = 150;
$car1->setSpeed(-100);
echo "Car1の時速<br>";
// echo $car1->speed;
echo $car1->getSpeed();
echo "<br>";

$car2 = new Car();
$car2->speed = 80;
echo "Car2の時速<br>";
echo $car2->speed;
echo "<br>";


$car1->start();
$car1->run();
$car1->stop();

?>