<?php
include 'Human.php';

//从“人类”的概念中 实体化一个具体的对象
$gootaku = new Human();

$gootaku->name = "吴江翼";
$gootaku->age = 18;
$gootaku->eat("蔬菜");

// print_r($gootaku);

// 利用构造函数初始化对象的属性
$ritenu = new Human("李天宇",17,"牛排");
$ritenu->eat("奇怪的东西");
// print_r($ritenu);


$class = [$gootaku,$ritenu];
print_r($class);



