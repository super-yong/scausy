<?php
namespace Home\Controller;
use Think\Controller;
class PictureController extends Controller
{
	/**
   * 更新信息
   */
  public function update(){
  	if (!isAdminLogin()) {
  	  header('Content-Type:text/html;charset=utf-8');
  	  echo "<script>window.location.href='http://scausy.cn'</script>";
  	}
    $activityModel = M('Activity');
    $map['id'] = $_POST['id'];
    $data['picture'] = $_POST['picture'];
    $data['subject'] = $_POST['subject'];
    $data['describe'] = $_POST['describe'];
    $data['author'] = $_SESSION['name'];
    $data['updatetime'] = time();
    $activityModel->where($map)->save($data);
    header('Content-Type:text/html;charset=utf-8');
  	echo "<script>window.location.href='".__ROOT__."/home/admin/administrateActivity'</script>";
  }
}