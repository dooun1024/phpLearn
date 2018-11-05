<?php

// 数组 array 配列
// 多维数组 連想配列

$cars = array('Volvo','BMW','Toyota');

// var_dump($cars);
// print_r($cars);

// 新旧写法的区别

// 1 定义

$class = array("zhang","liu");
$class = ['zhang','liu'];




$class[0] = "zhang";
$class[1] = "liu";
$class[] = 'wang';



// print_r($class);

// 声明一个数组变量
$students = ['gokoyoku','gototo','ritenu','aaa','bbb'];

$count = count($students);

$students[1] = 'gotooto';
// echo $students[1];

// print_r($students);

// echo $students[0];
// echo $students[1];
// echo $students[2];

// echo $students[1]
// echo $students[2]
// echo $students[3]



// for ($i=0; $i < $count; $i++){
//     echo $students[$i]."\n";
// }

foreach($students AS $key => $student){
    // echo $key.$student."\n";
}

$gootaku=['name'=>'吴江羽', 'age'=>18];
$gootaku['name'] = "吴江羽";
$gootaku['age'] = "吴江羽";

$students = [];
$students[0]=$gootaku;
$students[1]=$gootaku;
$students[2]=$gootaku;

// $human = [];





print_r($students);













