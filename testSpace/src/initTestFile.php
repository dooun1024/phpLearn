<?php 
//定义源代码路径
define("SRC","src");

define("DS",DIRECTORY_SEPARATOR);

// 定义文件名
$folderName = date("Y_m_d");
// 定义文件完整路径
$filePath = "".$folderName;

// 判断文件夹是否存在
if (!is_dir($filePath)){
	// 不存在，创建新文件夹
	mkdir($filePath);
	mkdir($filePath.DS."Model");
	mkdir($filePath.DS."View");
	mkdir($filePath.DS."Controller");
} else {
	// 存在，
}

// 读取html5 范本
$sample = file_get_contents(SRC.DS."sample".DS."html5.txt") or die("Unable to open sample file!");

// 写入新sample文件
$myfile = fopen($folderName.DS."test1.php","wb");
fwrite($myfile,$sample);

// 复制“创建新文件”的batch
copy(SRC.DS."增加测试文件.bat", $filePath.DS."增加测试文件.bat");





# echo file_exists(SRC.DS."sample".DS."html5.txt")?"存在":"不存在";



