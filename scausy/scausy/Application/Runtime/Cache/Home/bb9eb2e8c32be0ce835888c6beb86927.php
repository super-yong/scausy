<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>管理员登陆成功界面</title>
		<meta name="viewport" content="width=devise-width initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="/TK/Public/css/bootstrap.min.css" />
		
		<!--<link rel="stylesheet" type="text/css" href="css/homepage.css" />-->
		<link rel="stylesheet" type="text/css" href="/TK/Public/css/managerLogin.css" />
		<script src="/TK/Public/js/jquery-2.1.4.min.js"></script>
		<script src="/TK/Public/js/bootstrap.min.js"></script>
		<script src="/TK/Public/js/managerLogin.js"></script>
	</head>
	<body>
		
		<div class="jumbotron" style="background-color: gray; color: white;">
		  <div class="container">
		  	<h2>欢迎来到思源管理员界面</h2>
		    <p>在这里，你可以查看、删除成员信息，发表通知，发表新闻...</p>
		  </div>
		</div>
		<div class="jumbotron" style="background-color: ;">
		  <div class="container">
		  	<h2>查看、删除成员信息</h2>
		    <div class="form" action="" id="form_screen">
		    	<div class="row">
		    		<div class="col-md-1 col-md-offset-2">筛选对象:</div>
		    		<div class="col-md-3">
		    			<select class="form-control" name="option_grade" id="option_grade">
		    			  <option>无</option>
						  <option>2015</option>
						  <option>2014</option>
						  <option>2013</option>
						  <option>2012</option>
						  <option>所有年级</option>
						</select>
		    		</div>
		    		<div class="col-md-3" name="option_group" id="option_group">
		    			<select class="form-control">
		    			  <option>无</option>
						  <option>生委</option>
						  <option>受助生</option>
						  <option>其他</option>
						  <option>全部</option>
						</select>
		    		</div>
		    		<div class="col-md-3">
		    			<button type="submit" class="btn btn-success" id="lookup">查看成员</button>
		    		</div>
		    	</div>
		    </div>
		    
		    <div>
		    	<table class="table table-striped">
		    		<thead class="addtr">
					  <tr>
					  	<th>姓名</th>
					  	<th>学号</th>
					  	<th>手机号码</th>
					  	<th>电子邮箱</th>
					  	<th>年级</th>
					  	<th>班级</th>
					  	<th>分类</th>
					  	<th>操作</th>
					  </tr>
					  <tr>
					  	<td>陈嘉兴</td>
					  	<td>201303320603</td>
					  	<td>18814127392</td>
					  	<td>1320279417@qq.com</td>
					  	<td>2013</td>
					  	<td>13计机6班</td>
					  	<td>生委</td>
					  	<td><a href="#">删除</a></td>
					  </tr>
					  <tr>
					  	<td>刘超勇</td>
					  	<td>201303320603</td>
					  	<td>18814127392</td>
					  	<td>1320279417@qq.com</td>
					  	<td>2013</td>
					  	<td>13计机6班</td>
					  	<td>其他</td>
					  	<td><a href="#">删除</a></td>
					  </tr>
					  <tr>
					  	<td>郑壮钦</td>
					  	<td>201503320603</td>
					  	<td>18814127392</td>
					  	<td>1320279417@qq.com</td>
					  	<td>2015</td>
					  	<td>15计机6班</td>
					  	<td>其他</td>
					  	<td><a href="#">删除</a></td>
					  </tr>
					  <tr>
					  	<td>龙燕</td>
					  	<td>201303320603</td>
					  	<td>18814127392</td>
					  	<td>1320279417@qq.com</td>
					  	<td>2014</td>
					  	<td>13计机6班</td>
					  	<td>受助生</td>
					  	<td><a href="#">删除</a></td>
					  </tr>
					</thead>
				</table>
		    </div>
		
		  </div>
		</div>
	</body>
</html>

		<!--1:c,g
		2:b,d,e,f,h
		3:a,b,d,f
		4:a,c,e,g,h
		每一个字母只能放入两个数字之间，如a只能放在3或4中
		 一、1的可放字母最少先安排，则：
		2:b,d,e,f,h
		3:a,b,d,f
		4:a,e,h
		二、4最少先安排，则有三种情况：
		(1)若选择a,e:
		   2:b,d,f,h
		   3:b,d,f
		   此时f只有3有，则还有两种情况3：b,f 或者 3：d,f
		(2)若选择a,h:
		   ....
		(3)若选择e,h：
		   ....-->