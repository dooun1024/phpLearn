<meta charset = "utf-8">

<?php
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
$mno = $_REQUEST['mno'];
$m_name = $_REQUEST['m_name'];





print_r($_REQUEST);

echo $m_name;
echo "<br>";

$sql = "UPDATE monster SET m_name = '{$m_name}' WHERE mno = {$mno}";

echo $sql;

if ($conn->query($sql) === TRUE) {
	echo "修改成功";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="index.php">返回首页</a>

