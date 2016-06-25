<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
/**
 * 模范板块类
 * @author 601647957@qq.com
 * @time 2015/10/27 
 */
class ExemplarController extends Controller
{  
   /**
    * 添加
    */
   public function add(){
     if(!isAdminLogin()){
       header('Content-Type:text/html;charset=utf-8');
        echo "<script>alert(\"请先登录\");window.location.href='scausy.cn'</script>";
       return false;
     } 
     if (!isset($_POST['brief_introduction']) && $_POST['brief_introduction']==''||
     	 !isset($_POST['picture_url']) && $_POST['picture_url']!=''||
     	 !isset($_POST['author']) && $_POST['author']!=''||
     	 !isset($_POST['subject']) && $_POST['subject']!=''||
     	 !isset($_POST['title']) && $_POST['title']!=''||
     	 !isset($_POST['editorValue']) && $_POST['editorValue']!=''
     	 ) {
       $this->error('参数有误，返回上级页面');
         }
     $data['tag'] = $_POST['tag'];
     $data['brief_introduction'] = $_POST['brief_introduction'];
     $data['picture_url'] = $_POST['picture_url'];
     $data['createTime'] = time();
     $data['updateTime'] = time();
     $data['author'] = $_POST['author'];
     $data['subject'] = $_POST['subject'];
     $data['title'] = $_POST['title'];
     $data['body'] = $_POST['editorValue'];
     // $memcache = memcache_connect("115.28.77.237", 11211); 
     $exemplarModel = M('essay');
     if( $exemplarModel->add($data)){

        $this->success('添加成功，返回上级页面');//U('Index/index')
      }else{
        $this->error('添加失败，返回上级页面');
      } 
   }

   /**
    * 删除
    */
   public function delete(){
     if(!isAdminLogin()){
       header('Content-Type:text/html;charset=utf-8');
       echo "<script>window.location.href=".__ROOT__."</script>";
       return false;
     } 
     if (!isset($_GET['id']) && $_GET['id']!=''&&
     	 !isset($_GET['action']) && $_GET['action']!='delete') {
       $this->error('非法操作，返回上级页面');
     }
     $map['id'] = $_GET['id'];
     $exemplarModel = M('Essay');
     if ($exemplarModel->where($map)->delete()) {
       $this->success('删除成功');
     }else{
       $this->success('删除失败');
     }
   }

   /**
    * 更新
    */
   public function update(){
      if(!isAdminLogin()){
       header('Content-Type:text/html;charset=utf-8');
       echo "<script>window.location.href='".__ROOT__."'</script>";
       return false;}
     if (!isset($_POST['action'])) {
       $map['id'] = $_GET['id'];
       $exemplarModel = M('essay');
       $list = $exemplarModel->where($map)->select();
       if ($list) {
         $array['content7'] = '"active"';
         $this->assign('array',$array);
         $this->assign('list',$list);
         $this->display('Admin:manage_head');
         $this->display('Admin:updateExemplar');
         return true;
       }else{
         $this->error('参数有误');
       }
     }
     $map['id'] = $_POST['id'];
     $data['tag'] = $_POST['tag'];
     $data['brief_introduction'] = $_POST['brief_introduction'];
     $data['picture_url'] = $_POST['picture_url'];
     $data['updataTime'] = time();
     $data['author'] = $_POST['author'];
     $data['subject'] = $_POST['subject'];
     $data['title'] = $_POST['title'];
     $data['body'] = $_POST['editorValue'];
     $exemplarModel = M('essay');
     if($exemplarModel->where($map)->save($data)){
        $this->success('更新成功，返回上级页面');//U('Index/index')
      }else{
        $this->error('更新失败，返回上级页面');
      } 
     } 
   

   /**
    * 管理
    */
   public function administrate(){
       if(!isAdminLogin()){
       header('Content-Type:text/html;charset=utf-8');
       echo "<script>window.location.href='".__ROOT__."'</script>";
       return false;
       }
    $exemplarModel=M('Essay');  
    $count=$exemplarModel->count();
    $_GET['P'] = (!isset( $_GET['P'])) ? 1 : $_GET['P'] ;
    $list = $exemplarModel->order('id desc')->page($_GET['P'].',8')->select();
    $Page = new Page($count,8);
    $Page->nowUrl = __ROOT__."/home/exemplar/administrate ?";
    $show = $Page->show();
    $this->assign('list',$list);
    $this->assign('count',$count);
    $this->assign('page',$show); 
    $this->assign('active',$array);
    $array['content7'] = '"active"';
    $this->assign('array',$array);
    $this->display('Admin:manage_head');
    $this->display('Admin:manage_content8');
    //$this->display('Admin:manage_footing');
   }
}