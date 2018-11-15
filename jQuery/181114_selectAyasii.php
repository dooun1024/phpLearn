<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script
    src="js/jquery-3.3.1.js"></script>

    <style>
        .gray {
            background-color:#aabbcc85;
        }
        td {
            width:25px;
            height:25px;
        }
    </style>

</head>
<body>
    <label for="hardness1">
        <input type="radio" name="hardness" id="hardness1">新兵 
    </label>
    <label for="hardness2">
        <input type="radio" name="hardness" id="hardness2">老兵
    </label>

        兴趣爱好：
        <button id="xiaqiBtn">下棋</button>
    <div id="qipan" hidden>
        <button onclick="$('td').html(' ')">重置棋盘</button>
        <table id="table3">
        <?php for ($i=0;$i<10;$i++):?>
        <tr>
        <td> </td><td> </td><td> </td><td> </td>
        <td> </td><td> </td><td> </td><td> </td>
        <td> </td><td> </td><td> </td><td> </td>
        <td> </td><td> </td><td> </td><td> </td>
        </tr>
        <?php endfor;?>
        </table>
        <button id="noplay">承让，不玩儿了</button>
    <div>
    <script>
        // table2
        trs = $("#table2 tr:odd");
        console.log(trs);
        trs.addClass("gray");

        // 
        trs = $("#table3 tr:odd");
        trs2 = $("#table3 tr:even");
        trs.find("td:odd").addClass("gray");
        trs2.find("td:even").addClass("gray");
           var flag= "white"; 
        $("#table3 td").click(function(){
            
            if($(this).html()!=" "){
                // console.log($(this).html());
                return  ;
            }else{ 
                if(flag=="white"){
                    flag=0;
                    $(this).html("〇");
                }else{
                    flag="white";
                    $(this).html("●");
                }
            }
            //记录你当前的格子坐标X                

        })



        $("#xiaqiBtn").click(function(){
            $("#qipan").slideDown();
        })
        $("#noplay").click(function(){
            $("#qipan").slideUp();
        })


        

    </script>

</body>
</html>