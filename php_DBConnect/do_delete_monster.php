<meta charset = "utf-8">
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
echo "<pre>";
//print_r($_GET);
echo "</pre>";

// 接收数据
$mno = $_REQUEST['mno'];

echo "删除号码为{$mno}的数据";
echo "<br>";
$sql = "delete from monster where mno = {$mno};";
//echo $sql."<br>";

if ($conn->query($sql) === TRUE) {
	if ($conn->affected_rows>=1) {
		echo "删除到了".$conn->affected_rows."条数据";
    } else {
	    echo "没报错，但是也没删除到数据";
    }
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>
