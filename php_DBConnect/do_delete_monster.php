<?php
include "util/Connector.php";
?>
<meta charset = "utf-8">
<a href="index.php">返回首页</a>
<?php

echo $_GET['mno'];
echo "<pre>";
//print_r($_GET);
echo "</pre>";

// 接收数据
$mno = $_REQUEST['mno'];

echo "删除号码为{$mno}的数据";
echo "<br>";
$sql = "delete from monster where mno = {$mno};";
$connObj = new Connector();
$result = $connObj->delete($sql);

echo "删除结果：".$result;
?>
