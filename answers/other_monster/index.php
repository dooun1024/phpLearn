<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

// session_destroy();
// print_r($monsterList);
?>
<h1>输入资料</h1>
    <form action="monster_list.php" method="get">
        
        种族<br>
        <input name="type" type="text" value="小精灵"><br>

        名称<br>
        <input name="m_name" type="text" value="皮卡乒"><br>
    
        等级<br>
        <input name="level" type="text" value="5"><br>

        出没地点<br>
        <input name="address" type="text" value="road202"><br>

        攻击力<br>
        <input name="atk" type="text" value="15"><br>

        <input type="submit">
    </form>
    
</body>
</html>