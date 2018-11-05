<?php
session_start();

// 把数字连起来


//初始化 Session 第一次进页面的时候，
$_SESSION['final'] = isset($_SESSION['final'])?$_SESSION['final']:0;

// 从表单拿到数字
$num = $_GET['num'];

// 把表单的数字跟Final的数字连起来
$_SESSION['final'] = $_SESSION['final'].$num;

echo $_SESSION['final'];
//session_destroy();


?>
<form>
    <button name="num" value="1">1</button>
    <button name="num" value="2">2</button>
</form>


<pre>
<?php
print_r($_SESSION);
?>
</pre>

