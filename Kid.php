<?php

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