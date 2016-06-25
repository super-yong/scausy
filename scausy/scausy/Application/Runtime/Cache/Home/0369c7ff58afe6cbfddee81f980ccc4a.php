<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：1320279417@qq.com
	时间：2015-08-18
	描述：发表文章
-->
	<div class=" tab-pane active" id="public">
		<div class="jumbotron" style="background-color: gray; color: white;min-height: 100px">
			<div class="container">
				<h2>欢迎来到思源管理员界面</h2>
				<p>在这里，你可以发表、删除通知 / 新闻,查看、删除成员信息,群发邮件...</p>
			</div>
		</div>

		<div class="jumbotron" style="background-color:gainsboro;margin-top:0px">
			<div class="container">
				<h2 style="border-bottom:1px solid darkgrey ;padding-bottom: 10px;">发表通知 / 新闻稿</h2>
				<!--提交发表新闻表单-->
				<form class="form-horizontal" action="/scausy/home/wenzhangList/<?php echo ($btn_ok_act); ?>"  method="post">
					<div class="form-group">
						<label class="col-sm-2 col-md-2 control-label">文章分类:</label>
						<div class="col-sm-4 col-md-4">
							<select class="form-control" name="select">
								<option>通知</option>
								<option>新闻</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="news_title" class="col-md-2 control-label">文章标题:</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="news_title" name="subject" placeholder="请输入标题..." value="<?php echo ($article_item["subject"]); ?>" >
						</div>
					</div>
					<div class="form-group">
						<div id="myEditor" class="col-md-11 col-md-offset-1">
							<script type="text/javascript">
								var editor = new baidu.editor.ui.Editor({
									initialContent: '<?php echo ($article_item["message"]); ?>'
								});
								editor.render("myEditor");
							</script>
						</div>
					</div>
				 <input type="hidden" value="<?php echo ($article_item["id"]); ?>" name="id"/>
                 <input type="hidden" value="<?php echo ($group); ?>" name="group"/>
				<div class="col-md-offset-11">
					<button type="submit" class="btn btn-lg btn-success"><?php echo ($btn_ok_text); ?></button>
				</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>