<!DOCTYPE HTML>
<html>
<head>

<title>星座占卜</title>
</head>
<body>
<?php
     echo "亲爱的".$_GET["userName"];
?>
<br>
<?php
echo"你的生日是".$_GET["年"].$_GET["月"].$_GET["日"];

?>
<br>
<?php
$byear=($_GET["年"]);
$bmonth=($_GET["月"]);
$bday=($_GET["日"]);

$tyear=date("Y");
$tmonth=date("M");
$tday=date("D");

$age=$tyear-$byear;
$tian=$age*365;
 if($bmonth>$tmonth || $bmonth==$tmonth && $bday>$tday){
        $age--;
    }

echo "你的年龄是".$age."歳" ."出生了".$tian."天";
    
	  
?>
<br>
<?php
$byear=($_GET["年"]);
$bmonth=($_GET["月"]);
$bday=($_GET["日"]);
//echo $byear;
//echo $bmonth;
//echo $bday;

    if($bmonth ==1){
		
		if($bday>=20){
	echo "水瓶座";
	}
	else{
		echo "摩羯座";
	}
	}		
    if($bmonth ==2){
		
		if($bday<=18){
	echo "水瓶座";
	}
	else{
		echo "双鱼座";
	}
	}		
	if($bmonth ==3){
		if($bday<=20){
	echo "双鱼座";
	}
	else{
		echo "白羊座";
	}
	}		

	if($bmonth ==4){
		if($bday<=19){
	echo "白羊座";
	}
	else{
		echo "金牛座";
	}
	}		
	if($bmonth ==5){
		if($bday<=20){
	echo "金牛座";
	}
	else{
		echo "双子座";
	}
	}		
	if($bmonth ==6){
		if($bday<=21){
	echo "双子座";
	}
	else{
		echo "巨蟹座";
	}
	}		
	if($bmonth ==7){
		if($bday<=22){
	echo "巨蟹座";
	}
	else{
		echo "狮子座";
	}
	}		
	if($bmonth ==8){
		if($bday<=23){
	echo "狮子座";
	}
	else{
		echo "处女座";
	}
	}		
	if($bmonth ==9){
		if($bday<=22){
	echo "处女座";
	}
	else{
		echo "天平座";
	}
	}		
	if($bmonth ==10){
		if($bday<=23){
	echo "天平座";
	}
	else{
		echo "天蝎座";
	}
	}		
	if($bmonth ==11){
		if($bday<=23){
	echo "射手座";
	}
	else{
		echo "摩羯座";
	}
	}	
?>	
<br>
<?php
	
	switch($bmonth)
{
case 1:
echo "特别好运";

break;


case 2:
echo "特别好运";
break;

case 3 :
echo "特别好运";
break;

case 4:
echo "特别好运";
break;

case 5:
echo "运气一般";
break;

case 6:
echo "运气一般";
break;

case 7:
echo "运气一般";
break;

case 8:
echo "运气一般";
break ;

case 9:
echo "运气好";
break ;

case 10:
echo "运气好";
break ;

case 11:
echo "运气好";
break ;

case 12:
echo "运气好";
break ;

}
?>
</body>


</html>
