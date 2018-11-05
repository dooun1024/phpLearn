<?php 
//定义源代码路径
define("SRC","../src");

define("DS",DIRECTORY_SEPARATOR);

// 读取html5 范本
$sample = file_get_contents(SRC.DS."sample".DS."html5.txt") or die("Unable to open sample file!");


for ($i=1; $i<100; $i++){

    if(file_exists("test".$i.".php")){
        // 存在
    }else {
        // 不存在
        // 写入新sample文件
        $myfile = fopen("test".$i.".php","wb");
        fwrite($myfile,$sample);

        copy(SRC.DS."增加测试文件.bat", "增加测试文件.bat");
        break;
    }
}


