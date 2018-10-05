<?php



$i = 0;
$j++;
$j++;
$j++;
$j++;
$j++;

echo $j;
$j = 0;
for ($i=100; $i<200; $i++) {
	if($i%3 == 0){
//		echo $i."\n";
		$j= $j + 1 ;
	} else {
		// j 不加
	}
}

echo $j;








