<?php if (!defined('THINK_PATH')) exit();?><!--
作者：1320279417@qq.com
时间：2015-08-05
描述：page5 organzation 组织架构
-->
<div class="tab-pane" id="organization">
	<div class="content" style="margin-top: 28px;">
		<div class="page" style="padding: 20px 0px;margin-top: 50px;">
			<div class="container">
				<div class="row" style="z-index: 1;">
					<div class="col-md-3" style=" margin-bottom: 20px;">
						<div class="organ_logo">
							<img src="/scausy/Public/img/logo1.png" />
						</div>
						<ul class="nav nav-pills nav-stacked text-center btn-lg" id="siyuan_tab">
							<li class="active organ_li"><a href="#siyuanjianjie" data-toggle="tab">思源 简介</a></li>
							<li class="organ_li"><a href="#zhuren" data-toggle="tab">主任团</a></li>
							<li class="organ_li"><a href="#zhudai" data-toggle="tab">助贷部</a></li>
							<li class="organ_li"><a href="#mishu" data-toggle="tab">秘书部</a></li>
							<li class="organ_li"><a href="#xuanchuan" data-toggle="tab">宣传部</a></li>
							<li class="organ_li"><a href="#qingong" data-toggle="tab">勤工部</a></li>
							<li class="organ_li"><a href="#shijian" data-toggle="tab">实践部</a></li>
						</ul>
					</div>
					<div class="col-md-9"  style="border-left: 1px solid gainsboro;">
						<div class="tab-content">
							<div class="tab-pane active" id="siyuanjianjie">
								<div class="siyuan_nav">
									<!--<h2 class="siyuan_title">思源简介</h2>-->
									<p><?php echo (stripslashes(htmlspecialchars_decode($list[0]["introduction"]))); ?>
									</p>
								</div>

							</div>
							<div class="tab-pane" id="zhuren">
								<div class="siyuan_nav">
									<!--<h2 class="siyuan_title">主任团</h2>-->
									<p><?php echo (stripslashes($list[0]["zhurentuan"])); ?></p>
								</div>
							</div>
							<div class="tab-pane" id="zhudai">
								<div class="siyuan_nav">
									<!--<h2 class="siyuan_title">助贷部</h2>-->
									<p><?php echo (stripslashes($list[0]["zhudai"])); ?></p>
									
								</div>
							</div>
							<div class="tab-pane" id="mishu">
								<div class="siyuan_nav">
									<!--<h2 class="siyuan_title">秘书部</h2>-->
									<p><?php echo (stripslashes($list[0]["mishu"])); ?></p>
									
								</div>
							</div>
							<div class="tab-pane" id="xuanchuan">
								<div class="siyuan_nav">
									<!--<h2 class="siyuan_title">宣传部</h2>-->
									<p><?php echo (stripslashes($list[0]["xuanchuan"])); ?></p>
									</article>

								</div>
							</div>
							<div class="tab-pane" id="qingong">
								<div class="siyuan_nav">
									<!--<h2 class="siyuan_title">勤工部</h2>-->
									<p><?php echo (stripslashes($list[0]["qingong"])); ?></p>
								</div>
							</div>
							<div class="tab-pane" id="shijian">
								<div class="siyuan_nav">
									<!--<h2 class="siyuan_title">实践部</h2>-->
									<p><?php echo (stripslashes($list[0]["shijian"])); ?></p>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>