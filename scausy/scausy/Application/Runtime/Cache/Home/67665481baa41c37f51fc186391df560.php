<?php if (!defined('THINK_PATH')) exit();?>
<!--
	作者：1320279417@qq.com
	时间：2015-10-28
	描述：模范频道--发表征文
-->
<div class="jumbotron tab-pane" id="mass_email" style="margin-top: 20px;">
	<!--<div class="container">-->
		<div class="row">
			<div class="col-md-2" style="background-color: #313131;height: 800px;position: fixed;">
				<ul class="nav nav-stacked nav-mo">
				  <li role="presentation" class="active"><a href="/scausy/home/admin/administrateExemplar">发表</a></li>
				  <li role="presentation"><a href="/scausy/home/exemplar/administrate?">管理</a></li>
				  <!--<li role="presentation"><a href="#">Messages</a></li>-->
				</ul>
			</div>
			<div class="col-md-10 col-md-offset-2">
				<div class="container"  style="margin: 0 10%;">
					<h2 style="border-bottom:1px solid darkgrey ;padding-bottom: 10px;">编辑修改</h2>
					<!--提交发表征文表单-->
					<form class="form-horizontal" action="/scausy/home/exemplar/update" method="post">
						 <input type="hidden" value="<?php echo ($list[0]["id"]); ?>" name="id">
						<div class="form-group">
							<label for="news_title" class="col-md-1 control-label">标题:</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="title" name="title" placeholder="请输入标题..." value="<?php echo ($list[0]["title"]); ?>">
							</div>
						</div>
						
						<div class="form-group">
							<div id="myEditor" class="col-md-8" style="width:800px">
							<script type="text/javascript">
								var editor = new baidu.editor.ui.Editor({
									initialContent: '<?php echo ($list[0]["body"]); ?>',
								});
								editor.render("myEditor");
							</script>	
								
							</div>
						</div>
			            <div style="border: 1px dashed gray;padding: 10px 20px;width: 800px;"class="col-md-8">
			            	<h3>作者简介</h3>
						    <div class="form-group">
							    <label class="col-md-2 control-label">照片:</label>
						        <div class="col-md-4">
									<button id="picture_button" type="button"  onclick="upImage();"> <img id="img_id" src="<?php echo ($list[0]["picture_url"]); ?>" alt="请选择图片" class="addtr" style="width: 90px;"></button>
			                        <input type="type" style="display:none;" name="picture_url" value="<?php echo ($list[0]["picture_url"]); ?>" id="picture_id">
							    </div>
						    </div>
						    <div class="form-group">
						    	<label class="col-md-2 control-label">作者:</label>
						        <div class="col-md-4">
								    <input type="text" class="form-control" id="author" name="author" placeholder="如张三" value="<?php echo ($list[0]["author"]); ?>">
							    </div>
						    </div>
						    <div class="form-group">
						    	<label class="col-md-2 control-label">主题:</label>
						        <div class="col-md-4">
								    <input type="text" class="form-control" id="subject" name="subject" placeholder="如我与诚信" value="<?php echo ($list[0]["subject"]); ?>">
							    </div>
							    <label class="col-md-2 control-label">类型:</label>
						        <div class="col-md-4">
								    <input type="text" class="form-control" id="briefIntroduction" name="tag" placeholder="征文/采访" value="<?php echo ($list[0]["tag"]); ?>"></input>
							    </div>
							    
						    </div>
						    <div class="form-group">
						    	<label class="col-md-2 control-label">简介:</label>
						    	<div class="col-md-10">
								    <textarea class="form-control" rows="2" id="briefIntroduction" placeholder="作者简介" name="brief_introduction"><?php echo ($list[0]["brief_introduction"]); ?></textarea>
							    </div>
						    </div>
			            </div>
			            <div class="col-md-offset-8"style="margin-top: 400px;">
						   <button type="submit" class="btn btn-lg btn-success" style="margin: 20px -25px;" name ="action">提交修改</button>
						</div>
					</form>
				</div>
					        	
			</div>
		</div>
	<!--</div>-->
</div>

<!--- 图片上传!-->
<div>
	<script id="editor" type="text/plain"></script>
</div>
<script type="text/javascript">
	    var ue = UE.getEditor('editor');
	     ue.ready(function(){
	        //ue.setDisabled();
	        ue.setHide();
	   
	           ue.addListener('afterInsertImage', function (t, arg) {
	                  //将地址赋值给相应的input,第一张图片的路径
	                  document.getElementById("img_id").src=arg[0].src;
	                  document.getElementById("picture_id").value=arg[0].src;
	           })
	   })
	    function upImage() {
	    var myImage = ue.getDialog("insertimage");
	    myImage.open();
	}
</script>

</body>

</html>