<?php


/**
 * Class Math
 */
abstract class Math{
	const pai = 3.14;

	// 计算周长
	public function yuanzhijing($r){
		return 2*self::pai*$r;
	}

	// 计算面积
	abstract protected function mianji($r);

	// 计算正方形面积
//	abstract public function Zmianji($r);

}

class MyMath extends Math{
	public function mianji($r){
		return self::pai*$r*$r;
	}
}

// 抽象类不能实例化
//$a = new Math();

$myMath = new MyMath();
echo $myMath->mianji(10);


