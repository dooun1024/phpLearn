
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>计算器</title>
	</head>

	<body>


<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$num=0;
if($_GET['num']!=null){
	$num = $_GET['num'];
	if($_SESSION['type']=="equal"){
		$_SESSION['operator']=null;
		$_SESSION['result']=null;
		$_SESSION['x']=null;
		$_SESSION['num']=null;
		$_SESSION['type']=null;
	}
	$_SESSION['num'] = $_SESSION['num'].$num;
	$_SESSION['x']=$_SESSION['num'];
	echo $_SESSION['num'];

}
elseif ($_GET['operator']){
	$_SESSION['type']="operator";
	if(!$_SESSION['operator']){
		$_SESSION['operator']=$_GET['operator'];

		$_SESSION['result']=$_SESSION['num'];
		$_SESSION['num'] =null;
		echo $_SESSION['result'];
		if($_SESSION['result']===null){
			echo "0";
		}
	}else{
		if($_SESSION['num']!=null){
			jisuan($_SESSION['operator'],$_SESSION['num']);
			$_SESSION['operator']=$_GET['operator'];
			$_SESSION['num'] =null;
			echo $_SESSION['result'];
			if($_SESSION['result']===null){
				echo "0";
			}
		}else{
			$_SESSION['operator']=$_GET['operator'];
			echo $_SESSION['result'];
			if($_SESSION['result']===null){
				echo "0";
			}
		}

	}
}
elseif ($_GET['equal']){
	$_SESSION['type']="equal";
	if(!$_SESSION['operator']){
		if($_SESSION['result']){
			echo $_SESSION['result'];
		}elseif($_SESSION['num']!=null){
			echo $_SESSION['num'];
		}else{
			echo "0";
		}

	}elseif($_SESSION['operator']&&$_SESSION['x']==null){
		echo $_SESSION['result'];
		if($_SESSION['result']===null){
			echo "0";
		}
	}else {
		jisuan($_SESSION['operator'],$_SESSION['x']);
		$_SESSION['num']=null;
		echo $_SESSION['result'];
		if($_SESSION['result']===null){
			echo "0";
		}

	}
}
elseif ($_GET['system']){
	session_destroy();
	echo "0";
}

function jisuan($operator,$num){
	switch ($operator){
		case "+":
			$_SESSION['result']+=$num;
			break;
		case "-":
			$_SESSION['result']-=$num;
			break;
		case "*":
			$_SESSION['result']*=$num;
			break;
		case "/":
			if($num==0){
				echo "不能用0被除以";
				break;
			}
			$_SESSION['result']/=$num;
			break;
	}

}
?>
		<form>
			<button name=num value=7>7</button>
			<button name=num value=8>8</button>
			<button name=num value=9>9</button>
			<button name=operator value=+>+</button><br>
			<button name=num value=4>4</button>
			<button name=num value=5>5</button>
			<button name=num value=6>6</button>
			<button name=operator value=->-</button><br>
			<button name=num value=1>1</button>
			<button name=num value=2>2</button>
			<button name=num value=3>3</button>
			<button name=operator value="*">*</button><br>
			<button name=num value=0>0</button>
			<button name=num value=.>.</button>
			<button name=equal value="=">=</button>
			<button name="operator" value="/">/</button>
			<button name=system value="C">C</button>
		</form>
	</body>

</html>