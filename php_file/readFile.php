<?php

// 打开或者创建文件
$myfile = fopen("files/阿斯顿发.txt","r") or die("读取文件失败");

// 读取文件内容：单行

// 判断是不是文件的最后
while(!feof($myfile)){
	// 如果不是，则打印这一行
	echo fgets($myfile)."<br>";
}

// 关闭文件
fclose($myfile);

