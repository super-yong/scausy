<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=devise-width initial-scale=1" />
		<title>邮箱验证跳转页面</title>
		<link rel="shortcut icon" href="/scausy/Public/img/logo_icon.ico" />
		<link rel="stylesheet" type="text/css" href="/scausy/Public/css/bootstrap.min.css" />
		<style>
			#font{
				display: inline;
				margin-top: -10px;
				margin-left: -5px;
			}
			#logo {
				margin-top: -13px;
				display: inline;
			}
			#goback_home{
				font-size: 17px;
				font-weight: 600;
			}
			.goback{
				margin-top: 150px;
			}
			#goback_time{
				color: red;
			}
		</style>
		<script type="text/javascript"> 
		    //3秒钟之后跳转到指定的页面 
			var t=3;
			setInterval("refer()",1000); //启动3秒定时 
			function refer(){  
			    if(t==0){ 
			        location="http://scausy.cn"; //#设定跳转的链接地址 
			    } 
			    document.getElementById('goback_time').innerHTML=t; // 显示倒计时 
			    t--; // 计数器递减 
			} 
		</script>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" href="#">
						<img alt="logo" id="logo" src="/scausy/Public/img/logo1.png" width="50px">
						<img alt="font" id="font" src="/scausy/Public/img/font_siyuan1.png" width="100px" />
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right hidden-sm" id="goback">
						<li><a href="http://scausy.cn">返回主页</a></li>
					</ul>
				</div>
						<!-- /.navbar-collapse -->
			</div>
		</nav>
		<div class="goback text-center">
			<h3>提交成功，请在24小时内登陆邮箱，激活你的邮箱！</h3>
			<p><span id="goback_time"></span> 秒后为你跳转到主页面...</p>
		</div>
		     
	</body>
</html>