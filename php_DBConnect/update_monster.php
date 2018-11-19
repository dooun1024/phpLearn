<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<?php include "element/header.php"; ?>

		<title></title>
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

		    <form action="do_upload_image.php" method="post"
		        enctype="multipart/form-data">
		        <input type="text" name="mno" value="<?= "{$row['mno']}"; ?>">
		        <label for="file">图片:</label>
		        <input type="file" name="file" id="file" />
		        <input type="submit" name="submit" value="上传" />
		    </form>
			<?php
		}
		$conn->close();
		?>
	</body>
</html>
