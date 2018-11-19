<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<?php include "element/header.php"; ?>

		<title></title>
	</head>
	<body>
<a href="index.php">返回首页</a>
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

echo $_GET['mno'];

// 接收数据
$mno = $_REQUEST['mno'];

echo "查看号码为{$mno}的数据";
echo "<br>";

?>

	<?php

$conn->close();
?>
</body>
</html>
