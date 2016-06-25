<?php
namespace Home\Controller;
use Think\Page;
use Think\Controller;
/**
     * @类		WenzhangListController
     * @功能	后台文章管理控制器
*/
class WenzhangListController extends Controller 
{	
  /**
   * @函数	index
   * @功能	显示通知、新闻
   */
  public function index($group='Article'){
    if(!isAdminLogin()){
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>alert(\"请先登录\");window.location.href='http://scausy.cn'</script>";
      return false;
    } 	
    $group = (isset($_POST['select']) && $_POST['select']=='新闻') ? 'News' : $group ;
    $delete = (isset($_POST['select']) && $_POST['select']=='新闻') ? 'News' : $group ;
    $news=M($group);	
    $count=$news->count();
    //分页显示文章列表，每页8篇文章
    $_GET['P'] = (!isset( $_GET['P'])) ? 1 : $_GET['P'] ;
    $_GET['group'] = (!isset( $_GET['group'])) ? $group : $_GET['group'] ;
    $list=$news->order('id desc')->page($_GET['P'].',8')->select();
    $Page = new Page($count,8);
    $Page->nowUrl = __ROOT__.'/home/wenzhangList?group='.$_GET['group'];
    $show = $Page->show();
    $article = ($_GET['group']=='Article') ? 通知 : 新闻 ;
    $this->assign('article',$article);
    $this->assign('array',$array);
    $this->assign('list',$list);
    $this->assign('count',$count);
    $this->assign('page',$show);
    $this->assign('delete',$delete);
    $this->display('Admin:manage_head');
    $this->display('Admin:manage_content4');
  }
       
  /**
   * @函数	delete
   * @功能	删除文章
   */
  function delete(){
    if(!isAdminLogin()){
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>window.location.href='http://scausy.cn'</script>";
      return false;
    }   
    if (isset($_GET['news']) && $_GET['news']=='News') {
     $model='News';
    }else if (isset($_GET['news']) && $_GET['news']=='Article') {
     $model='Article';
    } else{
     $this->error('非法操作，返回上级页面');
    } 
    $article=M($model);
    if($article->delete($_GET['id'])){
    $this->success('文章删除成功');
    }else{
      $this->error($article->getLastSql());
    }
  }
    
  /**
   * @函数	edit
   * @功能	编辑文章
   */
  function edit(){
    if(!isAdminLogin()){
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>window.location.href='".__ROOT__."'</script>";
      return false;
    }   
    if(isset($_GET['id'])){
      $id = (int)$_GET['id'];
      if ($_GET['news']=='News') {
        $model = 'News';
      }else if($_GET['news']=='Article') {
        $model = 'Article';
      } 
      $article = M($model);
      $article_item = $article->where("id=$id")->find();  
      $this->assign('article_item',$article_item);  
      $this->assign('btn_ok_text','完成修改');
      $this->assign('btn_ok_act','update');
      $this->assign('group',$model);
    }else{
      $this->assign('btn_ok_act','add');
      $this->assign('btn_ok_text','添加文章');
    }
    $this->display('Admin:manage_head');
    $this->display('Admin:manage_content1');
  } 

  /**
   * 添加通知/新闻
   */
  function add(){
    if(!isAdminLogin()){
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>window.location.href='".__ROOT__."'</script>";
      return false;
    }   
    if (isset($_POST['select']) && $_POST['select']=='新闻') {
      $model='News';
    }else if (isset($_POST['select']) && $_POST['select']=='通知') {
      $model='Article';
    } else{
      $this->error('非法操作，返回上级页面');
    } 
    $article=D($model);    
    if($article->create()){
      $article->message = $_POST['editorValue'];
      $article->author = session('name');   
      $article->lastmodifytime = time(); 
      //将文章写入数据库
      if($article->add()){
        $this->success('文章添加成功，返回上级页面');//U('Index/index')
      }else{
        $this->error('文章添加失败，返回上级页面');
      } 
    }else{
      $this->error($article->getError());
    } 
  }
    
  /**
   * 修改通知/新闻
   */
  function update(){
    if(!isAdminLogin()){
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>alert(\"请先登录\");window.location.href='".__ROOT__."'</script>";
      return false;
     }   
    if (isset($_POST['group']) && $_POST['group']=='News') {
      $model='News';
    }else if (isset($_POST['group']) && $_POST['group']=='Article') {
      $model='Article';
    } else{
      $this->error('非法操作，返回上级页面');
    } 
    $article=M($model);    
    $data = array('subject'=>$_POST['subject'],'message'=>$_POST['editorValue'],'lastmodifytime'=>time());   
    $id=$_POST['id'];
    $article->where('id='.$id)->setField($data); // 根据条件保存修改的数据
    $this->success('修改成功，返回上级页面');
  }
}

