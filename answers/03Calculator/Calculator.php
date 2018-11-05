<?php
error_reporting(E_ALL || ~E_NOTICE);
session_start();
?>
<pre>
<?php
// 数字
if(isset($_POST['num'])){
  if(isset($_SESSION['result'])){
    $_SESSION['result']   =   null;
    $_SESSION['num']      =   null;
    $_SESSION['num2']     =   null;
    $_SESSION['operator'] =   null;
  }
  $num = $_POST['num'];
  if($_POST['num'] == "."){
    if(strstr($_SESSION['num'],".")){
      $num = null;
    }
  }
  if($_SESSION['num'] == "0"){
    $_SESSION['num'] = null;
  }
  $_SESSION['num'] = $_SESSION['num'].$num;
}
// 正负号
if(isset($_POST['plusminus'])){
  if(isset($_SESSION['num'])){
    if(strstr($_SESSION['num'],"-")){
      $_SESSION['num'] = str_replace("-","",$_SESSION['num']);
    }
    elseif(strstr($_SESSION['num'],"-") == false){
      $_SESSION['num'] = "-".$_SESSION['num'];
    } else {
      $_SESSION['num'] = "-";
    }
  }
}
// 运算符
if (isset($_POST['operator'])){
    if(isset($_SESSION['result'])){
      $_SESSION['num'] = null;
      $_SESSION['num2'] = $_SESSION['result'];
      $_SESSION['operator'] = $_POST['operator'];
      unset($_SESSION['result']);
    }
    if(isset($_SESSION['operator']) == false){
    $_SESSION['operator'] = $_POST['operator'];
    $_SESSION['num2'] = $_SESSION['num'];
    $_SESSION['num'] = null;
  } elseif (isset($_SESSION['num']) && isset($_SESSION['num2'])){
      if($_SESSION['operator'] !== $_POST['operator']){
          $_SESSION['operator2'] = $_SESSION['operator'];
            if($_SESSION['operator2'] == "+"){
            $_SESSION['result'] = $_SESSION['num'] + $_SESSION['num2'];
            $_SESSION['num2'] = $_SESSION['result'];
            unset($_SESSION['result']);
            $_SESSION['num'] = null;
            $_SESSION['operator'] = $_POST['operator'];
            unset($_SESSION['operator2']);
          }
            if($_SESSION['operator2'] == "-"){
            $_SESSION['result'] = $_SESSION['num2'] - $_SESSION['num'];
            $_SESSION['num2'] = $_SESSION['result'];
            unset($_SESSION['result']);
            $_SESSION['num'] = null;
            $_SESSION['operator'] = $_POST['operator'];
            unset($_SESSION['operator2']);
          }
            if($_SESSION['operator2'] == "*"){
            $_SESSION['result'] = $_SESSION['num'] * $_SESSION['num2'];
            $_SESSION['num2'] = $_SESSION['result'];
            unset($_SESSION['result']);
            $_SESSION['num'] = null;
            $_SESSION['operator'] = $_POST['operator'];
            unset($_SESSION['operator2']);
          }
            if($_SESSION['operator2'] == "/"){
            $_SESSION['result'] = $_SESSION['num2'] / $_SESSION['num'];
            $_SESSION['num2'] = $_SESSION['result'];
            unset($_SESSION['result']);
            $_SESSION['num'] = null;
            $_SESSION['operator'] = $_POST['operator'];
            unset($_SESSION['operator2']);
          }
        } else{
            if($_SESSION['operator'] == "+"){
              $_SESSION['result'] = $_SESSION['num'] + $_SESSION['num2'];
              $_SESSION['num2'] = $_SESSION['result'];
              unset($_SESSION['result']);
              $_SESSION['num'] = null;
            }
            if($_SESSION['operator'] == "-"){
              $_SESSION['result'] = $_SESSION['num2'] + $_SESSION['num'];
              $_SESSION['num2'] = $_SESSION['result'];
              unset($_SESSION['result']);
              $_SESSION['num'] = null;
            }
            if($_SESSION['operator'] == "*"){
              $_SESSION['result'] = $_SESSION['num'] * $_SESSION['num2'];
              $_SESSION['num2'] = $_SESSION['result'];
              unset($_SESSION['result']);
              $_SESSION['num'] = null;
            }
            if($_SESSION['operator'] == "/"){
              $_SESSION['result'] = $_SESSION['num2'] / $_SESSION['num'];
              $_SESSION['num2'] = $_SESSION['result'];
              unset($_SESSION['result']);
              $_SESSION['num'] = null;
            }
        }
    }elseif (isset($_SESSION['operator'])){
      $_SESSION['operator'] = $_POST['operator'];
  }
}
// 等于号
if (isset($_POST['equal'])){
  // 连等于
  if($_SESSION['num'] == null){
    if($_SESSION['operator'] == "+"){
      if(isset($_SESSION['result'])){
        $_SESSION['result'] += $_SESSION['num2'];
      } else {
      $_SESSION['result'] = $_SESSION['num2'] + $_SESSION['num2'];
      }
    }
    elseif($_SESSION['operator'] == "-"){
      if(isset($_SESSION['result'])){
        $_SESSION['result'] -= $_SESSION['num2'];
      } else {
      $_SESSION['result'] = $_SESSION['num2'] - $_SESSION['num2'];
      }
    }
    elseif($_SESSION['operator'] == "*"){
      if(isset($_SESSION['result'])){
        $_SESSION['result'] *= $_SESSION['num2'];
      } else {
      $_SESSION['result'] = $_SESSION['num2'] * $_SESSION['num2'];
      }
    }
    elseif($_SESSION['operator'] == "/"){
      if(isset($_SESSION['result'])){
        $_SESSION['result'] /= $_SESSION['num2'];
      } else {
      $_SESSION['result'] = $_SESSION['num2'] / $_SESSION['num2'];
      }
    }
} else{
  // 缺少第二个数
    if($_SESSION['operator'] == "+"){
      if(isset($_SESSION['result']) && isset($_SESSION['num'])){
        $_SESSION['result'] += $_SESSION['num'];
      }
      if(isset($_SESSION['num2'])){
      $_SESSION['result'] = $_SESSION['num'] + $_SESSION['num2'];}
      $_SESSION['num2'] = null;
    }
    elseif($_SESSION['operator'] == "-"){
      if(isset($_SESSION['result']) && isset($_SESSION['num'])){
        $_SESSION['result'] -= $_SESSION['num'];
      }
      if(isset($_SESSION['num2'])){
      $_SESSION['result'] = $_SESSION['num2'] - $_SESSION['num'];}
      $_SESSION['num2'] = null;
    }
    elseif($_SESSION['operator'] == "*"){
      if(isset($_SESSION['result']) && isset($_SESSION['num'])){
        $_SESSION['result'] *= $_SESSION['num'];
      }
      if(isset($_SESSION['num2'])){
      $_SESSION['result'] = $_SESSION['num'] * $_SESSION['num2'];}
      $_SESSION['num2'] = null;
    }
    elseif($_SESSION['operator'] == "/"){
      if(isset($_SESSION['result']) && isset($_SESSION['num'])){
        $_SESSION['result'] /= $_SESSION['num'];
      }
      if(isset($_SESSION['num2'])){
      $_SESSION['result'] = $_SESSION['num2'] / $_SESSION['num'];}
      $_SESSION['num2'] = null;
    }
  }
}
// C键
if (isset($_POST['allzero'])){
  unset($_SESSION['num']);
  unset($_SESSION['num2']);
  unset($_SESSION['operator']);
  unset($_SESSION['result']);
}
// CE键
if (isset($_POST['zero'])){
  $_SESSION['num'] = null;
}
// 退一位
if(isset($_POST['delete'])){
  $_SESSION['num'] = substr($_SESSION['num'],0,-1);
}
 ?>
