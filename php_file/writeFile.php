<?php

// 打开或者创建文件
$myfile = fopen("files/阿斯顿发.txt","a") or die("读取文件失败");

// 定义文本
$txt = date("Y-m-d h:m:s").__LINE__." 发生的事件\n";

// 写入内容
fwrite($myfile, $txt);

// 关闭文件
fclose($myfile);

