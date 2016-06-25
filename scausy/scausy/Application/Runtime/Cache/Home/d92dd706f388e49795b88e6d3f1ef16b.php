<?php if (!defined('THINK_PATH')) exit();?><!--
作者：1320279417@qq.com
时间：2015-08-05
描述：@page3 train 模范引领
-->
<div class="tab-pane" id="train">
	<div class="content">
		<div class="page">
			<div class="container">
				<div class="row">
					
                    <?php if(is_array($list)): foreach($list as $key=>$list): ?><div class="col-md-4 col-sm-6  col-xs-12" style="">
						<article class="post tag-chinese-website tag-bootstrap-v3">
							<div class="post-featured-image">
								<a class="thumbnail" href="/scausy/home/index/showExemplar?id=<?php echo ($list["id"]); ?>" onclick="">
									<img src="<?php echo ($list["picture_url"]); ?>" width="700" height="300" alt="" onload=" imgLoaded(this)">
								</a>
							</div>
							<div class="  " style="padding: 8px 8px 0px;border-bottom: 1px solid gainsboro;">
								<h4 class=" text-center "style="height: 18px;overflow: hidden;"><a href="/scausy/home/index/showExemplar?id=<?php echo ($list["id"]); ?>">【<?php echo ($list["tag"]); ?>】<?php echo ($list["title"]); ?></a></h4>
								<p style="padding-bottom: 10px;height: 65px;overflow: hidden;">&nbsp;&nbsp;&nbsp;
                                   <?php echo ($list["brief_introduction"]); ?>
								</p>

								<div class="" style="float: right;color:grey;margin-top: 15px;"><?php echo ($list["subject"]); ?></div>

							</div>
						</article>
					</div><?php endforeach; endif; ?>
				</div>
				 <nav class="text-center">
				    <ul class="pagination pagination-lg">
				    	<?php echo ($page); ?>
				    </ul>
				</nav>
			</div>
		</div>
	</div>
</div>