<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta charset="utf-8">

	<title>日期处理</title>
</head>
<body>
	
<h1>请选择出生年月日</h1>
<?php
//echo strtotime('now');
$imay = date("Y");
$imam = date("m");
$imad = date("d");
?>

<form method="get" action="check.php"> 
<select name="year">

<?php
for($i=$imay-100;$i<=$imay;$imay--){
		echo "<option>".$imay."</option>"; 
	}
?>
</select>


<p>
<select name="month">
<?php
for($m=1;$m<=12;$m++){
	if($m==$imam){
		echo "<option selected>".$m."</option>";
			}else{
		echo "<option>".$m."</option>"; }}
?>
</select>
</p>

<p>
<select name="day">
<?php
	for($d=1;$d<=30;$d++){
		if($d==$imad){
		echo "<option selected>".$d."</option>";}
			else{
		echo "<option>".$d."</option>"; }}
?>
</select>

 <hr>

<input type="submit" value="提交">
</form>
</p>


</body>
</html>