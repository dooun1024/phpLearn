

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

$monsterList = [];
if($_SESSION['cate']){
    $monsterList = $_SESSION['cate'];
}

$cate1 = $_GET['zhongzu'];
$cate2 = $_GET['m_name'];
$cate3 = $_GET['level'];
$cate4 = $_GET['address'];
$cate5 = $_GET['atk'];
$data = array('zhongzu'=>$cate1,'m_name'=>$cate2,'level'=>$cate3,'address'=>$cate4,'atk'=>$cate5,);
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
$monsterList[] = $data;



echo "<pre>";
print_r($_SESSION);
echo "</pre>";
$_SESSION['cate'] = $monsterList;	
// $_SESSION['cate'][] = $data;	
	?>
	<?php
		 echo "名称".$_GET["m_name"].$_GET["level"]
		 .$_GET["address"].$_GET["atk"];


		 
// session_destroy();
?>

	<table border="1">
		<tr>
		<td> </td>
		<td>种族</td>
		<td>名称</td>
		<td>等级</td>
		<td>出没地点</td>
		<td>攻击力</td>
		</tr>
		<tr>
		<td>1</td>
		<td></td>
		<td>1</td>
		<td>1</td>
		<td>2</td>
		<td>2</td>
		</tr>
		<tr>
		<td>1</td>
		<td>2</td>
		<td>2</td>
		<td>1</td>
		<td>2</td>
		<td>2</td>
		</tr>
		<tr>
		<td>1</td>
		<td>2</td>
		<td>2</td>
		<td>1</td>
		<td>2</td>
		<td>2</td>
		</tr>
		<tr>
		<td>1</td>
		<td>2</td>
		<td>2</td>
		<td>1</td>
		<td>2</td>
		<td>2</td>
		</tr>
		<tr>
		<td>1</td>
		<td>2</td>
		<td>2</td>
		<td>1</td>
		<td>2</td>
		<td>2</td>
		</tr>
		<tr>
		<td>1</td>
		<td>2</td>
		<td>2</td>
		<td>1</td>
		<td>2</td>
		<td>2</td>
		</tr>
		</table>
</body>
</html>
