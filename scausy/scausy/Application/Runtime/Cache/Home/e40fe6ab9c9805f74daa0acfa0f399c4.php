<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=devise-width initial-scale=1" />
		<title>思源工作室</title>
		<link rel="shortcut icon" href="/scausy/Public/img/logo_icon.ico" />
		<link rel="stylesheet" type="text/css" href="/scausy/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/scausy/Public/css/personalCenter.css" />
		<script src="/scausy/Public/js/jquery-2.1.4.min.js"></script>
		<script src="/scausy/Public/js/bootstrap.min.js"></script>
		<script src="/scausy/Public/js/personalCenter.js"></script>
	</head>

	<body>
		<div class="self_heading">
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
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
							<ul class="nav navbar-nav " id="mytab">
								<li class="active"><a href="#home" data-toggle="tab">个人中心 </a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right hidden-sm" id="login">
								<li><a href="/scausy">返回主页</a></li>
							</ul>
						</div>
						<!-- /.navbar-collapse -->
					</div>
				</div>
				<!-- /.container-fluid -->
			</nav>
		</div>
		<div class="self_content">
			<div class="container">
				<div class="row" style="margin-top: 100px;">
					<div class="col-md-3 col-md-offset-1"  style="padding-bottom: 200px;border-right: 1px solid beige;">
						<ul class="nav nav-pills nav-stacked text-center btn-lg">
							<li class="active organ_li"><a href="#pesonal_data" data-toggle="tab"><span class="glyphicon glyphicon-user"></span> 个人资料</a></li>
							<li class="organ_li"><a href="#modify_data" data-toggle="tab"><span class="glyphicon glyphicon-edit"></span> 修改资料</a></li>
							<li class="organ_li"><a href="#logout" data-toggle="tab"><span class="glyphicon glyphicon-trash"></span> 注销用户</a></li>
						</ul>
					</div>
					<div class="col-md-7">
						<div class="tab-content">
							<div class="tab-pane active" id="pesonal_data">
								<!--<div class="siyuan_nav">-->
									<div class="table-responsive">
										<table class="table table-bordered table-striped">
											<caption class="">个人资料</caption>
												<tr>
													<th>学院</th>
													<td><?php echo ($list["college"]); ?></td>
												</tr>
												<tr>
													<th>姓名</th>
													<td><?php echo ($list["name"]); ?></td>
												</tr>
												<tr>
													<th>学号</th>
													<td><?php echo ($list["id"]); ?></td>
												</tr>
												<tr>
													<th>专业</th>
													<td><?php echo ($list["major"]); ?></td>
												</tr>
												<tr>
													<th>班级</th>
													<td><?php echo ($list["class"]); ?></td>
												</tr>
												<tr>
													<th>电子邮箱</th>
													<td><?php echo ($list["email"]); ?></td>
												</tr>
												<tr>
													<th>手机号码</th>
													<td><?php echo ($list["phone"]); ?></td>
												</tr>
												<tr>
													<th>分类</th>
													<td><?php echo ($list["groups"]); ?></td>
												</tr>
										</table>
									</div>
								<!--</div>-->
							</div>
							<div class="tab-pane" id="modify_data">
								<div class="siyuan_nav">
									<h3 class="siyuan_title">修改资料</h3>
									<!--<p>你可以修改邮箱、手机号和分类信息</p>-->
								</div>
								<form class="form-horizontal" action="/scausy/home/personalInfo/amend" method="POST" >
									<div class="form-group">
										<label for="student_email" class="col-md-2 control-label">电子邮箱 :</label>
										<div class="col-md-10">
											<input type="Email" class="form-control" id="student_email" name="email" value="<?php echo ($list["email"]); ?>" placeholder="电子邮箱">
										</div>
									</div>
									<div class="form-group">
										<label for="student_phone" class="col-md-2 control-label">手机号码 :</label>
										<div class="col-md-10">
											<input type="text" class="form-control" id="student_phone" name="phone" value="<?php echo ($list["phone"]); ?>"  placeholder="长号 / 短号">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">分 类 :</label>
										<div class=" col-md-10">
											<select class="form-control" name="group">
												<option <?php echo ($select[0]); ?>>生委</option>
												<option <?php echo ($select[1]); ?>>受助生</option>
												<option <?php echo ($select[2]); ?>>生委且受助生</option>
												<option <?php echo ($select[3]); ?>>其他</option>
											</select>
										</div>
									</div>
									<div class="col-md-2 col-md-offset-10">
										<input class="btn btn-lg btn-success modify_data" name="amend" id="btn_submit" type="submit" value="修改资料" />
									</div>
								</form>
							</div>
							<div class="tab-pane" id="logout">
								<div class="siyuan_nav">
									<h3 class="siyuan_title" style="padding-bottom: 10px;margin-bottom: 20px; border-bottom: 1px solid gainsboro;">注销用户</h3>
									<p><strong>温馨提示：</strong>一旦你注销用户，将不会再收到我们发的奖助贷通知。</p>
									<p>&nbsp;&nbsp;&nbsp;&nbsp;如需注销，请再次输入登录密码确认:</p>
									<form method="POST" action='/scausy/home/personalInfo/delete'>
										<div class="form-group  col-md-8">
										    <input type="password" class="form-control" name='password' placeholder="请输入密码" />
										</div>
										
										<div class="form-group">
											<button class="btn btn-danger logout">注销用户 <span class="glyphicon glyphicon-log-out"></span></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</body>

</html>