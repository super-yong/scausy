<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：1320279417@qq.com
	时间：2015-08-31
	描述：管理文章
-->
	<div class="jumbotron tab-pane" id="mange_artilc">
		<div class="container">
			<h2 style="border-bottom:1px solid gainsboro ;padding-bottom: 10px;">管理<?php echo ($article); ?></h2>
			<!--提交查看成员表单-->
			<form class="form-horizontal" action="/scausy/home/wenzhangList"  method='POST'>
				<div class="form-group">
					<label class="col-sm-3 col-md-3 control-label">请选择文章分类:</label>
					<div class="col-sm-8 col-md-8">
						<select class="form-control" name="select">
							<option>通知</option>
							<option>新闻</option>
						</select>
					</div>
						<div class="col-md-1">
						<button type="submit" class="btn btn-success" id="lookup">选择</button>
					</div>
				</div>
	
			</form>
			<div>
				<table class="table table-striped table-hover" class="addtr">
					<tr>
						<th>标 题</th>
						<th>作 者</th>
						<th>查阅次数</th>
						<th>最后一次更新</th>
						<th>操 作</th>
					</tr>
					<?php if(is_array($list)): foreach($list as $key=>$student): ?><tr>
						<td><?php echo ($student["subject"]); ?></td>
						<td><?php echo ($student["author"]); ?></td>
						<td><?php echo ($student["createtime"]); ?></td>
						<td><?php echo (date('Y-m-d H:i',$student["lastmodifytime"])); ?></td>
						<td><a href="/scausy/home/wenzhangList/delete?news=<?php echo ($delete); ?>&id=<?php echo ($student["id"]); ?>" title="删除">删除</a><a href="/scausy/home/wenzhangList/edit?news=<?php echo ($delete); ?>&id=<?php echo ($student["id"]); ?>" title="修改">修改</a></td>
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
				    <p style="padding-top: 25px;">共有<span><?php echo ($count); ?></span>则<?php echo ($article); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

</html>