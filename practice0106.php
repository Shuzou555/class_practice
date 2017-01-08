<?php

//演習問題２
//Robotクラスをインスタンス化（オブジェクトを生成）
$robot = new Robot();

// 各メソッドに値を設定
// $robot->name 'トランスポート';  エラーが発生する
// $robot->setName('ドラえもん');
// $robot->setFood('どら焼き');



// 初期値を出力
echo '初期値の名前：' . $robot->getName() . '<br>';
echo '初期値の食べ物：' . $robot->getFood() . '<br>';

$robot->setName('ドラ・ザ・キッド');
$robot->setFood('ケチャップとマスタードをかけたドラ焼き');
$robot->greeting();
//挨拶文を表示
$robot->greeting();

echo '名前：' . $robot->getName() . '<br>';
echo '食べ物：' . $robot->getFood() . '<br>';



echo "<br>"."<br>";

//演習問題１
class Robot{
	//プロバディ追加
	private $name;
	private $food;

	function __construct(){
		$this->name = 'ドラえもん';
    	$this->food = 'どら焼き';
   
  }

//nameプロパティに値を設定するメソッド

  public function setName($namae){
    $this->name = $namae;
  }

  // nameプロパティのゲッターメソッド追加
  public function getName(){
    return $this->name;
  }


// foodプロパティに値を設定するメソッド
  public function setFood($tabemono){
    $this->food = $tabemono;
  }

   // foodプロパティのゲッターメソッド追加
  public function getFood(){
    return $this->food;
  }




  private function talk(){
    echo 'こんにちは、ボクの名前は' . $this->name . 'です<br>';
  }
  //$this->nameで一つの変数なのでnameは＄はいらない

  private function eat(){
    echo '好きな食べ物は' . $this->food .'です<br>';
  }
  
  public function greeting(){
    $this->talk();
    $this->eat();
  }




}



echo "<br>"."<br>";


//$this->showSpeed();
//$thisはこのCarクラスのこと
//CarクラスのshowSpeedを呼び出す

?>