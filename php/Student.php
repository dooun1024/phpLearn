<?php
include 'Human.php';

class Student extends Human {
	var $stuNum;

	public function __construct($name = "", $age = "", $likeEat = "肉", $stuNum = "") {
		parent::__construct($name, $age, $likeEat);
		$this->stuNum = $stuNum;
	}

	public function myJicheng(){
		echo "我继承了爸爸的{$this->konfu}";
	}

	public function eat($food1){
		echo "我喜欢吃{$food1}\n";
	}
}