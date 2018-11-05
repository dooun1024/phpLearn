<!DOCTYPE HTML>
<html>
<head>

<title>星座占卜</title>
</head>
<body>
	<form method = "get" action = "uranai.php">
		姓名：<input type="text" name="userName" id=""><br>

		
		年:<select name="年">
		<?php
		$time=time();
		$year= date("Y",$time);
		
	
		?>
		<?php
		for($y=$year-100;$year>$y;$year--){
			echo "<option>$year</option>";
		}
		?>
		
		
		</select>


		月:<select name="月">
		<option value="Jan">1</option>
		<option value="Feb">2</option>
		<option value="Mar">3</option>
		<option value="Apr">4</option>
		<option value="May">5</option>
		<option value="Jun">6</option>
		<option value="jul">7</option>
		<option value="Aug">8</option>
		<option value="Sept">9</option>
		<option value="Oct">10</option>
		<option value="Nov">11</option>
		<option value="Dec">12</option>

		</select>
		
		日:<select name="日">
		<option value="one">1</option>
		<option value="two">2</option>
		<option value="three">3</option>
		<option value="four">4</option>
		<option value="five">5</option>
		<option value="six">6</option>
		<option value="seven">7</option>
		<option value="eight">8</option>
		<option value="nine">9</option>
		<option value="ten">10</option>
		<option value="eleven">11</option>
		<option value="twelve">12</option>
		<option value="thirteen">13</option>
		<option value="fourteen">14</option>
		<option value="fifteen">15</option>
		<option value="sixteen">16</option>
		<option value="seventeen">17</option>
		<option value="eighteen">18</option>
		<option value="nineteen">19</option>
		<option value="twenty">20</option>
		<option value="twenty-one">21</option>
		<option value="twenty-two">22</option>
		<option value="twenty-three">23</option>
		<option value="twenty-four">24</option>
		<option value="twenty-five">25</option>
		<option value="twenty-six">26</option>
		<option value="twenty-seven">27</option>
		<option value="twenty-eight">28</option>
		<option value="twenty-nine">29</option>
		<option value="thirty">30</option>
		</select>
		<br>
		<input type="submit" value="测试开始"> 

	</form>
</body>

function getAge($birthday){
    //格式化出生时间年月日
    $byear=date('$_GET["年"]',$birthday);
    $bmonth=date('$_GET["月"]',$birthday);
    $bday=date('$_GET["日"]',$birthday);

    //格式化当前时间年月日
    $tyear=date('Y');
    $tmonth=date('m');
    $tday=date('d');

    //开始计算年龄
    $age=$tyear-$byear;
    if($bmonth>$tmonth || $bmonth==$tmonth && $bday>$tday){
        $age--;
    }
    return $age;
}

$riqi='1989-10-18 15:20:36';
$uriqi=strtotime($riqi);      //将日期转化为时间戳

$age=getAge($uriqi);
echo '<br><br>年龄计算结果：'.$age.'岁';
?>
</html>

}
else if (($m==2&&$d>20)||($m==3&&$d<=20)){
	$val="双鱼座";
}
else if (($m==3&&$d>20)||($m==4&&$d<=20)){
	$val="白羊座";
}






function get_starsign($idcard){
    if(empty($idcard)) return null;
    $b = substr($idcard, 10, 4);
    $m = (int)substr($b, 0, 2);
    $d = (int)substr($b, 2);
    $val = '';
    if(($m == 1 && $d <= 21) || ($m == 2 && $d <= 19)){
        $val = "水瓶座";
    }else if (($m == 2 && $d > 20) || ($m == 3 && $d <= 20)){
        $val = "双鱼座";
    }else if (($m == 3 && $d > 20) || ($m == 4 && $d <= 20)){
        $val = "白羊座";
    }else if (($m == 4 && $d > 20) || ($m == 5 && $d <= 21)){
        $val = "金牛座";
    }else if (($m == 5 && $d > 21) || ($m == 6 && $d <= 21)){
        $val = "双子座";
    }else if (($m == 6 && $d > 21) || ($m == 7 && $d <= 22)){
        $val = "巨蟹座";
    }else if (($m == 7 && $d > 22) || ($m == 8 && $d <= 23)){
        $val = "狮子座";
    }else if (($m == 8 && $d > 23) || ($m == 9 && $d <= 23)){
        $val = "处女座";
    }else if (($m == 9 && $d > 23) || ($m == 10 && $d <= 23)){
        $val = "天秤座";
    }else if (($m == 10 && $d > 23) || ($m == 11 && $d <= 22)){
        $val = "天蝎座";
    }else if (($m == 11 && $d > 22) || ($m == 12 && $d <= 21)){
        $val = "射手座";
    }else if (($m == 12 && $d > 21) || ($m == 1 && $d <= 20)){
        $val = "魔羯座";
    }
    return $val;
}
 function starsign($star){
    
	$bmonth=($_GET["月"]);
	$bday=($_GET["日"]);
    $val = '';
    if(($m == 1 && $d <= 21) || ($m == 2 && $d <= 19)){
        $val = "水瓶座";
    }else if (($m == 2 && $d > 20) || ($m == 3 && $d <= 20)){
        $val = "双鱼座";
    }else if (($m == 3 && $d > 20) || ($m == 4 && $d <= 20)){
        $val = "白羊座";
    }else if (($m == 4 && $d > 20) || ($m == 5 && $d <= 21)){
        $val = "金牛座";
    }else if (($m == 5 && $d > 21) || ($m == 6 && $d <= 21)){
        $val = "双子座";
    }else if (($m == 6 && $d > 21) || ($m == 7 && $d <= 22)){
        $val = "巨蟹座";
    }else if (($m == 7 && $d > 22) || ($m == 8 && $d <= 23)){
        $val = "狮子座";
    }else if (($m == 8 && $d > 23) || ($m == 9 && $d <= 23)){
        $val = "处女座";
    }else if (($m == 9 && $d > 23) || ($m == 10 && $d <= 23)){
        $val = "天秤座";
    }else if (($m == 10 && $d > 23) || ($m == 11 && $d <= 22)){
        $val = "天蝎座";
    }else if (($m == 11 && $d > 22) || ($m == 12 && $d <= 21)){
        $val = "射手座";
    }else if (($m == 12 && $d > 21) || ($m == 1 && $d <= 20)){
        $val = "魔羯座";
    }
    return $val;
}
 echo $val;
 
 
 
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
    return $age;
	  
?>
