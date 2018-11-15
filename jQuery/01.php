<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jQUery</title>
	<script
		src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous"></script>

</head>

<body>
点击开关灯泡<br>
<img src="light_on.png" id="light">

<script>
	// 获取图片对象
	let img = $("#light");

	// 点击事件执行的动作
	let dianji = function (){
		console.log("我被点了");

		// 获取src (属性)的值
		src = img.attr("src");

		// 判断src属性的值
		if (src === "light_on.png") {
			// 把他的src变成 light_off.png
			img.attr("src", "light_off.png");
		} else {
			// 把他的src变成 light_on.png
			img.attr("src", "light_on.png");
		}
	};

	// 点击事件
	img.click(dianji);



</script>


</body>
</html>