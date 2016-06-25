<?php
namespace Home\Controller;
use Think\Controller;
class SchedulingController extends Controller
{ 
  function index(){
    $logic = D('Scheduling','Logic');
    $logic -> begin('2015-10-1',1,2,2);
  }
  function show(){
  	$logic = D('Scheduling','Logic');
    $array = $logic -> show();
    echo "<pre>";
    var_dump($array);
    $this->assign('array',$array);
    $this->assign('list',$list);
    $this->display('index');
  }

}