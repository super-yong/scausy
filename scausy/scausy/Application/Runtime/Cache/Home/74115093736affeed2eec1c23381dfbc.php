<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：1320279417@qq.com
	时间：2015-10-28
	描述：模范频道-管理征文
-->
<div class="jumbotron tab-pane" id="mass_email" style="margin-top: 20px;">
	<!--<div class="container">-->
		<div class="row">
			<div class="col-md-2" style="background-color: #313131;height: 800px;position: fixed;">
				<ul class="nav nav-stacked nav-mo">
				  <li role="presentation" class="active"><a href="/scausy/home/admin/administrateExemplar">发表</a></li>
				  <li role="presentation"><a href="/scausy/home/exemplar/administrate">管理</a></li>
				  <!--<li role="presentation"><a href="#">Messages</a></li>-->
				</ul>
			</div>
			<div class="col-md-10 col-md-offset-2">
				<div class="container"  style="margin-top: 30px;width: 90%;">
					<h2 style="border-bottom:1px solid darkgrey ;padding-bottom: 10px;">管理</h2>
					<div>
						<table class="table table-striped table-hover addtr" style="margin: auto;">
							<tr>
								<th>标 签</th>
								<th>标 题</th>
								<th>作 者</th>
								<th>最后一次更新</th>
								<th>操 作</th>
							</tr>
						    <?php if(is_array($list)): foreach($list as $key=>$list): ?><tr>
								<td><?php echo ($list["tag"]); ?></td>
								<td><?php echo ($list["title"]); ?></td>
								<td><?php echo ($list["author"]); ?></td>
								<td><?php echo (date('Y-m-d H:i',$list["updatetime"])); ?></td>
								<td><a  href="/scausy/home/exemplar/delete?action=delete&id=<?php echo ($list["id"]); ?>" title="删除">删除</a><a href="/scausy/home/exemplar/update?id=<?php echo ($list["id"]); ?>" title="修改">修改</a></td>
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
						    <!--<p style="padding-top: 25px;">共有2<span><?php echo ($count); ?></span>则<?php echo ($article); ?></p>-->
						</div>
					</div>
				</div>
			</div>
		</div>

</div>

</body>

</html>