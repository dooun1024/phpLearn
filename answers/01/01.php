<?php
/**
 * Created by PhpStorm.
 * User: Dooun
 * Date: 2018/10/05
 * Time: 16:42
 */

// 最大公约数
$a = rand(1, 20);
$b = rand(1, 20);

echo "a是{$a}\n";
echo "b是{$b}";

//$a = 9;
//$b = 6;

// 获取a和b中比较小的那个数
$smaller = ($a<$b)?$a:$b;

// 循环从两个数种小的那个数到1为止
for ($i =$smaller; $i>0;$i-- ) {
	// 是不是符合公约数
	if ($a % $i == 0 && $b % $i == 0) {
		echo "答案是".$i;
		break;
	}
}


