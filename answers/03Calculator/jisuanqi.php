<pre>
<?php
session_start();
 error_reporting(E_ALL ^ E_NOTICE);
 $num = $_POST['num'];
//判断得到的num是否存在
    if (isset($_POST['num'])) {
      //看看等号有没有点击过，点击过就说明数据被保存那就得先清零
       if ($_SESSION['dengyu']=="=") {
         unset ($_SESSION['num']);
           unset ($_SESSION['dengyu']);
       }
       if ($_SESSION['jieguo']) {

          unset ($_SESSION['num']);
          unset ($_SESSION['fuhao']);
          unset ($_SESSION['num1']);
          unset ($_SESSION['jieguo']);
      }
    //如果num存在，判断小数点只能有一个。然后把数字连接起来
      if($_POST['num']=="."){
        if (strpos($_SESSION['num'],'.')==false) {
          $_SESSION['num'] = $_SESSION['num'].$num;
        }
      }
      else{              //小数点前只能有一个0，float强制转换
        $_SESSION['num'] = (float)($_SESSION['num'].$num);
      }
    }//正负号判断
    if(isset($_POST['zf'])){
      if (isset($_SESSION['num'])) {
        $_SESSION['num'] = $_SESSION['num']*(-1);
      }
    }
//传来的不是数字那就是符号，对符号进行判断。
    else if(isset($_POST['fuhao'])) {
      if(isset($_SESSION['fuhao'])) {
        switch ($_SESSION['fuhao']){
          case "+":
          $_SESSION['num1']=$_SESSION['num1']+$_SESSION['num'];
          break;
          case "-":
          $_SESSION['num1']=$_SESSION['num1']-$_SESSION['num'];
          break;
          case "*":
          $_SESSION['num1']=$_SESSION['num1']*$_SESSION['num'];
          break;
          case "/":
      //判断保存的num是否是为0
            if ($_SESSION['num']!=0) {
              $_SESSION['num1']=$_SESSION['num1']/$_SESSION['num'];
            }
            else{echo "除数不可以为0";}
          break;
        }//保存的符号存在的话就给他赋予新得到的符号。用于连加
       $_SESSION['fuhao'] = $_POST['fuhao'];
       $_SESSION['num'] = null;
     }
     else{  //没有保存的符号，那么就赋值
     $_SESSION['fuhao'] = $_POST['fuhao'];
     $_SESSION['num1'] = $_SESSION['num'];
     $_SESSION['num'] = null;
    }
  }
echo "\n";//如果输入的不是等于就将备份删掉
if (!isset($_POST['dengyu'])){
  unset ($_SESSION['backupNum']);
  unset ($_SESSION['backupFuhao']);
  unset ($_SESSION['backupJieguo']);
}
if ($_POST['dengyu']) {
  //当点击等于时如果num不存在。符号存在。num1存在，实现5+=10的功能
  if (isset($_SESSION['num1'])&&isset($_SESSION['fuhao'])&&!isset($_SESSION['num'])) {
        $_SESSION['num']=$_SESSION['num1'];
//实现＝＝
  }else if(isset($_SESSION['backupNum'])){
    $_SESSION['num1']=$_SESSION['backupJieguo'];
    $_SESSION['num']=$_SESSION['backupNum'];
    $_SESSION['fuhao']=$_SESSION['backupFuhao'];
  }


  switch ($_SESSION['fuhao'])
   {
     case "+":
       $_SESSION['jieguo']=$_SESSION['num1']+$_SESSION['num'];
     break;
     case "-":
      $_SESSION['jieguo']=$_SESSION['num1']-$_SESSION['num'];
     break;
     case "*":
      $_SESSION['jieguo']=$_SESSION['num1']*$_SESSION['num'];
     break;
     case "/":
     if ($_SESSION['num']!=0) {
      $_SESSION['jieguo']= $_SESSION['num1']/$_SESSION['num'] ;
      }
      else{echo "除数不可以为0";}
      break;
    }//按等于号之前备份一下
      $_SESSION['backupNum']=$_SESSION['num'];
      $_SESSION['backupFuhao']=$_SESSION['fuhao'];
      $_SESSION['backupJieguo']=$_SESSION['jieguo'];

      $_SESSION['num']=$_SESSION['jieguo'];
      unset ($_SESSION['num1']);
      unset ($_SESSION['fuhao']);
      unset ($_SESSION['jieguo']);
      $_SESSION['dengyu']=  $_POST['dengyu'];
    }

if ($_SESSION['num1']) {
  echo $_SESSION['num1'].$_SESSION['fuhao'].$_SESSION['num'].$_SESSION['jieguo'];
}
else {
  echo $_SESSION['num'].$_SESSION['fuhao'];
}
echo "\n";
if(isset($_POST['ql'])){
    unset ($_SESSION['num']);
    unset ($_SESSION['fuhao']);
    unset ($_SESSION['num1']);
    unset ($_SESSION['jieguo']);
    unset ($_SESSION['dengyu']);
}
  print_r ($_SESSION);
   ?>
 </pre>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>计算器</title>
    <style >
    .form button{
      background-color: #69f12e;
      display: inline-block;
      font-weight: bold;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      border: 1px solid transparent;
      padding: .1.5rem .2.75rem;
      font-size: 50px;
      line-height: 50px;
      border-radius: 4.2px;
    }
</style>
 </head>
  <body>
    <form  method="post" class="form" >
      <button  name="ql"value="C">C</button>
      <button  name="zf" value="±">±	</button><br><br>
      <button  name="num" value="7">7</button>
      <button  name="num" value="8">8</button>
      <button  name="num" value="9">9</button>
      <button  name="fuhao" value="/">/	</button><br><br>
      <button  name="num" value="4">4</button>
      <button  name="num" value="5">5</button>
      <button  name="num" value="6">6</button>
      <button  name="fuhao" value="*">*</button><br><br>
      <button  name="num" value="1">1</button>
      <button  name="num" value="2">2</button>
      <button  name="num" value="3">3</button>
      <button  name="fuhao" value="-">-</button><br><br>
      <button  name="num" value="0">0</button>
      <button  name="num" value=".">.</button>
      <button  name="dengyu" value="=">=</button>
      <button  name="fuhao" value="+">+</button>
    </form>
   </body>
 </html>
