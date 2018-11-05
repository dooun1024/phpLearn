<?php


// 时间戳
echo time();
echo "<br>";
echo date("y年F D",time());


$now = "2018-11-3";
echo "<br>";

$nowCuo = strtotime($now);
echo $nowCuo;
echo "<br>";

echo date('y年m月d日 星期N',$nowCuo);


echo "<br>";

$r = DateTime::createFromFormat('y年m月d日H時i分s秒', '14年5月9日16時30分45秒');

echo $r->getTimestamp();


