<?php
namespace home\controller;
use Think\controller;
use Think\Page;

class AdminController extends Controller
{   
  //管理学生信息
  public function administrateStu(){
    if(!isAdminLogin()){
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>alert(\"请先登录\");window.location.href='http://scausy.cn'</script>";
      return false;
    }
    $studentModel = D('Students');
    if(isset($_GET['grade']) && trim($_GET['grade'])!='所有年级') {
      $map1['grade'] = trim($_GET['grade']);
      if ($map1['grade']==2012) {
        $select['d'] = 'selected = "selected"';
      }else if ($map1['grade']==2013) {
       $select['c'] = 'selected = "selected"';
      }else if ($map1['grade']==2014) {
        $select['b'] = 'selected = "selected"';
      }else{
        $select['a'] = 'selected = "selected"';
      }
    }else{
       $select['e'] = 'selected = "selected"';
    }

    if(isset($_GET['group']) && trim($_GET['group'])!='全部') {
      $map2['groups'] = array('like','%'.trim($_GET['group']).'%');
      if ($_GET['group']=='生委') {
        $select['f'] = 'selected = "selected"';
      }else if ($_GET['group']=='受助生') {
       $select['g'] = 'selected = "selected"';
      }else if ($_GET['group']=='其他') {
        $select['h'] = 'selected = "selected"';
      }
    }else{
        $select['i'] = 'selected = "selected"';
    }

    if (isset($map1)) {
      if (isset($map2)) {
        $list = $studentModel->where($map1)->where($map2)->order('id')->page($_GET['P'].',8')->select();
        $excel = $studentModel->where($map1)->where($map2)->order('id')->select();  
        $count = $studentModel->where($map1)->where($map2)->count();
      }
      else{
        $list = $studentModel->where($map1)->order('id')->page($_GET['P'].',8')->select();
        $excel = $studentModel->where($map1)->order('id')->select();  
        $count = $studentModel->where($map1)->count();
      }
    }
    else{
      if (isset($map2)) {
        $list = $studentModel->where($map2)->order('id')->page($_GET['P'].',8')->select();  
        $excel = $studentModel->where($map2)->order('id')->select(); 
        $count = $studentModel->where($map2)->count();
      }
      else{
        $list = $studentModel->order('id')->page($_GET['P'].',8')->select();  
        $excel = $studentModel->order('id')->select(); 
        $count = $studentModel->count();
      }
    }
    if (isset($_GET['action'])&&$_GET['action']==true) {
        phpExcel($excel);
    }
    $Page = new Page($count,8);
    $Page->nowUrl = __ROOT__.'/home/admin/administrateStu?grade='.$_GET['grade'].'&group='.$_GET['group'];
    $show = $Page->show();
    $array = array(
      'content1' =>'',
      'content2' =>'active',
      'content3' =>'',
    );
    $this->assign('array',$array);
    $this->assign('select',$select);
    $this->assign('list',$list);
    $this->assign('count',$count);
    $this->assign('page',$show);
    $this->display('manage_head');
    $this->display('manage_content2');
  }

  /**
   * 删除学生
   */
  public function deleteStudent(){
    if(!isAdminLogin() && !isset($_GET['id'])){
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>alert(\"请先登录\");window.location.href='http://scausy.cn'</script>";
      return false;
    }
    $studentModel = D('Students');  
    $map['id'] = $_GET['id'];
    $list = $studentModel->where($map)->delete();
    if ($list) {
      $this->success('删除成功');
    }else{
      $this->success('删除成功不成功');
    }
  }

  /**
   * 文章管理
   */
  public function administrateArticle(){
    if(!isAdminLogin()){
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>window.location.href='scausy.cn'</script>";
      return false;
    }
    $this->display('manage_head');
    if (isset($_GET['action']) && $_GET['action']=='publish') {
      R('WenzhangList/edit');
    }else if (isset($_GET['action']) && $_GET['action']=='adminstrate') {
      R('WenzhangList/index');
    }else{
      $this->error('非法操作，返回上级页面');
    } 
  }

   /**
   * 群发邮件管理
   */
  public function administrateEmail(){
    if(!isAdminLogin()){
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>window.location.href='http://scausy.cn'</script>";
      return false;
    }
    $studentModel = D('Students');
    $map3['created'] = 'ok';
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    if(isset($_POST['grade']) && trim($_POST['grade'])!='所有年级') {
      $map1['grade'] = trim($_GET['grade']);
    }
    if(isset($_POST['group']) && trim($_POST['group'])!='全部') {
      $map2['groups'] = array('like','%'.trim($_POST['group']).'%');
    }
    if (isset($map1)) {
      if (isset($map2)) {
        $email = $studentModel->where($map1)->where($map2)->where($map3)->order('id')->field('email')->select();  
        $count = $studentModel->where($map1)->where($map2)->where($map3)->count();
      }
      else{
        $email = $studentModel->where($map1)->where($map3)->order('id')->field('email')->select();  
        $count = $studentModel->where($map1)->where($map3)->count();
      }
    }
    else{
      if (isset($map2)) { 
        $email = $studentModel->where($map2)->where($map3)->order('id')->field('email')->select(); 
        $count = $studentModel->where($map2)->where($map3)->count();
      }
      else{
        $email = $studentModel->where($map3)->order('id')->field('email')->select(); 
        $count = $studentModel->where($map3)->count();
      }
    }
     foreach ($email as $key => $value) {
        $array2[$i++] = $value['email'];
      }
    if (isset($_POST['action'])&&$_POST['action']=='sentEmail') {
      foreach ($email as $key => $value) {
          sentEmail($value['email'],$subject,$body);
      }
    }
    var_dump($count);
    $array = array(
      'content1' =>'',
      'content2' =>'',
      'content3' =>'active',
    ); 
    $this->assign('array',$array);
    $this->display('manage_head');
    $this->display('manage_content3');
  }

  /**
   * 组织简介
   */
  public function administrateOrganization(){
    if(!isAdminLogin()){
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>window.location.href='http://scausy.cn'</script>";
      return false;
    } 
    $organizationModel = M('Organization');
    $map['id'] = 1;
    $list = $organizationModel->where($map)->select();
    $array = array(
      'content1' =>'active',
      'content2' =>'',
      'content3' =>'',
    ); 
    $this->assign('array',$array);
    $this->assign('list',$list);
    $this->display('manage_head');
    $this->display('manage_content5');
  }
  /**
   * 活动风采照片上传
   */
  public function administrateActivity(){
   if(!isAdminLogin()){
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>alert(\"请先登录\");window.location.href='http://scausy.cn'</script>";
      return false;
    }   
    $activityModel = M('Activity');  
    $list=$activityModel->order('id desc')->select(); 
    $array['content4'] = 'active';
    $this->assign('array',$array);
    $this->assign('list',$list);
    $this->display('manage_head');
    $this->display('manage_content6');
  }

  public function administrateExemplar(){
    $array['content7'] = '"active"';
    $this->assign('array',$array);
    $this->display('manage_head');
    $this->display('manage_content7');
  }
}

