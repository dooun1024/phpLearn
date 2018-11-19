<?php
header("Content-type: application/json");
include "util/Connector.php";

// 初始化结果
$result = [
  "result"=>true,
  "html"=>"<tr><td>ajax小精灵</td><td>阿斯顿发</td><td>10</td><td>road333</td><td>10</td><td><a href=update_monster.php?mno=123 > 编辑</a></td></tr>",
  "errs"=>null
];
// 输出json格式数据
//echo json_encode($result);




// 接收数据
$type = $_REQUEST['type'];
$m_name = $_REQUEST['m_name'];
$m_level = $_REQUEST['m_level'];
$address = $_REQUEST['address'];
$atk = $_REQUEST['atk'];


// flag，是否全都连通
$isAllRight = true;

//// 判定等级是否合法
//if (is_numeric($m_level)) {
//	$result['errs']['m_level'] = null;
//} else{
//	$isAllRight=false;
//	$result['errs']['m_level'] = "等级只能是数字";
//	echo 1;
//}
//
//// 判定其他 。。。
//if (is_numeric($atk)) {
//	$_SESSION['errs']['atk'] = null;
//} else{
//	$isAllRight=false;
//	$_SESSION['errs']['atk'] = "攻击力只能是数字";
//	echo 2;
//}


//echo "<pre>";
//print_r($_GET);
//$_SESSION['tmpData'] = $_GET;
//
//echo "</pre>";



$connObj = new Connector();

$sql = "INSERT INTO `game_data`.`monster`(`type`, `m_name`, `m_level`, `address`, `atk`) VALUES ('{$type}', '{$m_name}', '{$m_level}', '{$address}', '{$atk}')";
$queryResult = $connObj->save($sql);

if ($queryResult !== false){
	$result['html'] = "<tr><td>{$type}</td><td>{$m_name}</td><td>{$m_level}</td><td>{$address}</td><td>{$atk}</td><td><a href=update_monster.php?mno={$queryResult} > 编辑</a><a href=delete_monster.php?mno={$queryResult} > 删除</a></td></tr>";
}

//echo $m_name;
//echo "<br>";
////$sql = "UPDATE `game_data`.`monster` SET `type` = '{$type}', `m_name` = '{$m_name}', `m_level` = {$m_level}, `address` = '{$address}', `atk` = {$atk} WHERE `mno` = 116";
//$sql = "INSERT INTO `game_data`.`monster`(`type`, `m_name`, `m_level`, `address`, `atk`) VALUES ('{$type}', '{$m_name}', '{$m_level}', '{$address}', '{$atk}')";
////echo $sql."<br>";
//
//if ($conn->query($sql) === TRUE) {
//	echo "新记录插入成功";
//} else {
//	echo "Error: " . $sql . "<br>" . $conn->error;
//}

echo json_encode($result);

?>