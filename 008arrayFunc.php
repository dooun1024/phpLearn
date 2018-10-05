<?php
$nums = [1,5,8,3,2];
echo "排序前\n";
print_r($nums);

// sort() - 对数组进行升序排列
echo "sort()函数\n";
sort($nums);
print_r($nums);

// rsort() - 对数组进行降序排列
echo "rsort()函数\n";
rsort($nums);
print_r($nums);

// asort() - 根据关联数组的值，对数组进行升序排列

// ksort() - 根据关联数组的键，对数组进行升序排列

// arsort() - 根据关联数组的值，对数组进行降序排列

// krsort() - 根据关联数组的键，对数组进行降序排列


