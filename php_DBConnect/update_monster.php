<meta charset="utf-8">
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
$sql = "select * from monster where mno={$mno};";
echo $sql . "<br>";
// 执行数据库查询
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
	?>
    <form action="do_update_monster.php">
        <label for="m_name">类型</label>
        <input type="text" id="m_name" name="m_name" value="<?= "{$row['m_name']}"; ?>">

        <label for="m_name">名称</label>
        <input type="text" id="m_name" name="m_name" value="<?= "{$row['m_name']}"; ?>">




        <input type="hidden" name="mno" value="<?= "{$row['mno']}"; ?>">
        <input type="submit"/>
    </form>
	<?php
}
$conn->close();
?>
