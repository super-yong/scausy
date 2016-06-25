<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
/**
 * @网站主页入口
 * @author 601647957@qq.com
 * @time 2015/9
 */
class IndexController extends Controller 
{
  public function index(){
  	$news=M('Article');	
    $list=$news->order('id desc')->limit(8)->select();
    $pictureModel = M('Activity');
    $pictureArray = $pictureModel->select();
    $this->assign('list',$list);
    $this->assign('pictureArray',$pictureArray);
  	$array[0] = 'active';
  	$this->assign('active',$array);
    $this->display('index_head');
    $this->display('index_home');
    $this->display('index_footing');
  }

  /**
   * 主页显示通知
   */
  public function news(){
    $news=M('Article');	
    $count=$news->count();
    $_GET['P'] = (!isset( $_GET['P'])) ? 1 : $_GET['P'] ;
    $list=$news->order('id desc')->page($_GET['P'].',3')->select();
    $Page = new Page($count,3);
    $Page->nowUrl =__ROOT__."/home/index/news?";
    $show = $Page->show();
    $array[1] = 'active';
    $this->assign('article',$article);
    $this->assign('list',$list);
    $this->assign('count',$count);
    $this->assign('page',$show); 
  	$this->assign('active',$array);
  	$this->display('index_head');
    $this->display('index_news');
    $this->display('index_footing');
  } 

   /**
   * 主页显示活动风采
   */
  public function activity(){
    $news=M('News');	
    $count=$news->count();
    $_GET['P'] = (!isset( $_GET['P'])) ? 1 : $_GET['P'] ;
    $list=$news->order('id desc')->page($_GET['P'].',3')->select();
    $Page = new Page($count,3);
    $Page->nowUrl = __ROOT__."/home/index/activity?";
    $show = $Page->show();
    $array[2] = 'active';
    $this->assign('article',$article);
    $this->assign('list',$list);
    $this->assign('count',$count);
    $this->assign('page',$show); 
  	$this->assign('active',$array);
  	$this->display('index_head');
    $this->display('index_activity');
    $this->display('index_footing');
  } 

  /**
   * 
   */
  public function train(){
  	$array[3] = 'active';
  	$this->assign('active',$array);
  	$this->display('index_head');
    $this->display('index_train');
    $this->display('index_footing');
  } 
  public function organization(){
    $organizationModel = M('Organization');
    $map['id'] = 1;
    $list = $organizationModel->where($map)->select();
  	$array[4] = 'active';
  	$this->assign('active',$array);
    $this->assign('list',$list);
  	$this->display('index_head');
    $this->display('index_organization');
    $this->display('index_footing');
  } 

  /**
   * 显示完整的文章，阅读次数加1
   */
  public function showArticle(){
    if (!isset($_GET['id'])||!isset($_GET['group'])) {
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>alert(\"非法操作\");window.location.href='http://scausy.cn'</script>";
      return false;     
    }
    if (isset($_GET['group']) && $_GET['group']=='News') {
       $articleModel = M('News');  
    }else{
      $articleModel = M('Article');
    }
    $map['id'] = $_GET['id'];
    $articleModel->where($map)->SetInc('createtime');
    $info = $articleModel->where($map)->select(); 
    $this->assign('list',$info);
    $this->display('openNews');
  }

   /**
   * 主页模范频道
   */
  public function exemplar(){
    $exemplarModel=M('Essay');  
    $count=$exemplarModel->count();
    $_GET['P'] = (!isset( $_GET['P'])) ? 1 : $_GET['P'] ;
    $list=$exemplarModel->order('id desc')->page($_GET['P'].',6')->select();
    $Page = new Page($count,6);
    $Page->nowUrl = __ROOT__."/home/index/exemplar?";
    $show = $Page->show();
    $array[3] = 'active';
    $this->assign('list',$list);
    $this->assign('count',$count);
    $this->assign('page',$show); 
    $this->assign('active',$array);
    $this->display('index_head');
    $this->display('index_train');
    $this->display('index_footing');
  } 

   /**
   * 显示完整
   */
  public function showExemplar(){
    if (!isset($_GET['id'])) {
      header('Content-Type:text/html;charset=utf-8');
      echo "<script>alert(\"非法操作\");window.location.href='http://scausy.cn'</script>";
      return false;     
    }
    $model = M('Essay');
    $map['id'] = $_GET['id'];
    $info = $model->where($map)->select(); 
    $this->assign('list',$info);
    $this->display('openExemplar');
  }

}