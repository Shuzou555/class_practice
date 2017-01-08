<?php

$kid = new kid();

// 初期値を出力
echo '初期値の名前：' . $kid->getName() . '<br>';
echo '初期値の性別：' . $kid->getSex() . '<br>';
echo '初期値の年齢：' . $kid->getAge() . '<br>';

$kid->setName('のび太');
$kid->setSex('boy');
$kid->setAge('17');


echo $kid->showName();

class Kid{

	private $name;
	private $sex;
  private $age;

  function __construct(){
    $this->name = 'Seed';
    $this->sex = 'boy';
    $this->age = '10';

   
  }
 
   public function getName(){
    return $this->name;
  }

  public function setName($namae){
    $this->name = $namae;
  }

  public function getSex(){
    return $this->sex;
  }

  public function setSex($seibetsu){
     $this->sex = $seibetsu;
   }

  public function getAge(){
    return $this->age;
  }

  public function setAge($nenrei){
    $this->age = $nenrei;
  }


  // 性別によって名前の語尾を判定するメソッド
  public function showName(){
    if (($this->sex == 'boy') &&($this->age >= 12)) {
      return $this->name . '君';

    } elseif (($this->sex == 'boy') &&($this->age <= 11)) {
      return $this->name . 'くん';

    } elseif (($this->sex == 'girl') &&($this->age >= 12)) {
      return $this->name . 'さん';

    } elseif (($this->sex == 'girl') &&($this->age <= 11)) {
      return $this->name . 'ちゃん';

    } else {
      return $this->name .'の性別が不明です';
    }
    
  }
  
     
  

}

?>