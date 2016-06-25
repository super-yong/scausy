<?php if (!defined('THINK_PATH')) exit();?><!--
作者：1320279417@qq.com
时间：2015-08-05
描述：@page2 news 最新通知
-->
<div class="tab-pane" id="news">
	<div class="content">
		<div class="page">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						
                        <?php if(is_array($list)): foreach($list as $key=>$list): ?><div class="page2_news">
							<div class="post_head text-center">
								<h2>
						            <a href="#"  style="color: black;text-decoration: none;"><?php echo ($list["subject"]); ?></a>
							    </h2>
								<div class="post_meta">
									<span class="">编辑：<a href="#"><?php echo ($list["author"]); ?></a></span> &nbsp;&bull;
									<time><?php echo (date('Y-m-d H:i',$list["lastmodifytime"])); ?></time>
								</div>
							</div>
							<div class="post_content">
								<!--<blockquote>-->
								<p class="lead" style="text-indent:22pt;">
									<?php echo (truncate($list["message"],380,'',0)); ?>
								</p>
								<!--</blockquote>-->
							</div>
							<div class="read_all">
								<a class="btn btn-lg btn-primary" href="/scausy/home/index/showArticle?group=Article&id=<?php echo ($list["id"]); ?>">阅读全文</a>
							</div>
							<div class="post_footer">
								<p>思源工作室</p>
							</div>
						</div><?php endforeach; endif; ?> 


						
					
						<nav class="text-center">
							<ul class="pagination pagination-lg">
								<?php echo ($page); ?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>