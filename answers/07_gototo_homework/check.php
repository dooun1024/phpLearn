<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta charset="utf-8">

	<title>判断结果</title>
</head>
<body>
<?php

//echo $_GET['year']."<br>";
//echo $_GET['month']."<br>";

($_GET['day']<=9)?($_GET['day']="0".$_GET['day']):($_GET['day']=$_GET['day']);

($_GET['month']<=9)?($_GET['month']="0".$_GET['month']):($_GET['month']=$_GET['month']);

//echo $_GET['day']."<br>";
//1.你的生日是"xx年xx月xx日"					
echo "你的生日是".$_GET['year']."年".$_GET['month']."月".$_GET['day']."日"."<br>";



$tmp=strtotime($_GET['year'].$_GET['month'].$_GET['day']);

//echo $tmp."<br>";
$value=time()-$tmp;
$tianshu= round($value/60/60/24,1);
//2.你出生已经xxxx天了
echo "你已经活在这世上".$tianshu."天了！"."<br>";

//3.你是xx星座的。echo "你是座"

if($_GET['month'] == 3){
	if($_GET['day']<=20){
		echo "你是双鱼座";
	}else{
		echo "你是白羊座";
	}
}elseif($_GET['month'] == 4){
	if($_GET['day']<=19){
		echo "你是白羊座";
	}else{
		echo "你是金牛座";
	}
}elseif($_GET['month'] == 5){
	if($_GET['day']<=20){
		echo "你是金牛座";
	}else{
		echo "你是双子座";
	}
}elseif($_GET['month'] == 6){
	if($_GET['day']<=21){
		echo "你是双子座";
	}else{
		echo "你是巨蟹座";
	}
}elseif($_GET['month'] == 7){
	if($_GET['day']<=23){
		echo "你是巨蟹座";
	}else{
		echo "你是狮子座";
	}
}elseif($_GET['month'] == 8){
	if($_GET['day']<=22){
		echo "你是狮子座";
	}else{
		echo "你是处女座";
	}
}elseif($_GET['month'] == 9){
	if($_GET['day']<=22){
		echo "你是处女座";
	}else{
		echo "你是天秤座";
	}
}elseif($_GET['month'] == 10){
	if($_GET['day']<=23){
		echo "你是天秤座";
	}else{
		echo "你是天蝎座";
	}
}elseif($_GET['month'] == 11){
	if($_GET['day']<=22){
		echo "你是天蝎座";
	}else{
		echo "你是射手座";
	}
}elseif($_GET['month'] == 12){
	if($_GET['day']<=21){
		echo "你是射手座";
	}else{
		echo "你是摩羯座";
	}
}elseif($_GET['month'] == 1){
	if($_GET['day']<=22){
		echo "你是摩羯座";
	}else{
		echo "你是水瓶座";
	}
}elseif($_GET['month'] == 2){
	if($_GET['day']<=18){
		echo "你是水瓶座";
	}else{
		echo "你是双鱼座";
	}
}
//4	你今天的运势是：

if($_GET['month']<=4){
	echo "<br>"."你今天的运势是好运！";
}elseif($_GET['month']>=9){
	echo "<br>"."你今天的运势是特~特~好运！";
}else{
	echo "<br>"."你今天的运势是特~好运！";
}
?>


 
</body>
</html>