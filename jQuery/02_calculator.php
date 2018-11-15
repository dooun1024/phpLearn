<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jQUery</title>

    <link>
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <style>
        .layout button {
            width: 70px;
            height: 50px;
            background-color: #48c7ce;
            border: none;
            margin-bottom:5px;
        }

        form button:hover {
            background-color: #328a91;
        }

        #topBar {
            color:red;
        }
    </style>

    <script>

        var x = null;

        var y = null;

        var ope = null;

        var result = 0;

        var show = 0;



        // 点击按钮，获取按钮的值
        $(function(){
            // 点击数字按钮，获取数字
            $("[name=num]").click(function(){
				// 获取此次点击的数值
                var current = $(this).val();
				console.log("点击了数字: "+current);

				if (x!== null){
                    if (ope !== null){

                    	if (y != null){
							y += current;
						} else {
                    		y = current;
                        }

                    } else {
                    	x +=current;
                    }

				} else {
					x = current;
                }

				// 获取x的值
				status();
				show(current);
            });

			$("[name=ope]").click(function(){
				// 获取此次点击的数值
				var current = $(this).val();
				console.log("点击了符号"+current);
				ope = current;

				status();
			});

			$("[name=eq]").click(function(){
				// 获取此次点击的数值
				var current = $(this).val();
				console.log("点击了等号"+current);


				x = null;

			});

			$("[name=other]").click(function(){
				// 获取此次点击的数值
				var current = $(this).val();
				console.log("点击了其他"+current);

				claer();

			});

            // 显示文字到面板
			function show(para) {
                // 改变元素的内容
                $("#topBar").html(para);
				$(".topBar").html(para);
			}

			function claer () {
				x = 0;
				y = 0;
				result = 0;
				ope = null;
            }

            function status(){
                var data = "x是"+x+"\ny是"+y+"\n符号是:"+"ope";
				console.log(data);
            }

		});

    </script>

    <div id="" >



    </div>>

    <div id="topBar" >#topBar</div>
    <span id="topBar" >#topBar</span>



</head>

<body>
<div id="topBar">123</div>
<div class="layout">
    <button name="num" value="1">1</button>
    <button name="num" value="2">2</button>
    <button name="ope" value="plus">+</button>
    <button name="ope" value="minus">-</button>
    <button name="eq" value="eq">=</button>
    <button name="other" value="clear">CE</button>
</div>



</body>
</html>