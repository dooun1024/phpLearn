<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<?php
session_start();
$types = [
	'小精灵',
	'其他',
	'龙',
	'鲲',
];
$preFixs = [
	"绿色的",
	"金闪闪的",
	"强韧的",
	"羸弱的",
	"史诗级别的"
];
$mNames = [
	'小精灵' => [
		'皮卡超',
		'金皮卡',
	],
	'其他' => [
		'小怪兽',
		'阿斯顿发',
		"gotaku"
	],
	'龙' => [
		'火龙',
		'水龙',
		'毒龙'
	],
	'鲲' => [
		'骨鲲',
		'尸鲲',
        '普通鲲'
	]
];

$randomType= $types[rand(0,count($mNames)-1)];
$count = count($mNames[$randomType])-1;



?>
<a href="index.php">返回首页</a>



<?php
// session中是否有缓存的表单数据
if (isset($_SESSION['tmpData'])) {
    // 接收从session中的数据
    $fd = $_SESSION['tmpData'];
	$type = $fd['type'];
	$m_name = $fd['m_name'];
	$m_level = $fd['m_level'];
	$address = $fd['address'];
	$atk = $fd['atk'];
} else {
    // 随机数据
	$type = $randomType;
	$m_name = $preFixs[rand(0, 4)] . $mNames[$randomType][rand(0, $count)];
	$m_level = rand(1, 10);
	$address = "road".rand(100, 800);
	$atk = rand(3, 30);
}
?>

<form action="do_add_monster.php">
    怪物类型<br>
    <input type="text" name="type" id="" value="<?php echo $type; ?>"><br>
    怪物名<br>
    <input type="text" name="m_name" id="" value="<?php echo $m_name; ?>"><br>
    怪物等级<br>
    <input type="text" name="m_level" id="" value="<?php echo $m_level ?>"><br>
	<?php
	if (!empty($_SESSION['errs']['m_level'])) {
		echo "<span style='text-align: center;color:red;'>{$_SESSION['errs']['m_level']}</span><br>";
	}
	?>
    怪物出现<br>
    <input type="text" name="address" id="" value="road<?php $address; ?>"><br>
    攻击力<br>
    <input type="text" name="atk" id="" value="<?php echo $atk; ?>"><br>
	<?php
	if (!empty($_SESSION['errs']['atk'])) {
		echo "<span style='text-align: center;color:red;'>{$_SESSION['errs']['atk']}</span><br>";
	}
	?>

    <input type="submit" value="提交">
</form>

</body>
</html>