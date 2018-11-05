<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>在线计算闰年</title>
</head>
<body>
<form action="">
输入年份
    <input type="number" placeholder="请输入年份" name="year" id="" >    
    <button>计算</button>
</form>
<?php
HEAD:
$year = isset($_GET['year'])?$_GET['year']:null;


if ($year!== null){

    // 判断能否被100 整除
    if($year%100 == 0){
        // 能被100整除

        // 能否被400整除
        if($year%400 == 0){
            // 能
            echo $year."是闰土";
        } else {
            // 不能
            echo $year."是平土";
        }
    } else {
        if($year%4 == 0){
            echo $year."是闰土";
        } else {
            echo $year."是平土";
        }
    }

}
?>



</body>
</html>