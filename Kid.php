<?php
// 次の「Kidクラス」を作ってください。

// プロパティ：名前($name)、性別($gender)
// メソッド：showName()
// 男なら「○○くん」、女なら「○○ちゃん」を返す処理を行う
// 名前プロパティの初期値は「しんのすけ」、性別プロパティの初期値は「boy」にすること
// プロパティのゲッター・セッターメソッドを用意し、メソッド経由でプロパティにアクセスできるようにすること
// オブジェクトからプロパティ値を設定し、showNameメソッドを呼び出して出力すること

class Kid{
  private $name;
  private $gender;

  function __construct()
  {
    $this->name = "しんのすけ";
    $this->gender = "boy";
  }

  function setName($namae){
    $this->name = $namae;
  }

  function getName(){
    return $this->name;
  }

  function setGender($seibetsu){
    $this->gender = $seibetsu;
  }

  function getGender(){
    return $this->gender;
  }

  function showName(){

    if ($this->gender == "boy"){
      $displayName = $this->name."くん";
    }else{
      $displayName = $this->name."ちゃん";
    }

    return $displayName;

  }

}

$kid1 = new Kid();

echo $kid1->showName();
echo '<br>';

$kid2 = new Kid();
$kid2->setName("ひまわり");
$kid2->setGender("girl");

echo $kid2->showName();
?>