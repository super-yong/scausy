<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：1320279417@qq.com
	时间：2015-08-18
	描述：群发邮件
-->
<div class="jumbotron tab-pane" id="mass_email" style="margin-top: 30px;">
	<div class="container">
		<h2 style="border-bottom:1px solid darkgrey ;padding-bottom: 10px;">群发邮件</h2>
		<!--提交群发邮件表单-->
		<form class="form-horizontal" action="/scausy/home/admin/administrateEmail" method="POST">
			<div class="form-group">
				<label for="" class="col-md-2 control-label">群发对象:</label>
				<div class="col-md-5">
					<select class="form-control" name="grade" id="option_grade">
						<option>2015</option>
						<option>2014</option>
						<option>2013</option>
						<option>2012</option>
						<option>所有年级</option>
					</select>
				</div>
				<div class="col-md-5" name="group" id="option_group">
					<select class="form-control" name="group">
						<option>生委</option>
						<option>受助生</option>
						<option>其他</option>
						<option>全部</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="inputtitle" class="col-md-2 control-label">主题:</label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="inputtitle" name='subject' placeholder="请输入主题">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">正文:</label>
				<div class="col-md-10">
					<textarea class="form-control" rows="14" name='body' placeholder="请输入群发内容"></textarea>
				</div>
			</div>
			<div class="col-md-offset-11">
				<button id="send_email" type="submit" name="action" value="sentEmail" class="btn btn-lg btn-success">发&nbsp;&nbsp;&nbsp;&nbsp;送</button>
			</div>
		</form>
	</div>
</div>
</body>

</html>