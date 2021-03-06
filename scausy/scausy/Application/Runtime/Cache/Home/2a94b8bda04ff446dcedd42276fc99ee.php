<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=devise-width initial-scale=1" />
		<title>思源工作室网站</title>
		<link rel="stylesheet" type="text/css" href="/115.28.77.237/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/115.28.77.237/Public/css/homepage.css" />
		<script src="/115.28.77.237/Public/js/jquery-2.1.4.min.js"></script>
		<script src="/115.28.77.237/Public/js/bootstrap.min.js"></script>
		<script src="/115.28.77.237/Public/js/homepage.js"></script>
	</head>

	<body>
		<div id="body_container">
			<div class="heading">
				<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="container-fluid">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<a class="navbar-brand" href="#">
									<img alt="logo" id="logo" src="/115.28.77.237/Public/img/logo1.png" width="50px">
									<img alt="font" id="font" src="/115.28.77.237/Public/img/font_siyuan1.png" width="100px" />
								</a>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav " id="mytab">
									<li class="active"><a href="#home" data-toggle="tab">首 &nbsp;页 </a></li>
									<li><a href="#news" data-toggle="tab">通 &nbsp;知</a></li>
									<li><a href="#activity" data-toggle="tab">活动风采</a></li>
									<li><a href="#train" data-toggle="tab">奖助贷</a></li>
									<li><a href="#organization" data-toggle="tab">组织架构</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right hidden-sm" id="login">
									<li><a href="#" id="head_login">登 录</a></li>
								</ul>
							</div>
							<!-- /.navbar-collapse -->
						</div>
					</div>
					<!-- /.container-fluid -->
				</nav>
			</div>

			<div class="tab-content">
				<!--
					作者：1320279417@qq.com
					时间：2015-08-09
					描述：登录小窗口
				-->
				<div class="login_pane" style="display: none;">
					<h4 style="padding-bottom: 20px;">请使用华农正方系统账号登录</h4>
					<form class="form" action="http://scausy.aliapp.com/index.php/home/login/zhengfang" method="POST">
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
					  	 			<img id="img_code" src="http://scausy.aliapp.com/index.php/home/login/code" width="88px"/>
					  	 		</abbr>
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-block btn-success" id="student_login">登 录</button>
					</form>
					<div class="login_warning" style="margin-top: 15px;color: red;"></div>
				</div>
				<!--
                	作者：1320279417@qq.com
                	时间：2015-08-16
                	描述：进入个人中心/退出账号
                -->
                <div class="exit_log text-center" style="display: none;">
                		<div class="pull-left log_hover" id="data_in">
                			<a href="http://scausy.aliapp.com/index.php/home/personalInfo/personalInfo" >个人中心</a>
                		</div>
                		<div class="pull-left log_hover" id="logout">
                			<a href="http://scausy.aliapp.com/index.php/home/login/isLogout">退出登录</a>
                		</div>
                </div>
				
				<!--
               	作者：1320279417@qq.com
               	时间：2015-08-05
               	描述： @page1 home 首页
                -->
				<div class="tab-pane active" id="home">
					<div class="content">
						<div class="jumbotron" id="jumbotron_id">
							<div class="container text-center">
								<div class="jumbotron_content">
									<h1>思源工作室</h1>
									<p id="jumbotron_p"></p>
								</div>
							</div>
						</div>
						<div class="first">
							<div class="container contain">
								<div class="first_title">
									<h2 style="border-bottom: 2px solid grey;">最新通知</h2>
								</div>
								<div class="first_news">
									<div class="row">
										<div class="col-md-11 col-md-offset-1 ">
											<div class="news">
												<a href="#" class="alink">
													<span class="glyphicon glyphicon-list-alt"></span> 关于我院国家助学贷款申请前的操作说明
												</a>
												<div class=" time">
													<span><span class="glyphicon glyphicon-time"></span>2015-08-02</span>
												</div>
												<div class="hidden-xs hidden-sm editor">
													<span><span class="glyphicon glyphicon-edit"></span> 助贷部</span>
												</div>
												<div class="visible-md-inline visible-lg-inline open">
													<span><span class=" glyphicon glyphicon-eye-open"></span> 60</span>
												</div>
											</div>
											<div class="news">
												<a href="#" class="alink">
													<span class="glyphicon glyphicon-list-alt"></span> 关于数学与信息学院国家助学贷款申请前的操作说明
												</a>
												<div class="time">
													<span><span class="glyphicon glyphicon-time"></span>2015-08-02</span>
												</div>
												<div class="hidden-xs hidden-sm editor">
													<span><span class="glyphicon glyphicon-edit"></span> 助贷部</span>
												</div>
												<div class="visible-md-inline visible-lg-inline open">
													<span><span class=" glyphicon glyphicon-eye-open"></span> 60</span>
												</div>
											</div>
											<div class="news">
												<a href="#" class="alink">
													<span class="glyphicon glyphicon-list-alt"></span> 关于数学与信息学院国家助学贷款申请前的操作说明
												</a>
												<div class="time">
													<span><span class="glyphicon glyphicon-time"></span>2015-08-02</span>
												</div>
												<div class="hidden-xs hidden-sm editor">
													<span><span class="glyphicon glyphicon-edit"></span> 助贷部</span>
												</div>
												<div class="visible-md-inline visible-lg-inline open">
													<span><span class=" glyphicon glyphicon-eye-open"></span> 60</span>
												</div>
											</div>
											<div class="news">
												<a href="#" class="alink">
													<span class="glyphicon glyphicon-list-alt"></span> 关于数学与信息学院国家助学贷款申请前的操作说明
												</a>
												<div class="time">
													<span><span class="glyphicon glyphicon-time"></span>2015-08-02</span>
												</div>
												<div class="hidden-xs hidden-sm editor">
													<span><span class="glyphicon glyphicon-edit"></span> 助贷部</span>
												</div>
												<div class="visible-md-inline visible-lg-inline open">
													<span><span class=" glyphicon glyphicon-eye-open"></span> 60</span>
												</div>
											</div>
											<div class="news">
												<a href="#" class="alink">
													<span class="glyphicon glyphicon-list-alt"></span> 关于数学与信息学院国家助学贷款申请前的操作说明
												</a>
												<div class="time">
													<span><span class="glyphicon glyphicon-time"></span>2015-08-02</span>
												</div>
												<div class="hidden-xs hidden-sm editor">
													<span><span class="glyphicon glyphicon-edit"></span> 助贷部</span>
												</div>
												<div class="visible-md-inline visible-lg-inline open">
													<span><span class=" glyphicon glyphicon-eye-open"></span> 60</span>
												</div>
											</div>
											<div class="news">
												<a href="#" class="alink">
													<span class="glyphicon glyphicon-list-alt"></span> 关于数学与信息学院国家助学贷款申请前的操作说明
												</a>
												<div class="time">
													<span><span class="glyphicon glyphicon-time"></span>2015-08-02</span>
												</div>
												<div class="hidden-xs hidden-sm editor">
													<span><span class="glyphicon glyphicon-edit"></span> 助贷部</span>
												</div>
												<div class="visible-md-inline visible-lg-inline open">
													<span><span class=" glyphicon glyphicon-eye-open"></span> 60</span>
												</div>
											</div>
											<div class="news">
												<a href="#" class="alink">
													<span class="glyphicon glyphicon-list-alt"></span> 关于数学与信息学院国家助学贷款申请前的操作说明
												</a>
												<div class="time">
													<span><span class="glyphicon glyphicon-time"></span>2015-08-02</span>
												</div>
												<div class="hidden-xs hidden-sm editor">
													<span><span class="glyphicon glyphicon-edit"></span> 助贷部</span>
												</div>
												<div class="visible-md-inline visible-lg-inline open">
													<span><span class=" glyphicon glyphicon-eye-open"></span> 60</span>
												</div>
											</div>
											<div class="news">
												<a href="#" class="alink">
													<span class="glyphicon glyphicon-list-alt"></span> 关于数学与信息学院国家助学贷款申请前的操作说明
												</a>
												<div class="time">
													<span><span class="glyphicon glyphicon-time"></span>2015-08-02</span>
												</div>
												<div class="hidden-xs hidden-sm editor">
													<span><span class="glyphicon glyphicon-edit"></span> 助贷部</span>
												</div>
												<div class="visible-md-inline visible-lg-inline open">
													<span><span class=" glyphicon glyphicon-eye-open"></span> 60</span>
												</div>
											</div>
										</div>
										<!--<div class="col-md-6">
								           <p>关于数学与信息学院缓缴学费住宿费的相关通知</p>
								           <p>关于缓缴学费住宿费的相关通知</p>
								        </div>-->
									</div>
								</div>

							</div>
							<div class="first_foot hidden-xs">
								<h3 style="border-bottom: 2px solid gray; padding-bottom: 10px;">思源工作室</h3>
								<p> SiYuanGongZuoShi</p>
							</div>
						</div>
						
						<div class="second">
                             <!--描述：首页之活动风采-->
							<div class="container contain">
								<div class="second_title">
									<h2 style="border-bottom: 2px solid #E5E5E5;color: white;">活动风采</h2>
								</div>
								<div class="row">
									<div class="col-md-6" style="margin-top: 26px;">
										<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="border: 4px solid white;">
											<!-- Indicators -->
											<ol class="carousel-indicators">
												<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-example-generic" data-slide-to="1"></li>
												<li data-target="#carousel-example-generic" data-slide-to="2"></li>
											</ol>

											<!-- Wrapper for slides -->
											<div class="carousel carousel-inner" role="listbox">
												<div class="item active">
													<img src="/115.28.77.237/Public/img/10.jpg" alt="..." class="img img-responsive">
													<div class="carousel-caption">
														<h3>捐书活动</h3>
														<p>2015年5月8日在五山大草坪成功举行捐书活动</p>
													</div>
												</div>
												<div class="item">
													<img src="/115.28.77.237/Public/img/8.jpg" alt="暂时无法显示照片" class="img">
													<div class="carousel-caption">
														<h3>自强之星评比活动</h3>
														<p>2015年7月2日在院楼500举行自强之星评比活动</p>
													</div>
												</div>
												<div class="item">
													<img src="/115.28.77.237/Public/img/9.png" alt="暂时无法显示照片" class="img">
													<div class="carousel-caption">
														<h3>奖助贷会议</h3>
														<p>2015年7月8日在院楼500成功开展新生助班奖助贷培训会议</p>
													</div>
												</div>
											</div>

											<!-- Controls -->
											<!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
											    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
											    <span class="sr-only">Previous</span>
											  </a>
											  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
											    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
											    <span class="sr-only">Next</span>
											  </a>-->
											<!--</div>-->
											<!--<div class="container" id="siyuan">
											<img src="img/maxfont22.png" alt="思源工作室" width="80%" >-->
											<!--<h1>思源工作室 <small>助委会</small></h1>
									         <p>This is a simple hero unit, a simple jumbotron-stylecomponent for calling <br /> extra attention to 
									         	featured content or information.</p>-->
											<!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>-->
											<!--</div>-->
										</div>
									</div>
									<div class="col-md-6">
										<div class="second_p">
											<p>在思源，我们不仅仅是简单的工作</p>
											<p>还有丰富多彩的活动</p>
											<p>自强之星的评比、志愿者的服务活动、竹铭计划的开展</p>
											<p>捐书志愿活动、组织内部的春秋游、组织间的联谊...</p>
											<p>在这里，我们是一个让你倍感温暖的大家庭 !</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="three">
					    	<!--描述：首页之奖助贷-->
					    	<div class="container contain">
								<div class="three_title">
									<h2 style="border-bottom: 2px solid grey;">奖助贷</h2>
								</div>
							</div>
					    </div>
					    
					    <div class="four">
					    	<!--描述：首页之组织架构-->
					    	<div class="container contain">
								<div class="four_title">
									<h2 style="border-bottom: 2px solid #E5E5E5;color: white;">组织架构</h2>
								</div>
								<div class="row">
									<div class="col-md-10 col-md-offset-2">
										<!--<img src="img/组织架构1.png" height="350px"/>-->
										<img src="/115.28.77.237/Public/img/zuzhijiagou.png" height="350px"/>
									</div>
								</div>
							</div>
					    </div>
					</div>
				</div>
				<!--
               	作者：1320279417@qq.com
               	时间：2015-08-05
               	描述：@page2 news 最新通知
               -->
				<div class="tab-pane" id="news">
					<div class="content">
						<div class="page">
							<div class="container">
								<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<div class="page2_news">
											<div class="post_head text-center">
												<h2>
												   <a href="#"  style="color: black;text-decoration: none;">关于我院助学金申请流程通知</a>
											    </h2>
												<div class="post_meta">
													<span class="">
											    		编辑：<a href="#">刘树鑫老师</a>
											    	</span> &nbsp;&bull;
													<time> 2015-08-11</time>

												</div>
											</div>
											<div class="post_content">
												<!--<blockquote>-->
												<p class="lead" style="text-indent:22pt;">各年级各班：由于国开行国家助学贷款操作有所变化，为避免疏忽错漏，现在将最新的国家助学贷款申请前操作说明如下： 一、生源地助学贷款1. 请拟申请2015-2016学年生源地助学贷款的学生认真填写《华南农业大学拟申请2015-2016生源地助学贷款学生统计表》（附件1），
												</p>
												<!--</blockquote>-->
											</div>
											<div class="read_all">
												<a class="btn btn-lg btn-primary" href="#">阅读全文</a>
											</div>
											<div class="post_footer">
												<p>思源工作室</p>
											</div>
										</div>
										<div class="page2_news">
											<div class="post_head text-center">
												<h2>
												   <a href="#"  style="color: black;text-decoration: none;">关于我院助学金申请流程通知</a>
											    </h2>
												<div class="post_meta">
													<span class="">
											    		编辑：<a href="#">刘树鑫老师</a>
											    	</span> &nbsp;&bull;
													<time> 2015-08-11</time>

												</div>
											</div>
											<div class="post_content">
												<!--<blockquote>-->
												<p class="lead" style="text-indent:22pt;">各年级各班：由于国开行国家助学贷款操作有所变化，为避免疏忽错漏，现在将最新的国家助学贷款申请前操作说明如下： 一、生源地助学贷款1. 请拟申请2015-2016学年生源地助学贷款的学生认真填写《华南农业大学拟申请2015-2016生源地助学贷款学生统计表》（附件1）
												</p>
												<!--</blockquote>-->
											</div>
											<div class="read_all">
												<a class="btn btn-lg btn-primary" href="#">阅读全文</a>
											</div>
											<div class="post_footer">
												<p>思源工作室</p>
											</div>
										</div>
										<nav class="text-center">
											<ul class="pagination pagination-lg">
												<li class="disabled">
													<a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
												</li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">- -</a></li>
												<li><a href="#">8</a></li>
												<li><a href="#">9</a></li>
												<li><a href="#">10</a></li>
												<li>
													<a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--
               	作者：1320279417@qq.com
               	时间：2015-08-05
               	描述：@page3 train 奖助贷培训
               -->
				<div class="tab-pane" id="train">
					<div class="content">
						<div class="page">
							<div class="container">
								<div class="row">

								</div>
							</div>
						</div>
					</div>
				</div>
				=
				<!--
               	作者：1320279417@qq.com
               	时间：2015-08-05
               	描述：page4 activity 活动风采
               -->
				<div class="tab-pane" id="activity">
					<div class="content" style="margin-top:30px ;">
						<div class="page">
							<div class="container">
								<div class="col-md-10 col-md-offset-1">
									<div class="page2_news">
										<div class="post_head text-center">
											<h2>
												   <a href="#"  style="color: black;text-decoration: none;">关于我院助学金申请流程通知</a>
											    </h2>
											<div class="post_meta">
												<span class="">
											    		编辑：<a href="#">刘树鑫老师</a>
											    	</span> &nbsp;&bull;
												<time> 2015-08-11</time>

											</div>
										</div>
										<div class="post_content">
											<!--<blockquote>-->
											<p class="lead" style="text-indent:22pt;">各年级各班：由于国开行国家助学贷款操作有所变化，为避免疏忽错漏，现在将最新的国家助学贷款申请前操作说明如下： 一、生源地助学贷款1. 请拟申请2015-2016学年生源地助学贷款的学生认真填写《华南农业大学拟申请2015-2016生源地助学贷款学生统计表》
											</p>
											<!--</blockquote>-->
										</div>
										<div class="read_all">
											<a class="btn btn-lg btn-primary" href="#">阅读全文</a>
										</div>
										<div class="post_footer">
											<p>思源工作室</p>
										</div>
									</div>
									<div class="page2_news">
										<div class="post_head text-center">
											<h2>
												   <a href="#"  style="color: black;text-decoration: none;">关于我院助学金申请流程通知</a>
											    </h2>
											<div class="post_meta">
												<span class="">
											    		编辑：<a href="#">刘树鑫老师</a>
											    	</span> &nbsp;&bull;
												<time> 2015-08-11</time>

											</div>
										</div>
										<div class="post_content">
											<!--<blockquote>-->
											<p class="lead" style="text-indent:22pt;">各年级各班：由于国开行国家助学贷款操作有所变化，为避免疏忽错漏，现在将最新的国家助学贷款申请前操作说明如下： 一、生源地助学贷款1. 请拟申请2015-2016学年生源地助学贷款的学生认真填写《华南农业大学拟申请2015-2016生源地助学贷款学生统计表》
											</p>
											<!--</blockquote>-->
										</div>
										<div class="read_all">
											<a class="btn btn-lg btn-primary" href="#">阅读全文</a>
										</div>
										<div class="post_footer">
											<p>思源工作室</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--
               	作者：1320279417@qq.com
               	时间：2015-08-05
               	描述：page5 organzation 组织架构
               -->
				<div class="tab-pane" id="organization">
					<div class="content" style="margin-top: 28px;">
						<div class="page" style="padding: 20px 0px;">
							<div class="container">
								<div class="row" style="z-index: 1;">
									<div class="col-md-3" style="border-right: 1px dotted #31B0D5; margin-bottom: 20px;">
										<div class="organ_logo">
											<img src="/115.28.77.237/Public/img/logo1.png" />
										</div>
										<ul class="nav nav-pills nav-stacked text-center btn-lg" id="siyuan_tab">
											<li class="active organ_li"><a href="#siyuanjianjie" data-toggle="tab">思源 简介</a></li>
											<li class="organ_li"><a href="#zhuren" data-toggle="tab">主任团</a></li>
											<li class="organ_li"><a href="#zhudai" data-toggle="tab">助贷部</a></li>
											<li class="organ_li"><a href="#mishu" data-toggle="tab">秘书部</a></li>
											<li class="organ_li"><a href="#xuanchuan" data-toggle="tab">宣传部</a></li>
											<li class="organ_li"><a href="#qingong" data-toggle="tab">勤工部</a></li>
											<li class="organ_li"><a href="#shijian" data-toggle="tab">实践部</a></li>
										</ul>
									</div>
									<div class="col-md-9">
										<div class="tab-content">
											<div class="tab-pane active" id="siyuanjianjie">
												<div class="siyuan_nav">
													<h2 class="siyuan_title">思源简介</h2>
													<p>数学与信息学院（软件学院）思源工作室，原名助学管理委员会，成立于2011年10月，是一个独立于学院院团委学生会、
														由学院辅导员直接指导的学生组织。“助委会”以服务师生，奉献社会为宗旨，直接对学院辅导员负责，协助落实学院
														“奖、勤、助、贷、补、减、免”等工作，管理与家庭经济困难学生的相关工作，组织开展一系列助学帮困的活动，定期
														开展志愿服务活动，收集和反馈学生意见，搭建学生与学院交流的平台。
													</p>
												</div>

											</div>
											<div class="tab-pane" id="zhuren">
												<div class="siyuan_nav">
													<h2 class="siyuan_title">主任团</h2>
													<p>志莲，陈嘉兴，郑壮钦</p>
												</div>
											</div>
											<div class="tab-pane" id="zhudai">
												<div class="siyuan_nav">
													<h2 class="siyuan_title">助贷部</h2>
													<p>助贷部</p>
													<p>助贷部</p>
												</div>
											</div>
											<div class="tab-pane" id="mishu">
												<div class="siyuan_nav">
													<h2 class="siyuan_title">秘书部</h2>
													<p>秘书部</p>
													<p>秘书部</p>
												</div>
											</div>
											<div class="tab-pane" id="xuanchuan">
												<div class="siyuan_nav">
													<h2 class="siyuan_title">宣传部</h2>
													<p>宣传部</p>
													<p>宣传部</p>
													<article>
														<span>作者：嘉兴</span> .
														<time class="time">2015-08-07</time>
													</article>

												</div>
											</div>
											<div class="tab-pane" id="qingong">
												<div class="siyuan_nav">
													<h2 class="siyuan_title">勤工部</h2>
													<p>勤工部</p>
													<p>勤工部</p>
													<p>勤工部</p>
												</div>
											</div>
											<div class="tab-pane" id="shijian">
												<div class="siyuan_nav">
													<h2 class="siyuan_title">实践部</h2>
													<p>实践部</p>
													<p>实践部</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
			<div class="footing">
				<div class="container">
					<div class="row" id="row">
						<div class="col-xs-6 col-md-4">
							<div class="widget">
								<h4 class="link_title">友情链接</h4>
								<div class="friend_link">
									<!--<a href="#">华南农业大学</a>-->
									<a href="#">数学与信息学院</a>
									<a href="#">华农校勤工</a>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-4">
							<div class="widget">
								<h4 class="link_title">关于我们</h4>
								<div class="friend_link">
									<!--<a href="#">华南农业大学</a>-->
									<a href="#">关于思源</a>
									<a href="#">关于本站</a>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-4">
							<div class="widget">
								<h4 class="link_title">联系我们</h4>
								<div class="friend_link">
									<a>生委群:279471084</a>
									<a>受助生群:704810480</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="foot_last">
				<p>华南农业大学 数学与信息学院软件学院 思源工作室 版权所有</p>
			</div>
		</div>
	</body>

</html>