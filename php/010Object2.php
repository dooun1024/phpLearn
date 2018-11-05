<?php
include 'Student.php';

////从“人类”的概念中 实体化一个具体的对象
//$gootaku = new Student();

//$gootaku->name = "吴江翼";
//$gootaku->age = 18;
//$gootaku->eat("蔬菜");

//print_r($gootaku);

$baba = new Human();
print_r($baba);



//// print_r($gootaku);
//
// 利用构造函数初始化对象的属性
$ritenu = new Student("李天宇",17,"牛排",110);
$ritenu->eat("奇怪的东西");
//print_r($ritenu);

//echo $ritenu->myJicheng();

// 子类无法调用父类中的私有方法
//echo $ritenu->cook();

//
//$class = [$gootaku,$ritenu];
//print_r($class);



