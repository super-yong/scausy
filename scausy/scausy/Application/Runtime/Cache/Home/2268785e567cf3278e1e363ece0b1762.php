<?php if (!defined('THINK_PATH')) exit();?>	<div class=" tab-pane active" id="public">
		<div class="jumbotron" style="background-color:gainsboro;margin-top:0px">
			<div class="container">
				<h2 style="border-bottom:1px solid darkgrey ;padding-bottom: 10px;">编辑<?php echo ($list["department"]); ?>架构</h2>
				<!--提交组织架构表单-->
				<form class="form-horizontal" action="/scausy/home/organization/updata"  method="post">
					<div class="form-group">
						<div id="myEditor" class="col-md-11 col-md-offset-1">
							<script type="text/javascript">
								var editor = new baidu.editor.ui.Editor({
									initialContent: '<?php echo ($list["message"]); ?>'
								});
								editor.render("myEditor");
							</script>
						</div>
					</div>
                 <input type="hidden" value="<?php echo ($list["group"]); ?>" name="group"/>
				<div class="col-md-offset-11">
					<button type="submit" class="btn btn-lg btn-success">完成编辑</button>
				</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>