<?php if (!defined('THINK_PATH')) exit();?><!--
作者：1320279417@qq.com
时间：2015-08-05
描述： @page1 home 首页
-->
<div class="tab-pane active" id="home">
	<div class="content">
		<div class="jumbotron" id="jumbotron_id" style="background-color: rgba(0,0,0,0);position: relative;">
			<div id="Layer1" style="position:absolute; width:100%;height:390px; z-index:0">    
				<img id="home-img" src="/scausy/Public/img/014.jpg" />    
			</div>  
			<div class="container text-center" style="position:absolute;z-index:1;margin-left: 10%;">
				<div class="jumbotron_content">
					<h1>思源工作室</h1>
					<p id="jumbotron_p"></p>
				</div>
			</div>
			<div class="scrollNews" >
				<ul>
					<li><a href="#" title="">2016年第四届公益跳蚤市场中思源工作室荣获“优秀组织奖”称号</a></li>
					<li><a href="#" title="">“凤凰花开，感恩母校”2016届毕业生公益校园行荣获“三等奖”称号</a></li>
					<li><a href="#" title="">2016年度第十七期“竹铭计划”课程培训中荣获承办组织“三等奖”</a></li>
					<li><a href="#" title="">2015年度第十六期“竹铭计划”课程培训中荣获承办组织“一等奖”</a></li>
				</ul>
			</div>
		</div>
		<div class="first">
			<div class="container contain">
				<div class="first_title">
					<h2 style="border-bottom: 2px solid grey;">最新通知</h2>
				</div>
				<div class="first_news">
					<div class="row">
						<div class="col-md-11 col-md-offset-1 ">
							<?php if(is_array($list)): foreach($list as $key=>$list): ?><div class="news">
								<a href="/scausy/home/index/showArticle?group=Article&id=<?php echo ($list["id"]); ?>" class="alink" style="height: 26px;">
									<span class="glyphicon glyphicon-list-alt"></span> 
									<?php echo ($list["subject"]); ?>
								</a>
								<div class="time hidden-xs">
									<span><span class="glyphicon glyphicon-time"></span><?php echo (date('Y-m-d',$list["lastmodifytime"])); ?></span>
								</div>
								<div class="hidden-xs hidden-sm editor">
									<span><span class="glyphicon glyphicon-edit"></span><?php echo ($list["author"]); ?></span>
								</div>
								<!--<div class="visible-md-inline visible-lg-inline open">
									<span><span class=" glyphicon glyphicon-eye-open"></span><?php echo ($list["createtime"]); ?></span>
								</div>-->
							</div><?php endforeach; endif; ?>

						</div>
						
					</div>
				</div>

			</div>
			<div class="first_foot hidden-xs hidden-sm">
				<h3 style="border-bottom: 2px solid gray; padding-bottom: 10px;">思源工作室</h3>
				<p> SiYuanGongZuoShi</p>
			</div>
		</div>

		<div class="second">
			<!--描述：首页之活动风采-->
			<div class="container contain">
				<div class="second_title">
					<h2 style="border-bottom: 2px solid #E5E5E5;color: white;">活动风采</h2>
				</div>
				<div class="row">
					<div class="col-md-6" style="margin-top: 26px;">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="border: 4px solid white;">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
									<li data-target="#carousel-example-generic" data-slide-to="3"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel carousel-inner" role="listbox">
								<div class="item active">
									<img src="<?php echo ($pictureArray[0]["picture"]); ?>" alt="..." class="img img-responsive">
									<div class="carousel-caption">
										<h3 style="color: aliceblue;"><?php echo ($pictureArray[0]["subject"]); ?></h3>
										<p><?php echo ($pictureArray[0]["describe"]); ?></p>
									</div>
								 </div>
							    <?php if(is_array($pictureArray)): $i = 0; $__LIST__ = array_slice($pictureArray,1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pictureArray): $mod = ($i % 2 );++$i;?><div class="item">
									<img src="<?php echo ($pictureArray["picture"]); ?>" alt="..." class="img">
									<div class="carousel-caption">
										<h3><?php echo ($pictureArray["subject"]); ?></h3>
										<p><?php echo ($pictureArray["describe"]); ?></p>
									</div>
								 </div><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>

							<!-- Controls -->
							<!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
											    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
											    <span class="sr-only">Previous</span>
											  </a>
											  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
											    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
											    <span class="sr-only">Next</span>
											  </a>-->
							<!--</div>-->
							<!--<div class="container" id="siyuan">
											<img src="img/maxfont22.png" alt="思源工作室" width="80%" >-->
							<!--<h1>思源工作室 <small>助委会</small></h1>
									         <p>This is a simple hero unit, a simple jumbotron-stylecomponent for calling <br /> extra attention to 
									         	featured content or information.</p>-->
							<!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>-->
							<!--</div>-->
						</div>
					</div>
					<div class="col-md-6">
						<div class="second_p">
							<p>在思源，我们不仅仅是简单的工作</p>
							<p>还有丰富多彩的活动</p>
							<p>自强之星的评比、志愿者的服务活动、竹铭计划的开展</p>
							<p>捐书志愿活动、组织内部的春秋游、组织间的联谊...</p>
							<p>在这里，我们是一个让你倍感温暖的大家庭 !</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="three">
			<!--描述：首页之奖助贷-->
			<div class="container contain">
				<div class="three_title">
					<h2 style="border-bottom: 2px solid grey;">奖助贷</h2>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-2">
						<img src="/scausy/Public/img/jiangzhudai.png" height="350px" />
					</div>
				</div>
			</div>
		</div>

		<div class="four">
			<!--描述：首页之组织架构-->
			<div class="container contain">
				<div class="four_title">
					<h2 style="border-bottom: 2px solid #E5E5E5;color: white;">组织架构</h2>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-2">
						<!--<img src="img/组织架构1.png" height="350px"/>-->
						<img src="/scausy/Public/img/zuzhijiagou.png" height="350px" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>