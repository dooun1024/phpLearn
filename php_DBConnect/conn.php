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
	echo "连接成功";
}

$sql = "INSERT INTO `monster` VALUES (111, '小精灵', '皮卡病', 5, 'road202', 1);";

if ($conn->query($sql) === TRUE) {
	echo "新记录插入成功";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>