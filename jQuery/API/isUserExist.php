<?php
$users = [
    'zhangsan',
    'lisi'
];

$errs = [
    'userName'=>'',
    'age'=>''
];

$userName = $_GET["userName"];




if (in_array($userName, $users)){
    $errs['userName'] = "用户已存在";
} else if(empty($userName)){
    $errs['userName'] = "用户名不能为空";
} else if (strpos($userName, "请输入手机号")!==false){
    $errs['userName'] = "不能包含敏感文字";
}

if ($_GET["age"]<18) {
    $errs['age'] = "用户必须年满18周岁";
}


echo json_encode($errs);
?>