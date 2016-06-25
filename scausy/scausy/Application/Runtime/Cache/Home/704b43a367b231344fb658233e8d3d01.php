<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=devise-width initial-scale=1" />
		<title>思源工作室</title>
		<link rel="shortcut icon" href="/scausy/Public/img/logo_icon.ico" />
		<link rel="stylesheet" type="text/css" href="/scausy/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/scausy/Public/assets/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="/scausy/Public/css/homepage.css" />
		<link rel="stylesheet" type="text/css" href="/scausy/Public/css/personalCenter.css" />
		<!--<link rel="stylesheet" href="css/responsive-nav.css">
        <script src="js/responsive-nav.js"></script>-->
		<script src="/scausy/Public/js/jquery-2.1.4.min.js"></script>
		<script src="/scausy/Public/js/bootstrap.min.js"></script>
		<!--<script src="/scausy/Public/js/personalCenter.js"></script>-->
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
					<div class="col-md-4">
						<h2 class="self_data">请完善个人资料</h2>
						<p class="lead">注意事项：</p>
						<p>1、带<span style="color: forestgreen;">&empty;</span>为正方系统资料，不可更改！</p>
						<p>2、带<span style="color: red;">&lowast;</span>为必填项，请正确填写！</p>
						<p>3、订阅邮箱我们将为你群发奖助贷通知！</p>
						<p>4、首次绑定邮箱需要验证，请查收邮箱验证信息！</p>
					</div>
					<div class="col-md-8" style="border-left: 1px solid beige;">

						<form class="form-horizontal" action="/scausy/home/login/sentEmail" model='GET'>
							<div class="form-group">
								<label for="inputEmail1" class="col-md-2 control-label"><span style="color: forestgreen;">&empty;</span>学院</label>
								<div class="col-md-8">
									<input type="text" value="<?php echo ($array[0]); ?>"  name="college" class="form-control" id="inputEmail1" placeholder="" readonly="true">
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1" class="col-md-2 control-label"><span style="color: forestgreen;">&empty;</span>姓名</label>
								<div class="col-md-8">
									<input type="text" value="<?php echo ($array[1]); ?>" name="name"  class="form-control" id="exampleInputPassword1" placeholder="Password" readonly="true">
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1" class="col-md-2 control-label"><span style="color: forestgreen;">&empty;</span>学号</label>
								<div class="col-md-8">
									<input type="email" value="<?php echo ($array[2]); ?>" name="studentnumber" class="form-control" id="exampleInputEmail1" placeholder="Email" readonly="true">
								</div>
							</div>
							<div class="form-group sr-only">
								<label for="exampleInputPassword1" class="col-md-2 control-label"><span style="color: forestgreen;">&empty;</span>年级</label>
								<div class="col-md-8">
									<input type="text" value="<?php echo ($array[3]); ?>" name="grade"  class="form-control" id="exampleInputPassword1" placeholder="Password" readonly="true">
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1" class="col-md-2 control-label"><span style="color: forestgreen;">&empty;</span>专业</label>
								<div class="col-md-8">
									<input type="text" value="<?php echo ($array[4]); ?>"  name="major" class="form-control" id="exampleInputPassword1" placeholder="Password" readonly="true">
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1"  class="col-md-2 control-label"><span style="color: forestgreen;">&empty;</span>班级</label>
								<div class="col-md-8">
									<input type="text" value="<?php echo ($array[5]); ?>"  name="class" class="form-control" id="exampleInputPassword1" placeholder="Password" readonly="true">
								</div>
							</div>
							<div class="form-group sr-only">
								<label for="exampleInputPassword1" class="col-md-2 control-label"></label>
								<div class="col-md-8">
									<input type="text" value="<?php echo ($array[6]); ?>" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password" readonly="true">
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1" class="col-md-2 control-label"><span style="color: red;">* </span>邮箱</label>
								<div class="col-md-8">
									<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1" class="col-md-2 control-label"><span style="color: red;">* </span>手机</label>
								<div class="col-md-8">
									<input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="长号/短号">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><span style="color: red;">* </span>分类</label>
								<div class=" col-md-8">
									<select class="form-control" name="group">
										<option>生委</option>
										<option>受助生</option>
										<option>生委且受助生</option>
										<option>其他</option>
									</select>
								</div>
							</div>
							<div class="col-md-3 col-md-offset-2" id="warning" style="color:red;">
							    <!--输出 错误 提示-->
							</div>
							<div class="col-md-2 col-md-offset-3">
							    <input class="btn btn-lg btn-success" id="btn_submit" type="submit" value="提交按钮" />
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</body>

</html>