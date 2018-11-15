<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="js/jquery-3.3.1.js"></script>

</head>
<body>
<button id="hover">悬空我</button>

<form>
<input id="text1" type="text"> <br>
<input id="text2" type="text" placeholder="请输入10个字符">
<span></span>
</form>


<input data-test-change="1" type="checkbox" name="aaa" id="" value="1">
<input data-test-change="1" type="checkbox" name="aaa" id="" value="2">
<select data-test-change="1" name="" id="">
    <option value="1">1</option>
    <option value="2">2</option>
</select>
<textarea data-test-change="1" name="" id="" cols="30" rows="10"></textarea>

<div id="msg"></div>
<script>
// 鼠标悬浮
$("#hover").hover(function(){
    $(this).css("background-color","red");
})
// 鼠标移出
$("#hover").mouseout(function(){
    $(this).css("background-color","yellow");
})

// 失去焦点
$("#text1").blur(function(){
    debug("我失去了焦点");
});

// 聚焦事件
$("#text1").focus(function(){
   debug("我仿佛是全世界的焦点");
});

// 键盘事件
$("#text2").keyup(function(){
   $("#text2+span").html($("#text2").val());
});

// 
function debug(msg){
    $("#msg").prepend(msg+"<br>");
}

$(window).resize(function(){
  debug("窗口被移动了");
});

$("[data-test-change]").change(function(){
    debug("内容被修改为了"+$(this).val());
})





</script>
</body>
</html>