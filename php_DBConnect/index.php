<?php
include "util/Connector.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "element/header.php"; ?>
    <title>Document</title>

    <style>
        /* Footer */
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        #footer {
            background: #007b5e !important;
        }

        #footer h5 {
            padding-left: 10px;
            border-left: 3px solid #eeeeee;
            padding-bottom: 6px;
            margin-bottom: 20px;
            color: #ffffff;
        }

        #footer a {
            color: #ffffff;
            text-decoration: none !important;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }

        #footer ul.social li {
            padding: 3px 0;
        }

        #footer ul.social li a i {
            margin-right: 5px;
            font-size: 25px;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }

        #footer ul.social li:hover a i {
            font-size: 30px;
            margin-top: -10px;
        }

        #footer ul.social li a,
        #footer ul.quick-links li a {
            color: #ffffff;
        }

        #footer ul.social li a:hover {
            color: #eeeeee;
        }

        #footer ul.quick-links li {
            padding: 3px 0;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }

        #footer ul.quick-links li:hover {
            padding: 3px 0;
            margin-left: 5px;
            font-weight: 700;
        }

        #footer ul.quick-links li a i {
            margin-right: 5px;
        }

        #footer ul.quick-links li:hover a i {
            font-weight: 700;
        }

        @media (max-width: 767px) {
            #footer h5 {
                padding-left: 0;
                border-left: transparent;
                padding-bottom: 0px;
                margin-bottom: 10px;
            }
        }
    </style>

    <script>
        $(function(){
			// 党删除链接按下的时候执行ajax
            $(document).on("click", "[data-action=dele]", function(){
                var babaTr = $(this).parents("tr");
                console.log(babaTr);
                // ajax 通信删除id 为 当前链接的id的数据

                babaTr.remove();

                return false;
            });

			// 当增加数据表单提交时执行ajax
        	$("#add_form_ajax").submit(function(){
        		$.ajax({
                    url:$(this).attr("action"),
                    dataType:"json",
                    data:$(this).serialize(),// name=aaa&age=bbb&xxx=xxx
                    success:function(response){
                    	// 把返回的数据添加到表格里
						$("#monster_list").append(response.html);

						// console.log(response);

                        // 关闭模态框
						$('#add_monster_modal').modal('hide');
                    },
                    type:"get",
                    error:function (e) {
                    	$("body").append(e.responseText);
					}
                });

        		return false;
            })
        });
    </script>
</head>
<body>
<?php include "element/topNav.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <h1>数据一览</h1>

            <!-- Button trigger modal -->
            <button type="button" class="pull-right btn btn-primary btn-sm" data-toggle="modal" data-target="#add_monster_modal">
                增加Monster
            </button>

            <!-- Modal -->
            <div class="modal fade" id="add_monster_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">增加数据</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="add_form_ajax" action="do_add_monster_ajax.php">


                                <div class="form-group">
                                    <label for="type">怪物类型</label>
                                    <input type="text" name="type" id="type" class="form-control" value=""><br>
                                    <div class="form-group">
                                        <label for="m_name">怪物名</label>
                                        <input type="text" name="m_name" id="m_name" class="form-control" value=""><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="m_name">怪物等级</label>
                                        <input type="text" name="m_level" id="" class="form-control" value=""><br>
                                    </div>
                                    <div class="form-group">
                                        怪物出现
                                        <input type="text" name="address" id="" class="form-control" value="road"><br>
                                    </div>
                                    攻击力
                                    <input type="text" name="atk" id="" class="form-control" value=""><br>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-success" value="提交">
                            </form>

                        </div>


                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

		<?php
		$connObj = new Connector();
		$sql = "select * from monster limit 1000;";
		$result = $connObj->find($sql);

		if (!empty($result)) {

			// 输出数据
			echo "<table border=1 class=\"table table-bordered\" id='monster_list'>";
			echo "<tr><th>种族</th><th>名称</th><th>等级</th><th>出现地点</th><th>攻击力</th><th>操作</th></tr>";
			foreach ($result as $row) {
				echo "<tr>";
				echo "<td>{$row['type']}</td>";
				echo "<td><a href='view_monster.php?mno={$row['mno']}'>{$row['m_name']}</a></td>";
				echo "<td>{$row['m_level']}</td>";
				echo "<td>{$row['address']}</td>";
				echo "<td>{$row['atk']}</td>";
				echo "<td>
        <a href=do_delete_monster.php?mno={$row['mno']} data-action='dele'> 删除</a>
        <a href=update_monster.php?mno={$row['mno']} > 编辑</a>
        </td>";
				echo "</tr>";
			}
			echo "</table>";

		} else {
			echo "0 结果";
		}
		?>
    </div>
    <div class="col-md">

    </div>
</div>
</div>


<hr>

<!--<div class="fixed-bottom">-->
<!--    This is bottom-->
<!---->
<!--</div>-->


<!-- Footer -->
<!--<section id="footer">-->
<!--    <div class="container">-->
<!--        <div class="row text-center text-xs-center text-sm-left text-md-left">-->
<!--            <div class="col-xs-12 col-sm-4 col-md-4">-->
<!--                <h5>Quick links</h5>-->
<!--                <ul class="list-unstyled quick-links">-->
<!--                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>-->
<!--                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>-->
<!--                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>-->
<!--                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>-->
<!--                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-xs-12 col-sm-4 col-md-4">-->
<!--                <h5>Quick links</h5>-->
<!--                <ul class="list-unstyled quick-links">-->
<!--                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>-->
<!--                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>-->
<!--                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>-->
<!--                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>-->
<!--                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-xs-12 col-sm-4 col-md-4">-->
<!--                <h5>Quick links</h5>-->
<!--                <ul class="list-unstyled quick-links">-->
<!--                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>-->
<!--                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>-->
<!--                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>-->
<!--                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>-->
<!--                    <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">-->
<!--                <ul class="list-unstyled list-inline social text-center">-->
<!--                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>-->
<!--                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>-->
<!--                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>-->
<!--                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>-->
<!--                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            </hr>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">-->
<!--                <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc.-->
<!--                    Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>-->
<!--                <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a>-->
<!--                </p>-->
<!--            </div>-->
<!--            </hr>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
</body>
</html>
