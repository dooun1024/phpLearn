<!DOCTYPE HTML>
<html>
<head>

<title>星座占卜</title>
</head>
<body>
	<form method = "get" action = "uranai.php">
		姓名：<input type="text" name="userName" id=""><br>

		
		年:<select name="年">
		<?php
		$time=time();
		$year= date("Y",$time);
		
	
		?>
		<?php
		for($y=$year-100;$year>$y;$year--){
			echo "<option>$year</option>";
		}
		?>
		
		
		</select>


		月:<select name="月">
		<option value="01">1</option>
		<option value="02">2</option>
		<option value="03">3</option>
		<option value="04">4</option>
		<option value="05">5</option>
		<option value="06">6</option>
		<option value="07">7</option>
		<option value="08">8</option>
		<option value="09">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>

		</select>
		
		日:<select name="日">
		<option value="01">1</option>
		<option value="02">2</option>
		<option value="03">3</option>
		<option value="04">4</option>
		<option value="05">5</option>
		<option value="06">6</option>
		<option value="07">7</option>
		<option value="08">8</option>
		<option value="09">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="t25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		</select>
		<br>
		<input type="submit" value="测试开始"> 

	</form>
</body>


</html>
