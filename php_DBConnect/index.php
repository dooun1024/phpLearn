<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="add_monster.php">新增数据</a>
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

$sql = "select * from monster;";
$result = $conn->query($sql);



if ($result->num_rows > 0) {

	// 输出数据
	echo "<table border=1>";
	echo "<tr><th>种族</th><th>名称</th><th>等级</th><th>出现地点</th><th>攻击力</th><th>操作</th></tr>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>{$row['type']}</td>";
		echo "<td><a href='view_monster.php?mno={$row['mno']}'>{$row['m_name']}</a></td>";
		echo "<td>{$row['m_level']}</td>";
		echo "<td>{$row['address']}</td>";
		echo "<td>{$row['atk']}</td>";
		echo "<td>
<a href=do_delete_monster.php?mno={$row['mno']} > 删除</a>
<a href=update_monster.php?mno={$row['mno']} > 编辑</a>

</td>";
		echo "</tr>";
	}
	echo "</table>";

} else {
	echo "0 结果";
}
$conn->close();
?>

<hr>

</body>
</html>