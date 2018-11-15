<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script
    src="js/jquery-3.3.1.js"></script>


</head>
<body>
    <div id="rongqi">
        
    </div>
    <div id="rongqi2">
        <h2>二号标题</h2>普通文字
    </div>
    


<script>

    $("#rongqi").html("<h1>大标题</h1>");
    $("#rongqi").text("<h1>大标题</h1>");

    console.log($("#rongqi2").html());
    console.log($("#rongqi2").text());

</script>
</body>
</html>