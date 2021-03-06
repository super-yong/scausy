<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=devise-width initial-scale=1" />
		<title>思源工作室</title>
		<link rel="shortcut icon" href="/scausy/Public/img/logo_icon.ico" />
		<link rel="stylesheet" type="text/css" href="/scausy/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/scausy/Public/css/homepage.css" />
		<link rel="stylesheet" type="text/css" href="/scausy/Public/css/openNews.css" />
		<script src="/scausy/Public/js/jquery-2.1.4.min.js"></script>
		<script src="/scausy/Public/js/bootstrap.min.js"></script>
		<script src="/scausy/Public/js/homepage.js"></script>
	</head>

	<body>
		<div class="heading">
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
							<ul class="nav navbar-nav " id="mytab">
								<li><a href="/scausy" >首 &nbsp;页 </a></li>
								<li class="active"><a href="/scausy/home/index/news" >通 &nbsp;知</a></li>
								<li><a href="/scausy/home/index/activity" data-toggle="tab">活动风采</a></li>
								<li><a href="/scausy/home/index/exemplar">模范频道</a></li>
								<li><a href="/scausy/home/index/organization" >组织架构</a></li>
							</ul>
							<!--<ul class="nav navbar-nav navbar-right hidden-sm" id="login">-->
								<!--<li><a href="#" class="btn"><span class="glyphicon glyphicon-user"></span></a></li>-->
								<!--<li><a href="#">返回主页</a></li>-->
							<!--</ul>-->
						</div>
						<!-- /.navbar-collapse -->
					</div>
				</div>
				<!-- /.container-fluid -->
			</nav>
		</div>
		<div class="news_content" style="min-height: 750px;background-color:#EBEBEB;margin-top: 50px;padding: 4%;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page2_news">
							<div class="post_head text-center">
								<h2>
									<a href="#"  style="color: black;text-decoration: none;"><?php echo ($list[0]["subject"]); ?></a>
							    </h2>
								<div class="post_meta">
									<span class="">
										编辑：<a href="#"><?php echo ($list[0]["author"]); ?></a>
							    	</span> &nbsp;&bull;
									<time><?php echo (date('Y-m-d H:i',$list[0]["lastmodifytime"])); ?></time>
									<span> 点击次数:<a href="#"><?php echo ($list[0]["createtime"]); ?></a></span>
								</div>
							</div>
							<!--
                            	作者：1320279417@qq.com
                            	时间：2015-09-07
                            	描述：新闻主要内容放在post_content里
                            -->
							<div class="post_content">
								<!--<blockquote>-->
								<?php echo (stripslashes(htmlspecialchars_decode($list[0]["message"]))); ?>
								<!--</blockquote>-->
							</div>
							<div class="post_footer">
								<p>思源工作室</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>