</pre>
<!DOCTYPE html>
 <html>
   <head>
     <meta charset="UTF-8">
     <title>Calculator</title>
      <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
      </script>
      <style>
        .button{
          height: 100px;
          width: 100px;
          font-size: 40px;
          margin: 5px;
        }
      </style>
   </head>
   <body>
     <?php
     if(isset($_POST['num']) ||
     isset($_POST['operator']) ||
     isset($_POST['plusminus']) ||
     isset($_POST['delete']) ||
     isset($_POST['zero'])){
       if(isset($_SESSION['num2'])==false){
         echo "<h2>".$_SESSION['num']."</h2>";
       }
       else {
         echo "<h2>".$_SESSION['num2']." ".$_SESSION['operator']." ".$_SESSION['num']."</h2>";
       }
     }
     if(isset($_POST['equal'])){
         if(isset($_SESSION['num2']) == false && isset($_SESSION['result']) == false){
           echo "<h2>".$_SESSION['num']."</h2>";
         }
         if ($_SESSION['operator'] == "/" && $_SESSION['num'] == "0"){
           $_SESSION['num'] = null;
           $_SESSION['operator'] = null;
           $_SESSION['num2'] = null;
           echo "<h2>除数不能为0</h2>";
         } else {
           echo "<h2>".$_SESSION['result']."</h2>";
         }
     }
     ?>
     <form method="post" action="Calculator.php">
       <br>
       <button class="btn btn-info button" name="num" value="7">7</button>
       <button class="btn btn-info button" name="num" value="8">8</button>
       <button class="btn btn-info button" name="num" value="9">9</button>
       <button class="btn btn-info button" name="operator" value="/">/</button>
       <button class="btn btn-info button" name="allzero">C</button>
       <br>
       <button class="btn btn-info button" name="num" value="4">4</button>
       <button class="btn btn-info button" name="num" value="5">5</button>
       <button class="btn btn-info button" name="num" value="6">6</button>
       <button class="btn btn-info button" name="operator" value="*">*</button>
       <button class="btn btn-info button" name="zero">CE</button>
       <br>
       <button class="btn btn-info button" name="num" value="1">1</button>
       <button class="btn btn-info button" name="num" value="2">2</button>
       <button class="btn btn-info button" name="num" value="3">3</button>
       <button class="btn btn-info button" name="operator" value="-">-</button>
       <button class="btn btn-info button" name="delete">←</button>
       <br>
       <button class="btn btn-info button" name="num" value="0">0</button>
       <button class="btn btn-info button" name="num" value=".">.</button>
       <button class="btn btn-info button" name="equal" value="=">=</button>
       <button class="btn btn-info button" name="operator" value="+">+</button>
       <button class="btn btn-info button" name="plusminus">+/-</button>
     </form>
   </body>
 </html>
