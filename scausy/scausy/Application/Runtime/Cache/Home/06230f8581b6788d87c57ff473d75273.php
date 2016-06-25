<?php if (!defined('THINK_PATH')) exit();?><html>
  <head>
  	<meta name="viewport" content="width=devise-width initial=scale=1"/>
  	<meta charset='utf-8' />
  </head>
  <?php if(is_array($array)): foreach($array as $key=>$array): ?><body>
  	<div >
				<table class="table table-striped table-hover" class="addtr" BORDER=1>
					<tr>
						<th></th>
						<th>第一二节</th>
						<th>第三四节</th>
						<th>第七八节</th>
						<th>第九十节</th>
					</tr>
					<tr>
					    <td>周一</td>
						<td></td>
						<td><?php echo ($array[1][2][0]['stu_id']); ?></td>
						<td><?php echo ($array[1][3][0]['stu_id']); ?></td>
						<td><?php echo ($array[1][4][0]['stu_id']); ?></td>
					</tr>

					<tr>
					    <td>周二</td>
						<td><?php echo ($array[2][1][0]['stu_id']); ?></td>
						<td><?php echo ($array[2][2][0]['stu_id']); ?></td>
						<td><?php echo ($array[2][3][0]['stu_id']); ?></td>
						<td><?php echo ($array[2][4][0]['stu_id']); ?></td>
					</tr>

					<tr>
					    <td>周三</td>
						<td>
							<?php echo ($array[3][1][0]['stu_id']); ?><br>
                            <?php echo ($array[3][1][1]['stu_id']); ?>
						</td>
						<td>
							<?php echo ($array[3][2][0]['stu_id']); ?><br>
                            <?php echo ($array[3][2][1]['stu_id']); ?>
						</td>
						<td>
							<?php echo ($array[3][3][0]['stu_id']); ?><br>
                            <?php echo ($array[3][3][1]['stu_id']); ?>
						</td>
						<td>
							<?php echo ($array[3][4][0]['stu_id']); ?><br>
                            <?php echo ($array[3][4][1]['stu_id']); ?>
						</td>
					</tr> 


					<tr>
					    <td>周四</td>
						<td>
							<?php echo ($array[4][1][0]['stu_id']); ?><br>
                            <?php echo ($array[4][1][1]['stu_id']); ?>
						</td>
						<td>
							<?php echo ($array[4][2][0]['stu_id']); ?><br>
                            <?php echo ($array[4][2][1]['stu_id']); ?>
						</td>
						<td>
							<?php echo ($array[4][3][0]['stu_id']); ?><br>
                            <?php echo ($array[4][3][1]['stu_id']); ?>
						</td>
						<td>
							<?php echo ($array[4][4][0]['stu_id']); ?><br>
                            <?php echo ($array[4][4][1]['stu_id']); ?>
						</td>
					</tr>
				
				    <tr>
					    <td>周五</td>
						<td>
							<?php echo ($array[5][1][0]['stu_id']); ?><br>
                            <?php echo ($array[5][1][1]['stu_id']); ?>
						</td>
						<td>
							<?php echo ($array[5][2][0]['stu_id']); ?><br>
                            <?php echo ($array[5][2][1]['stu_id']); ?>
						</td>
						<td>
							<?php echo ($array[5][3][0]['stu_id']); ?><br>
                            <?php echo ($array[5][3][1]['stu_id']); ?>
						</td>
						<td>
							<?php echo ($array[5][4][0]['stu_id']); ?><br>
                            <?php echo ($array[5][4][1]['stu_id']); ?>
						</td>
					</tr>

				</table>
	</div><?php endforeach; endif; ?>
  </body>
</html>