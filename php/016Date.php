<?php
date_default_timezone_set('Asia/Tokyo');

// 得到当前的格林威治时间
$time = time();
// 减去100天的秒数
$time -= 60*60*24*100;

// 把格林位置时间换算成我们能够理解的时间格式
echo date("y年m月d日 H时i分s秒", $time) . "<br>";
$year = date("Y", $time);
$month = date("m", $time);

?>

<option>2332423</option>
<option>2332423</option>
<option>2332423</option>

<option>1111, 2222 ,3333 ,4444 </option>


<select>
	<?php for($y=$year-100;$year>$y;$year--){
		echo  "<option>{$year} </option>";
	}?>
</select>



