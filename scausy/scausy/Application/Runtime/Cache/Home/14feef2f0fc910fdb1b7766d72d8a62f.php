<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=devise-width initial-scale=1" />
		<title>邮箱验证跳转页面</title>
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
		</style>
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
					<ul class="nav navbar-nav navbar-right hidden-sm" id="goback_home">
						<li><a href="index.html">返回主页</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="goback text-center">
			<h3>邮箱验证失败！</h3>
			<p>请确保邮箱链接是否过期？请到主页登录再次发送邮箱验证链接！ 点击返回<a href="/scausy">思源工作室</a></p>
		</div>
		     
	</body>
</html>