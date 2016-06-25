<?php
namespace Home\controller;
use Think\Controller;
/**
 * 组织架构类
 */
class OrganizationController extends Controller
{
  /**
   * 更新信息
   */
  public function updata(){
  	if (!isAdminLogin()) {
  	  header('Content-Type:text/html;charset=utf-8');
  	  echo "<script>window.location.href='http://scausy.cn'</script>";
  	}
  	if (!isset($_POST['group'])) {
      $this->error('非法操作，返回上级页面');
    }
    $organizationModel = M('Organization');
    $map['id']=1;
    $data[$_POST['group']] = $_POST['editorValue'];
    $organizationModel->where($map)->save($data);
    header('Content-Type:text/html;charset=utf-8');
  	echo "<script>window.location.href='".__ROOT__."/home/admin/administrateOrganization'</script>";
  }
  /**
   * 编辑
   */
  public function edit(){
    if (!isAdminLogin()) {
  	  header('Content-Type:text/html;charset=utf-8');
  	  echo "<script>window.location.href='http://scausy.cn'</script>";
  	}
  	if (isset($GET['group'])) {
      $this->error('非法操作，返回上级页面');
    }
      $array = array(
      'content1' =>'active',
      'content2' =>'',
      'content3' =>'',
    );
    $map['id'] = 1;
    $organizationModel = M('Organization');
    $message = $organizationModel->where($map)->select(); 
    $list['group'] = $_GET['group'];
    $list['message'] = $message[0][$list['group']];
    $list['department'] = $_GET['department'];
    $this->assign('list',$list);
    $this->assign('array',$array);
    $this->display('Admin:manage_head');
    $this->display('ueditor');
  }
}