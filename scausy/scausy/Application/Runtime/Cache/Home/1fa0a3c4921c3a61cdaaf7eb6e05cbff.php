<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>思源管理员界面</title>
		<link rel="shortcut icon" href="/scausy/Public/img/logo_icon.ico" />
		<meta name="viewport" content="width=devise-width initial-scale=1" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" type="text/css" href="/scausy/Public/css/bootstrap.min.css" />
		<!-- <link rel="stylesheet" type="text/css" href="/scausy/Public/css/homepage.css" /> -->
		<link rel="stylesheet" type="text/css" href="/scausy/Public/css/managerLogin.css" /> 
		<script src="/scausy/Public/js/jquery-2.1.4.min.js"></script>
		<script src="/scausy/Public/js/bootstrap.min.js"></script>
		<script src="/scausy/Public/js/managerLogin.js"></script>
	    <script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
        <script type='text/javascript' src='/scausy/Public/js/picture/jquery.modal.js'></script>
        <script type='text/javascript' src='/scausy/Public/js/picture/site.js'></script>
        <script type="text/javascript" charset="utf-8" src="/scausy/Public/ueditor/ueditor.config.js"></script>
        <script type="text/javascript" charset="utf-8" src="/scausy/Public/ueditor/ueditor.all.min.js"> </script>
        <script type="text/javascript" charset="utf-8" src="/scausy/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
        

	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
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
						<ul class="nav navbar-nav" id="mytab">
							<li>
								<a href="#"  data-toggle="dropdown">文 章 <span class="caret"></span></a>
							    <ul class="dropdown-menu">
                                    <li  style="margin-left: 0px;"><a href="/scausy/index.php/home/admin/administrateArticle?action=publish">发表文章</a></li>
                                    <li  style="margin-left: 0px;"><a href="/scausy/index.php/home/admin/administrateArticle?action=adminstrate">管理文章</a></li>
                                </ul>
							</li>
							<li class=<?php echo ($array["content2"]); ?> ><a href="/scausy/index.php/home/admin/administrateStu?P=1&grade=所有年级&group=全部" >成员管理</a></li>
							<li class=<?php echo ($array["content3"]); ?> ><a href="/scausy/home/admin/administrateEmail" >群发邮件</a></li>
							<li class=<?php echo ($array["content1"]); ?> ><a href="/scausy/home/admin/administrateOrganization" >组织架构</a></li>
							<li class=<?php echo ($array["content4"]); ?> ><a href="/scausy/home/admin/administrateActivity" >图片管理</a></li>
							<li class=<?php echo ($array["content7"]); ?> ><a href="/scausy/home/admin/administrateExemplar" >模范频道</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
			</div>
			<!-- /.container-fluid -->
		</nav>