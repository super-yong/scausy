<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：1320279417@qq.com
	时间：2015-08-18
	描述：成员管理
-->
	<div class="jumbotron tab-pane" id="manage">
		<div class="container">
			<h2 style="border-bottom:1px solid gainsboro ;padding-bottom: 10px;">查看、删除成员信息</h2>
			<!--提交查看成员表单-->
			<form class="form-horizontal" action="/scausy/home/admin/administrateStu" id="form_screen" method='GET'>
				<input name="P" value="1"  display='none' type='hidden'>
				<div class="form-group">
					<label class="col-md-1 text-right" style="padding-top: 8px;">筛选对象:</label>
					<div class="col-md-4">
						<select class="form-control" name="grade" id="grade">
							<option <?php echo ($select["a"]); ?>>2015</option>
							<option <?php echo ($select["b"]); ?>>2014</option>
							<option <?php echo ($select["c"]); ?>>2013</option>
							<option <?php echo ($select["d"]); ?>>2012</option>
							<option <?php echo ($select["e"]); ?>>所有年级</option>
						</select>
					</div>
					<div class="col-md-4">
						<select class="form-control" name="group" id="group">
							<option <?php echo ($select["f"]); ?>>生委</option>
							<option <?php echo ($select["g"]); ?>>受助生</option>
							<option <?php echo ($select["h"]); ?>>其他</option>
							<option <?php echo ($select["i"]); ?>>全部</option>
						</select>
					</div>

					<div class="col-md-1">
						<button type="submit" class="btn btn-success" id="lookup">查看成员</button>
					</div>

					<div class="col-md-1">
						<button type="submit" class="btn btn-success" id="export_data" name='action' value='true'>导出数据</button>
					</div>
				</div>
			</form>
			<!--成员列表 -->
			<div>
				<table class="table table-striped table-hover" class="addtr">
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
					<?php if(is_array($list)): foreach($list as $key=>$student): ?><tr>
						<td><?php echo ($student["name"]); ?></td>
						<td><?php echo ($student["id"]); ?></td>
						<td><?php echo ($student["phone"]); ?></td>
						<td><?php echo ($student["email"]); ?></td>
						<td><?php echo ($student["grade"]); ?></td>
						<td><?php echo ($student["class"]); ?></td>
						<td><?php echo ($student["groups"]); ?></td>
						<td><a href="/scausy/home/admin/deleteStudent?id=<?php echo ($student["id"]); ?>">删除</a></td>
					</tr><?php endforeach; endif; ?>
				</table>

			</div>
			<div class="row">
				<nav class="text-right col-md-10">
					<ul class="pagination pagination-lg">
						<?php echo ($page); ?>
					</ul>
				</nav>
				<div class="col=md-2">
					<p style="padding-top: 25px;">共有<span><?php echo ($count); ?></span>位学生</p>
				</div>
			</div>

		</div>
	

</div>
</body>

</html>