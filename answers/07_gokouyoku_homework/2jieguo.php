
<!DOCTYPE html>


<html>



<head></head>


<body>


<?php 

date_default_timezone_set('UTC');


$a=$_GET["nianyueri"];
//echo $a."\n";
echo date("您的生日是Y年m月d日第W个星期w", strtotime($a) )."\n";

$n= strtotime($a);
//echo $n;
echo "您已经出生了".$n/"60"/"60"/"24"."天"."\n";
//几月
$x=date("m", strtotime($a) );
//echo $x;
//几日
$y=date("d",strtotime($a) );
echo $y;


//echo date($a);

$mo=$a[5];
//echo $mo;
$on=$a[6];
//echo $on;


switch($x){
	case "1";
	if($y>=20){
		echo "您是水瓶座"."\n";
	}else 
		echo "您是魔蝎座"."\n";	
		break;
	case "2";
	if($y>=19){
		echo "您是双鱼座"."\n";
	}else 
		echo "您是水瓶座"."\n";	
		break;
	case "3";
	if($y>=21){
		echo "您是白羊座"."\n";
	}else 
		echo "您是双鱼座"."\n";	
		break;	
	case "4";
	if($y>=20){
		echo "您是金牛座"."\n";
	}else 
		echo "您是白羊座"."\n";	
		break;
	case "5";
	if($y>=21){
		echo "您是双子座"."\n";
	}else 
		echo "您是白羊座"."\n";	
		break;
	case "6";
	if($y>=22){
		echo "您是巨蟹座"."\n";
	}else 
		echo "您是双子座"."\n";	
		break;	
	case "7";
	if($y>=24){
		echo "您是狮子座"."\n";
	}else 
		echo "您是巨蟹座"."\n";	
		break;
	case "8";
	if($y>=23){
		echo "您是处女座"."\n";
	}else 
		echo "您是狮子座"."\n";	
		break;
	case "9";
	if($y>=23){
		echo "您是天枰座"."\n";
	}else 
		echo "您是处女座"."\n";	
		break;
	case "10";
	if($y>=24){
		echo "您是天蝎座"."\n";
	}else 
		echo "您是天枰座"."\n";	
		break;
	case "11";
	if($y>=23){
		echo "您是射手座"."\n";
	}else 
		echo "您是天蝎座"."\n";	
		break;
	case "12";
	if($y>=22){
		echo "您是魔蝎座"."\n";
	}else 
		echo "您是射手座"."\n";	
		break;		


}

switch($x){
	case"1";
	echo "1月说7月和8月是因为5月房间有宝贝";
	break;
	case"2";
	echo "2月表示我知道什么宝贝";
	break;
	case"3";
	echo  "3月说既然都偷了那就一起去看看宝贝";
	break;
	case "4":
	echo  "我特么都写了些什么";
	break;
	case "5";
	echo "今天你会出门找不到钥匙";
	break;
	case "6":
	echo "没错5月的钥匙就在你的手里";
	break;
	case "7":
	echo  "然而是7月偷的栽赃给了6月";
	break;
	case "8":
	echo  "8月就在旁边帮着一起偷";
	break;
	case "9":
	echo "结果9月才是指示7月和8月偷的";
	break;
	case "10";
	echo  "10月发现了这把钥匙是7月和8月偷的";
	break;
	case "11";
	echo "11月就跟10月一起问7月和8月为什么偷钥匙";
	break;
	case "12";
	echo "12月表示其实宝贝早就在我的手上";
	break;
	
}



	





$datetime = DateTime::createFromFormat('Ymd', $a);
//print_r($datetime->format('Y-m-d'));
















?>

</body>




</html>