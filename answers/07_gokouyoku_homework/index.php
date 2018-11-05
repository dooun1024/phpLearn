
<!DOCTYPE html>
<html>


<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



	<title>占卜</title>
	

<style>
	h1{
		color :red;
		text-align:center;
	}
	
	.w {
        width: 100%;
        padding-bottom: 10%;
        height: 0
    }
	h2{
		text-align:center;
	}
	
	
	
</style>	
	
	
	
</head>





<body>

		<h1>占卜</h1>
<a href="zhanbu2.php">点我进入加强版</a>
	<form method="get" action="nianling.php">
	
	<?php 
	//echo date("Y.m.d") . "<br>";
	
	$year=date("Y");
	$moon=date("m");
	$day=date("d");
	//echo $year;
	//echo $moon;
	?>
	
	
	<div class="container">
    <div class="row">
    <div class="col-sm">

	 年
	<select name="year">
	<option value=""></option>
	 <?php 
	for($years=1895;$year>$years;$year--){
		 echo '<option value="'.$year.'">'.$year.'</option>';	 
	}?>		
	</select>
	</div>
	
	<div class="col-sm">
	月
	<select name="moon">
	<option value=""></option>
	<?php for($a=1;$a<=12;$a++){
			echo '<option value="'.$a.'">'.$a.'</option>';
	}?>
	</select></div>	
	
	<div class="col-sm">
	日
	<select name="day">
	<option value=""></option>
	<?php for($b=1;$b<=30;$b++){
		echo '<option value="'.$b.'">'.$b.'</option>';
	}?>
	</select></div>
	
	<div class="w"></div>
	
	<table width="100%" border="0" >
	<tr>
	<th><input style="float:right;" type="submit" name="tijiao" value="提交">
	</th>
	</tr>
	
	
	
	
	<!--<input type="submit" value="提交">-->
	
	
	</form>
</body>






</html>
