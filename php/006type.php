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

// 类 人类 {属性，方法}
// 对象 小张
class Car {
    var $brand;
    var $color;

    function run(){
        // echo "我是一个{$brand}牌子的车，我是{$color}色的";
    }

    // 构造函数
    function Car(){
        $this->color = 'gray';
    }

}

$bmw = new Car();

// print_r($bmw);

$x="Hello world!";
$x=null;
// var_dump($x);

















