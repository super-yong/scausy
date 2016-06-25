<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=devise-width initial-scale=1" />
		<title>思源工作室</title>
		<link rel="shortcut icon" href="/scausy/Public/img/logo_icon.ico" />
		<link rel="stylesheet" type="text/css" href="/scausy/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/scausy/Public/css/homepage.css" />
		<script src="/scausy/Public/js/jquery-2.1.4.min.js"></script>
		<script src="/scausy/Public/js/bootstrap.min.js"></script>
		<script src="/scausy/Public/js/homepage.js"></script>
		<script>
           var url="/scausy";
        </script>
	</head>

	<body>
		<div id="body_container">
			<div class="heading">
				<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="container-fluid">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								   <span class="sr-only">思源</span>
								   <span class="icon-bar"></span>
								   <span class="icon-bar"></span>
								   <span class="icon-bar"></span>
							    </button>
								<a class="navbar-brand" href="#">
									<img alt="logo" id="logo" src="/scausy/Public/img/logo1.png" width="50px">
									<img alt="font" id="font" src="/scausy/Public/img/font_siyuan1.png" width="100px" />
								</a>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav " id="mytab">
									<li class="<?php echo ($active[0]); ?>"><a href="/scausy/home/index/index" >首 &nbsp;页 </a></li>
									<li class="<?php echo ($active[1]); ?>"><a href="/scausy/home/index/news">通 &nbsp;知</a></li>
									<li class="<?php echo ($active[2]); ?>"><a href="/scausy/home/index/activity" >活动风采</a></li>
									<li class="<?php echo ($active[3]); ?>"><a href="/scausy/home/index/exemplar">模范频道</a></li>
									<li class="<?php echo ($active[4]); ?>"><a href="/scausy/home/index/organization">组织架构</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right" id="login">
									<li><a href="#" id="head_login">登 录</a></li>
								</ul>
							</div>
							<!-- /.navbar-collapse -->
						</div>
					</div>
					<!-- /.container-fluid -->
				</nav>
			</div>
			<!--
			作者：1320279417@qq.com
			时间：2015-08-09
			描述：登录小窗口
			-->
			<div class="login_pane" style="display: none;">
				<h4 style="padding-bottom: 20px;">请使用华农正方系统账号登录</h4>
				<form class="form" action="/scausy/home/login/zhengfang" method="POST">
					<!--  -->
					<div class="form-group">
						<!--					    <label class="sr-only" for="exampleInputName2" >学号</label>-->
						<input type="text" name="username" class="form-control" id="user_name" placeholder="请输入学号">
					</div>
					<div class="form-group">
						<!--<label class="sr-only" for="exampleInputPassword2">密码</label>-->
						<input type="password" name="password" class="form-control" id="password" placeholder="请输入正方密码">
					</div>
					<div class="form-group" id="validate" style="display: none;">
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="code" class="form-control" id="validate_code" placeholder="验证码">
							</div>
							<div class="col-md-6">
								<abbr title="看不清？点击更换验证码">
					  	 			<img id="img_code" src="/scausy/home/login/code" width="88px"/>
					  	 		</abbr>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-block btn-success" id="student_login">登 录</button>
				</form>
				<!--<div class="login_warning" style="margin-top: 15px;color: red;"></div>-->
			</div>
			<!--
           	作者：1320279417@qq.com
                      时间：2015-08-16
          	描述：进入个人中心/退出账号
            -->
			<div class="exit_log text-center" style="display: none;">
				<div class="pull-left log_hover" id="data_in">
					<a href="/scausy/home/personalInfo/personalInfo">个人中心</a>
				</div>
				<div class="pull-left log_hover" id="logout">
					<a href="/scausy/home/login/isLogout">退出登录</a>
				</div>
			</div>
			
			<!--<div class="goback-top">
				<a href="#" class="btn btn-lg"><span class=" glyphicon glyphicon-send" aria-hidden="true"></span></a>
			</div>-->