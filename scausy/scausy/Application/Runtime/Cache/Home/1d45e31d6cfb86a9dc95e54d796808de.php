<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：1320279417@qq.com
	时间：2015-08-31
	描述：管理组织架构
-->
	<div class="jumbotron tab-pane" id="mange_artilc">
		<div class="container">
			<h2 style="border-bottom:1px solid gainsboro ;padding-bottom: 10px;">管理组织架构</h2>
			<div>
				<table class="table table-striped table-hover" class="addtr">
					<tr>
						<th>板 块</th>
						<th>概 要</th>
						<th>操 作</th>
					</tr>
					<tr>
						<td>简 介</td>
						<td><?php echo (truncate($list[0]["introduction"],100,'',0)); ?></td>
						<td><a href="/scausy/home/organization/edit?group=introduction&department=简介" title="编辑">编辑</a></td>
					</tr>
					<tr>
						<td>主任团</td>
						<td><?php echo (truncate($list[0]["zhurentuan"],100,'',0)); ?></td>
						<td><a href="/scausy/home/organization/edit?group=zhurentuan&department=主任团" title="编辑">编辑</a></td>
					</tr>
					<tr>
						<td>助贷部</td>
						<td><?php echo (truncate($list[0]["zhudai"],100,'',0)); ?></td>
						<td><a href="/scausy/home/organization/edit?group=zhudai&department=助贷部" title="编辑">编辑</a></td>
					</tr>
					<tr>
						<td>秘书部</td>
						<td><?php echo (truncate($list[0]["mishu"],100,'',0)); ?></td>
						<td><a href="/scausy/home/organization/edit?group=mishu&department=秘书部" title="编辑">编辑</a></td>
					</tr>
					<tr>
						<td>宣传部</td>
						<td><?php echo (truncate($list[0]["xuanchuan"],100,'',0)); ?></td>
						<td><a href="/scausy/home/organization/edit?group=xuanchuan&department=宣传部" title="编辑">编辑</a></td>
					</tr>
					<tr>
						<td>勤工部</td>
						<td><?php echo (truncate($list[0]["qingong"],100,'',0)); ?></td>
						<td><a href="/scausy/home/organization/edit?group=qingong&department=勤工部" title="编辑">编辑</a></td>
					</tr>
					<tr>
						<td>实践部</td>
						<td><?php echo (truncate($list[0]["shijian"],100,'',0)); ?></td>
						<td><a href="/scausy/home/organization/edit?group=shijian&department=实践部" title="编辑">编辑</a></td>
					</tr>


				</table>
			</div>
		</div>
	</div>
</div>
</body>

</html>