<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：1320279417@qq.com
	时间：2015-09-09
	描述：管理照片
-->
<div class="jumbotron tab-pane" id="mange_picture">
	<div class="container">
		<div class="row">
			<h2 class="col-md-2" style="border-bottom:1px solid gainsboro ;padding-bottom: 10px;">管理照片</h2>
		</div>

		<!--提交表单-->
		<!--<form class="form-horizontal" action=""  method='POST'>
				<div class="form-group">
					
				</div>
			</form>-->
		<div>
			<table class="table table-striped table-hover" class="addtr">
				<tr>
					<th>图 片</th>
					<th>主 题</th>
					<th>描 述</th>
					<th>编 辑</th>
					<th>更新时间</th>
					<th>操 作</th>
				</tr>
				<?php if(is_array($list)): foreach($list as $key=>$list): ?><tr>
						<td><img src="<?php echo ($list["picture"]); ?>" alt="暂时无法显示照片" style="width: 60px;"></td>
						<td><?php echo ($list["subject"]); ?></td>
						<td><?php echo ($list["describe"]); ?></td>
						<td><?php echo ($list["author"]); ?></td>
						<td><?php echo (date('Y-m-d H:i',$list["updatetime"])); ?></td>
						<td>
							<section><a class="modalLink btn btn-success" href="#<?php echo ($list["id"]); ?>">更新</a></section>
						</td>
					</tr>
					<div class="overlay"></div>

					<div id="<?php echo ($list["id"]); ?>" class="modal">
						<div class="row">
							<h5 class="col-md-2" style="border-bottom:1px solid gainsboro ;padding-bottom: 10px;width:100px;">更新照片</h5>
						</div>
						<div class="form-group">
							<label for="inputtitle" class="col-md-2 control-label">照片:</label>
							<div class="col-md-10">
								<button id="<?php echo ($list["id"]); ?>" onclick="upImage(this);"> <img id="<?php echo ($list["id"]); ?>img" src="<?php echo ($list["picture"]); ?>" alt="暂时无法显示照片" class="addtr" style="width: 100px;"></button>

							</div>
						</div>
						<form class="form-horizontal" action="/scausy/home/picture/update" method="POST">
							<input type="type" style="display:none;" name="id" value="<?php echo ($list["id"]); ?>">
							<input type="type" style="display:none;" name="picture" value="<?php echo ($list["picture"]); ?>" id="<?php echo ($list["id"]); ?>picture">
							<div class="form-group">
								<label for="inputtitle" class="col-md-2 control-label">主题:</label>
								<div class="col-md-10">
									<input type="text" class="form-control" id="inputtitle" name='subject' placeholder="请输入主题" value="<?php echo ($list["subject"]); ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">描述:</label>
								<div class="col-md-10">
									<textarea class="form-control" rows="8" name='describe' placeholder="请输入描述"><?php echo ($list["describe"]); ?></textarea>
								</div>
							</div>
							<button class="btn btn-success" type="submit" value="submit"> 保存</button>
					</div>
					</form><?php endforeach; endif; ?>
			</table>
		</div>
	</div>
</div>
</div>

<div>
	<script id="editor" type="text/plain"></script>
</div>
<script type="text/javascript">
	var id;
	    var ue = UE.getEditor('editor');
	     ue.ready(function(){
	    //ue.setDisabled();
	    ue.setHide();
	
	     ue.addListener('afterInsertImage', function (t, arg) {
	            //将地址赋值给相应的input,第一张图片的路径
	            document.getElementById(id+"img").src=arg[0].src;
	            document.getElementById(id+"picture").value=arg[0].src;
	        })
	})
	    function upImage(obj) {
	    id=obj.id;
	    var myImage = ue.getDialog("insertimage");
	    myImage.open();
	}
</script>
<link rel="stylesheet" type="text/css" href="/scausy/Public/css/picture/normalize.css">
<link rel="stylesheet" type="text/css" href="/scausy/Public/css/picture/main.css">
</body>
</html>