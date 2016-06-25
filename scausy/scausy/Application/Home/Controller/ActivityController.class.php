<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class ActivityController extends Controller
{
  public function add(){
  	if(!isAdminLogin()){
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>alert(\"请先登录\");window.location.href='scausy.cn'</script>";
      return false;
    }   
    $activityModel = M('Activity');
    $data['picture'] = $_POST['picture'];
    $data['subject'] = $_POST['subject'];
    $data['describe'] = $_POST['describe'];
    $data['updatatime'] = time(); 
    $data['author'] = session('name');
    $list = $activityModel->add($data);
    if ($list) {
      $this->success('添加成功');
    }else{
      $this->success('添加失败');
    }
  }

  public function delete(){
  	if(!isAdminLogin()){
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>alert(\"请先登录\");window.location.href='scausy.cn'</script>";
      return false;
    }   
  	$activityModel = M('Activity');
  	$map['id'] = $_GET['id'];
    $list = $activityModel->where($map)->delete();
    if ($list) {
      $this->success('删除成功');
    }else{
      $this->success('删除失败');
    }
  }

  public function update(){
  	if(!isAdminLogin()){
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>alert(\"请先登录\");window.location.href='scausy.cn'</script>";
      return false;
    }   
    $activityModel = M('Activity');
    $data['picture'] = $_POST['picture'];
    $data['subject'] = $_POST['subject'];
    $data['describe'] = $_POST['describe'];
    $data['updatatime'] = time(); 
    $data['author'] = session('name');
    $map['id'] = $_POST['id'];
    $list = $activityModel->where($map)->save($data);
    if ($list) {
      $this->success('修改成功');
    }else{
      $this->success('修改失败');
    }	
  }

}