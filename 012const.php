<?php


class Math{
	const pai = 3.14;

	public function yuanzhijing($r){
		return 2*self::pai*$r;
	}
}


$math = new Math();

echo $math::pai;

//echo $math->yuanzhijing(10);



