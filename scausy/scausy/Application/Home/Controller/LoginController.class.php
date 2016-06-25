<?php
namespace Home\controller;
use Think\Controller;
define('SCRIPT_ROOT',dirname(__FILE__.'/'));
class LoginController extends Controller
{ 
  
	public function login(){  
    $studentsModel=D('Students');
	  if(isset($_GET['studentnumber'])&&isset($_GET['password'])&&$_GET['password']==''){
      $studentnumber = $_GET['studentnumber'];
      $list=$studentsModel->query("select * from sy_students where id='".$studentnumber."'");       
      if (!$list) { //从正方登录
        $this->ajaxReturn(false);     
      }
      else{
        $this->ajaxReturn(true);
      }
    }
    if (isset($_GET['password'])&& $_GET['password']!=''){   
      $studentnumber = trim($_GET['studentnumber']);   
      $password = trim($_GET['password']);
      $password=md5($password);
      $list = $studentsModel->query("select * from sy_students where id ='".$studentnumber."' AND password ='".$password."'");
      if ($list){ //直接登录
        $this->ajaxReturn(true);
      }else{ //从正方登录
        $this->ajaxReturn(false);
      }
	  }
  }
 
 //使用正方验证码，返回需要的cookie
 public function code(){
    $sessionId = session_id();   
    header('Content-Type:image/png charset=gb2312');
    $authcode_url='http://202.116.160.170/CheckCode.aspx';
    $cookieFile = SCRIPT_ROOT.'cookie.tmp';
    $ch = curl_init($authcode_url);
    curl_setopt($ch, CURLOPT_COOKIEJAR,$cookieFile); //保存返回的cookie信息
    curl_exec($ch);
    curl_close($ch);
 }

 //从正方系统抓取个人信息
 public function zhengfang(){
  header('Content-Type:text/html;charset=utf-8');
  $zhengfang = D('Zhengfang','Api');
  if (isset($_POST["username"]) && isset($_POST['password']) && isset($_POST['code']) && trim($_POST['code']) !=='') {
    $zhengfang->login(trim($_POST["username"]),trim($_POST['password']),trim($_POST['code']));
    $num=10;
    while ($num>1) {
     $studentInfo = $zhengfang->getInfo(trim($_POST["username"]));
     preg_match_all('/<span id="Label[^>]*>(.*)<\/span>/isU',$studentInfo,$out);
     if (!empty($out[1][4])) {
       break;
     }
     $num--;
    }
    $student = explode('：', $out[1][4]);//学院
    $array[0] = trim($student[1]);
    $student = explode('：', $out[1][3]);
    $array[1] = trim($student[1]);
    $student = explode('：', $out[1][2]);
    $array[2] = trim($student[1]);
    $array[3] = substr($array[2], 0,4);
    $student = explode('：', $out[1][5]);
    $array[4] = trim($student[1]);
    $student = explode('：', $out[1][6]);
    $array[5] = trim($student[1]);
    $array[6] =  md5($_POST['password']);
    if (!empty($array[0])) {
      $courseModel = M('course');
      $set['id'] = trim($_POST["username"]);
      $list = $courseModel->where($set)->select();
      $set = $zhengfang->converttoTable($studentInfo);
      $set['id'] = trim($_POST["username"]);
      if (!$list) {
        $courseModel->add($set);  
      }
      else{
        $courseModel->save($set);
      }
      $this->assign('array',$array);
      $this->display('personalCenter');
    }
    else{ 
      echo "<script>alert(\"登录失败\");window.location.href='http://scausy.cn'</script>";
    }
  }
  else{
    $studentnumber = trim($_POST['username']);
    $password = md5(trim($_POST['password']));
    $studentsModel = D('Students');
    $list = $studentsModel->query("select * from sy_students where id ='".$studentnumber."' AND password ='".$password."'");
    if ($list) {
      //普通学生登录
      if ($list[0]['admin']==='no') {  
        $_SESSION['admin'] = 'student';
        $_SESSION['studentnumber'] = $studentnumber;
        $_SESSION['name'] = $list[0]['name'];
        $_SESSION['expire'] = 3600;
        echo "<script>alert(\"登录成功\");window.location.href='http://scausy.cn'</script>";R('Index:index');
      }
      //超级管理员登录
      else if($list[0]['admin']==='super'){
        $_SESSION['admin'] = 'super';
        $_SESSION['studentnumber'] = $studentnumber;
        $_SESSION['name'] = $list[0]['name'];
        $_SESSION['expire'] = 3600;
        echo "超级管理员登陆";
      }
      //普通管理员登录
      else{
        $_SESSION['admin'] = 'admin';
        $_SESSION['studentnumber'] = $studentnumber;
        $_SESSION['name'] = $list[0]['name'];
        $this->assign('btn_ok_act','add');
        $this->assign('btn_ok_text','添加文章');
        $this->display('Admin:manage_head');
        $this->display('Admin:manage_content1');
      }
    }
    else{
      echo "<script>alert(\"登录失败\");window.location.href='http://scausy.cn'</script>";
    }
  }
 }

 /**
  * 页面返回登录或登录者名字
  */
 public function islogin(){
   if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];
   }
   else{
    echo "登录";
   }
 }

 /**
  * 退出登录
  */
 public function isLogout(){
   session(null);
   echo "<script>window.location.href='http://scausy.cn'</script>";
 }

 //发送激活邮件
 public function sentEmail(){
   $time = trim(time()+60*60*24);
   if (isset($_GET['email']) && $_GET['email']) {
     $subject = '思源工作室网站邮箱激活';
     $body =$_GET['name']."同学你好！思源工作室网站邮箱激活，请点击 <a href='http://scausy.cn/home/login/activation?action=".$time ;       
     $body .= "'target='_blank'> http://scausy.cn/home/login/activation?action=".$time."</a>" ;
     sentEmail($_GET['email'],$subject,$body);
   }
   $set = array(
     'id'=>$_GET['studentnumber'],
     'grade'=>trim($_GET['grade']),
     'major'=>trim($_GET['major']),
     'class'=>trim($_GET['class']),
     'name'=>trim($_GET['name']),
     'email'=>trim($_GET['email']),
     'groups'=>trim($_GET['group']),
     'college'=>trim($_GET['college']),
     'phone'=>trim($_GET['phone']),
     'created'=>$time,
   );
   $set['password'] = trim($_GET['password']);
   $studentsModel = D('Students');
   $row = $studentsModel->add($set);
   if ($row) {
     $_SESSION['studentnumber'] = $set['id'];
     $_SESSION['name'] = $set['name'];
     $_SESSION['admin'] = 'student';
     $_SESSION['expire'] = 3600;
     $this->display('emailProving');
   }
   else{
      return false;
   }  
  }

 /**
  * 激活邮箱
  */
 public function activation(){ 
  header('Content-Type:text/html;charset=utf-8');
   if (isset($_GET['action']) && $_GET['action']!='') {
     if (trim($_GET['action'])>=trim(time())) {
       $studentsModel = D('Students');
       $data['created'] = 'ok';
       $row = $studentsModel->data($data)->where('created='.trim($_GET['action']))->save();
       if ($row) {
         echo "<script>alert(\"邮箱激活成功\");window.location.href='http://scausy.cn'</script>";
       }
       else{
         $this->display('failEmailProving'); 
       }
     }
     else{
      $this->display('failEmailProving');
     }
   }
 }
}