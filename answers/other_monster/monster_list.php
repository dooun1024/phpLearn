<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>怪物一览</h1>

<?php
session_start();
// 初始化怪物列表
$monsterList = isset($_SESSION['monsterList']) ? $_SESSION['monsterList'] : [];

// 把表单的怪物信息加入到列表
$monsterList[] = [
	'type' => $_REQUEST['type'],
	'm_name' => $_REQUEST['m_name'],
	'level' => $_REQUEST['level'],
	'atk' => $_REQUEST['atk'],
	'address' => $_REQUEST['address']
];

// 把怪物列表写回到SESSION
$_SESSION['monsterList'] = $monsterList;
?>

<pre>
<?php

// session_destroy();
 print_r($monsterList);
?>
</pre>
<table border=1 width=400>
    <tr>
        <td>品种</td>
        <td>名称</td>
        <td>等级</td>
        <td>出没地点</td>
        <td>攻击力</td>
        <td>操作</td>
    </tr>
	<?php foreach ($monsterList as $monster) { ?>
        <tr>
            <td><?=$monster['type'] ?></td>
            <td><?=$monster['m_name']?></td>
            <td><?=$monster['level']?></td>
            <td><?=$monster['atk']?></td>
            <td><?=$monster['address']?></td>
            <td><a href="#">编辑</a> <a href="#">删除</a></td>
        </tr>
	<?php } ?>
</table>

</body>
</html>