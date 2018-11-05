<meta charset = "utf-8">

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "game_data";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
	die("连接失败: " . $conn->connect_error);
} else {
//	echo "连接成功";
}


// 接收数据
$type = $_REQUEST['type'];
$m_name = $_REQUEST['m_name'];
$m_level = $_REQUEST['m_level'];
$address = $_REQUEST['address'];
$atk = $_REQUEST['atk'];

// flat，是否全都连通
$isAllRight = true;

// 判定等级是否合法
if (is_numeric($m_level)) {
	$_SESSION['errs']['m_level'] = null;
} else{
	$isAllRight=false;
	$_SESSION['errs']['m_level'] = "等级只能是数字";
	echo 1;
}

// 判定其他 。。。
if (is_numeric($atk)) {
	$_SESSION['errs']['atk'] = null;
} else{
	$isAllRight=false;
	$_SESSION['errs']['atk'] = "攻击力只能是数字";
	echo 2;
}

// 综合判定是否要跳回去
if ($isAllRight == false) {
	header("Location: add_monster.php");
}

echo "<pre>";
print_r($_GET);
$_SESSION['tmpData'] = $_GET;

echo "</pre>";







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

$conn->close();
?>

<a href="index.php">返回首页</a>

