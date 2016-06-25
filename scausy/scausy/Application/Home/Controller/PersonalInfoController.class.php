<?php
/**
 * 个人信息类
 */
namespace Home\controller;
use Think\Controller;
class PersonalInfoController extends Controller{
  /**
   * @获取个人信息
   */
  public function personalInfo(){
    if (!isStudentLogin()) {
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>window.location.href='http://scausy.cn'</script>";
      return false;
    }
  	$studentModel = D('Students');
    $map['id'] = $_SESSION['studentnumber'];
    $studentInfo = $studentModel->where($map)->select();
    if ($studentInfo[0]['groups']=='生委') {
      $select[0] = 'selected = "selected"';	
    }else if ($studentInfo[0]['groups']=='受助生') {
      $select[1] = 'selected = "selected"';
    }else if ($studentInfo[0]['groups']=='生委且受助生') {
      $select[2] = 'selected = "selected"';
    }else{
      $select[3] = 'selected = "selected"';
    }
    $this->assign('select',$select);
    $this->assign('list',$studentInfo[0]);
    $this->display('Login:personalCenter2');
  }

  /**
   * @注销用户
   */
  public function delete(){
    $studentModel = D('Students');
    $map['id'] = $_SESSION['studentnumber'];
    $map['password'] = md5(trim($_POST['password']));
    $studentInfo = $studentModel->where($map)->delete();
    if ($studentInfo) {
      session(null);
       echo "<script>window.location.href='http://scausy.cn'</script>";
    }else{
      // $this->show("<script type=\"text/javascript\"> $(function(){alert(\"密码不正确\");}); </script>");
      R('personalInfo/personalInfo');
    }
  }

  /**
   * @修改个人信息
   */
  public function amend(){
    if (!isset($_POST['group'])) {
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>window.location.href='http://scausy.cn'</script>";
      return false;
    }
  	$studentModel = D('Students');
    $set['phone'] = (isset($_POST['phone'])) ? trim($_POST['phone']) : '无' ;
    $set['email'] = (isset($_POST['email'])) ? trim($_POST['email']) : '无' ;
    $set['groups'] = (isset($_POST['group'])) ? trim($_POST['group']) : '无' ;
    $map1['id'] = $_SESSION['studentnumber'];
    $map['id'] = $_SESSION['studentnumber'];
    $row = $studentModel->where($map1)->select();
    if ($row[0]['email']!=$set['email'] && $set['eamil']!='无') {
      $set['created'] = time()+60*60*24;
      $subject = '思源工作室网站邮箱激活';
      $body =$_SESSION['name']."同学你好！请激活思源工作室网站邮箱，请点击 <a href='http://scausy.cn/home/login/activation?action=".$set['created'] ;       
      $body .= "'target='_blank'> http://".GetHostByName($_SERVER['SERVER_NAME']).__ROOT__."/index.php/home/login/activation ?action= ".$set['created']."</a>" ;
      sentEmail($_POST['email'],$subject,$body);	
    }
    if (isset($_POST['amend'])) {
  	  $studentModel->where($map)->save($set);
  	} 
    R('personalInfo/personalInfo');
  }

}