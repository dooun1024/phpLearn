<!DOCTYPE html>
<html>
<head>
    <title>monsterlist</title>
    <style>

    </style>
</head>
<body>
<h1>怪物一览</h1>


<?php session_start();
//session_destroy();

$asdf1 = $_GET['zhongzus'];
$asdf2 = $_GET['m_name'];
$asdf3 = $_GET['level'];
$asdf4 = $_GET['address'];
$asdf5 = $_GET['atk'];
$data = array(
	'zhongzu' => $asdf1,
	'm_name' => $asdf2,
	'level' => $asdf3,
	'address' => $asdf4,
	'atk' => $asdf5,
);

// 写法1
$_SESSION['asdf'][] = $data;

// 写法2
//$currentCount = count($_SESSION['asdf']);
//$_SESSION['asdf'][$currentCount] = $data;

//$currentCount = 2;
//$_SESSION['asdf'][2] = $data;

if (!isset($_SESSION['asdf'])){
	$_SESSION['asdf'] = [];
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>


<table border="1">
    <tr>
        <td>种族</td>
        <td>名称</td>
        <td>等级</td>
        <td>出没地点</td>
        <td>攻击力</td>
    </tr>

	<?php
	//foreach里面嵌套一个for循环也是可以的

	$num = count($_SESSION['asdf']);
	$list = $_SESSION['asdf'];

	for ($i = 0; $i < $num; $i++) {
	    echo "<tr>";
		echo "<td>" . $list[$i]['zhongzu'] . "</td>";
		echo "<td>" . $list[$i]['m_name'] . "</td>";
		echo "<td>" . $list[$i]['level'] . "</td>";
		echo "<td>" . $list[$i]['address'] . "</td>";
		echo "<td>" . $list[$i]['atk'] . "</td>";
		echo "</tr>";
	}
	?>
	<?php
	//foreach里面嵌套foreach

	//
	//			foreach ($_SESSION['asdf'] as $value) {
	//				echo "<td>{$value}</td>";
	//			}

	?>


</table>


</body>
</html>
