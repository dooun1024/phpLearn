<?php
include "util/Connector.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "element/header.php"; ?>
    <title>Document</title>
</head>
<body>
<?php include "element/topNav.php"; ?>
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
$sql = "
SELECT
monster.mno,
monster.type,
monster.m_name,
monster.m_level,
monster.address,
monster.atk,
monster_images.image_url
FROM
monster
LEFT JOIN monster_images ON monster.mno = monster_images.mno
WHERE
monster.mno = {$mno}
";
echo $sql . "<br>";
// 执行数据库查询
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
	?>
    <h2>名称</h2>
	<?= "{$row['type']}"; ?>
    <h2>类型</h2>
	<?= "{$row['m_name']}"; ?>
    <h2>等级</h2>
    <div class="status-bar">
        <div class="status w-100">
			<?= "{$row['m_level']}"; ?>
        </div>
    </div>
    <h2>攻击力</h2>
    <div class="status-bar">
        <div class="status w-50">
			<?= "{$row['atk']}"; ?>
        </div>
    </div>
    <h2>出没地点</h2>
	<?= "{$row['address']}"; ?>
    <h2>图片地址</h2>
	<img src="images/<?= $row['image_url'];?>" >
	<?php
}
$conn->close();
?>
<style>
    h2 {
        color: blueviolet;
        font-size:1.2em;
        margin-bottom:0;
    }

    .status-bar {
        height: 20px;
        border:solid;
        width:300px;
    }
    .status{
        background-color: #00FF00;
        height:100%;
        padding-left:20px;
    }
    .w-50{
        width:50px;
    }
    .w-100{
        width:100px;
    }
    .w-150{
        width:150px;
    }
    .w-200{
        width:200px;
    }

</style>
</body>
</html>
