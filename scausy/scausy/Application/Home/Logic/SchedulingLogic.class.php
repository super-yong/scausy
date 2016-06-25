<?php
namespace Home\Logic;
use Think\Model;
/**
 * author:lcy
 * time:2015/9/18
 * email:601647957@qq.com
 * 排班逻辑业务类
 */
class SchedulingLogic extends Model
{
  static $list; //未排班
  static $finish;//已经排班
  static $aimCourse;//目标课时
  static $count;//剩余人数
  static $nowtime;//当前时间
  static $beginTime;//开始时间
  /**
   * @功能：开始受助生排班
   * @param String $beginTime开始时间
   * @param String $beginWeek开始周数
   * @param String $frequency每个学生值班的次数，最多两轮
   * @param String $student 每节课需要几名学生值班
   */
  function begin($beginTime,$beginWeek,$frequency,$student){ 
    header("Content-Type:text/html;charset=utf-8");
    self::$beginTime = strtotime($beginTime);//开始时间
    self::$nowtime = self::$beginTime; //$nowtime当前时间
    $endTime = strtotime('2015-01-11');//结束时间
    $courseModel = M('Course');
    self::$list = $courseModel->select();
    self::$count = $courseModel->count();
    //每人需要排几次班
    for ($i=1; $i <$frequency ; $i++) { 
      self::$list = array_merge(self::$list,$courseModel->select());
      self::$count += $courseModel->count();
    }
    //[下标][值班日期：年月日][第几节课值班][id]
    $nowCourse = 0;
    $studentcount = self::$count;
    $num = 0;//计数完成排班的人数下标
    for ($studentNum=0; ;$studentNum++){ 
       $nowWeek = date('w',self::$nowtime);//算出是周几
       if ($nowWeek==0||$nowWeek==6) { //默认周六日不排班
         self::$nowtime +=3600*24; //时间往后推一天  
       }else{
         for ($i=0; $i < $student && self::$count > 0; $i++){ //每节课值班人次
           for ($nowCourse=1; $nowCourse <= 4 && self::$count > 0; $nowCourse++) { //一天四节大课
              $course = $nowWeek.'-'.$nowCourse;
              self::$aimCourse = $course;
              $stu = 0;//计数剩下的人
              for ($stu=0; $stu < self::$count; $stu++) { 
                if (self::$list[$stu][$course]=='无课') {
                  //同一天同一节课不能同一个人
                  $date = self::$nowtime/3600/24 - self::$beginTime/3600/24;
                  $array = explode('-', self::$aimCourse);
                  $sum = $date*8 +(int)$array[1]-1;
                  if (self::$finish[$sum]['id']['id'] != self::$list[$stu]['id']) {
                    break; 
                  }     
                }
              }
              if ($stu<self::$count) {
                self::$count--;
                self::$finish[$num]['nowtime'] = self::$nowtime;
                self::$finish[$num]['course'] = $course;
                self::$finish[$num]['id'] = self::$list[$stu];
                $num++;
                array_splice(self::$list, $stu,1);//从未安排人中删除，并重新引索
              }else{
                $dd = $this->finding();
                if($dd===false){
                  self::$finish[$num]['nowtime'] = self::$nowtime;
                  self::$finish[$num]['course'] = $course;
                  self::$finish[$num]['id'] = null; 
                  $num ++;
                }else{
                  self::$count--;
                  self::$finish[$num]['nowtime'] = self::$nowtime;
                  self::$finish[$num]['course'] = $course;
                  self::$finish[$num]['id'] = self::$list[$dd]; 
                  $num ++;
                  array_splice(self::$list, $dd,1);//从未安排人中删除，并重新引索
                }
              }  
           }
         }
         if (self::$count<=0) {
           break;
         }
         self::$nowtime +=3600*24;
       }
    }
    echo "<pre>";
    var_dump(self::$finish);
    echo "<br>==============================================================";
    var_dump(self::$list);

    $schedulingModel = M('Scheduling');
    for ($i=0; $i <count(self::$finish); $i++) { 
      $data['scheduling_id'] = 1;
      $data['time'] = self::$finish[$i]['nowtime'];
      $data['course'] = self::$finish[$i]['course'];
      $data['stu_id'] = self::$finish[$i]['id']['id'];
      $schedulingModel->add($data);
    }
    
  }

  /**
   *@功能 从未排中的人找出可以符合的人，或从已经排的人中置换出符合条件的人
   *@return 找到符合的人返回int $num，未找到返回Boolean false 
   */
  function finding(){
    for ($num = 0; $num <self::$count; $num++){      
      for($i = 1;$i<= 5; $i++) {
        for ($j = 1; $j <= 4 ; $j++) { 
          if (self::$list[$num][$i.'-'.$j]=='无课') {
            $exchange = $this->found($i.'-'.$j);
            if ($exchange!==false) {
              $exchange2 = self::$list[$num];
              self::$list[$num]=self::$finish[$exchange]['id'];
              self::$finish[$exchange]['id']=$exchange2;
              return $num;
            }
          }
        }
      }
    }
    return false;
  }

   /**
   *@功能 在已经排班的数组中查找能未排班的人
   *@param String $course 需要查找的课
   *@return Int/boolean  找到返回下标，未找到返回false  
   */
  function found($course){
    for ($i = 0; $i<count(self::$finish); $i++){
      if (self::$finish[$i]['id'][$course]=='无课') {
        if (self::$finish[$i]['id'][self::$aimCourse]=='无课'){     
          //同一天同一节课不能同一个人
          $date = self::$nowtime/3600/24 - self::$beginTime/3600/24;//算出开始到现在天数
          $array = (int)explode('-', self::$aimCourse);//当天第几节课
          $sum = $date*8 +(int)$array[1]-1;//算出下标
          if (self::$finish[$sum]['id']['id'] !== self::$finish[$i]['id']['id']){
            return $i;
          }   
        }else{
          for ($k = 1; $k <= 5; $k++){ 
            for ($j = 1; $j <= 4 ; $j++){ 
              if (self::$finish[$i][$k.'-'.$j]=='无课'){
                $exchange = found($k.'-'.$j);
                if ($exchange!==false) {
                  $exchange2 = self::$finish[$i]['id'];
                  self::$finish[$i]['id'] = self::$finish[$exchange]['id'];
                  self::$finish[$exchange]['id'] = $exchange2;
                  return $i;
                }
              }
            }
          }
        }
      }
    }
    return false;
  }

 /**
  * @功能：模板显示
  * @param array $set
  */
 function show(){
   $schedulingModel = M('Scheduling');
   $arraylist = $schedulingModel->where('scheduling_id=1')->limit(1)->select();
   $nowtime = (int)$arraylist[0]['time'];
   unset($arraylist);
   for ($i=0; $i>=0; $i++) { 
     for ($j=1; $j <=5 ; $j++) { 
        for ($k=1; $k <=4 ; $k++) { 
          if (date('w',$nowtime) == $j) {
            $map['course'] = $j.'-'.$k;
            $map['time'] = $nowtime;
            $arraylist = $schedulingModel->where($map)->select();
            $array[$i][$j][$k] = $arraylist;
          }     
          $array[$i][$j][$k] = $arraylist;    
        }
        if (date('w',$nowtime) == $j) {
          $nowtime += 3600*24;
        }
      } 
      $nowtime += 3600*24*2;
      $map['time'] = $nowtime;
      $arraylist = $schedulingModel->where($map)->select();
      if (!$arraylist) {
        break;
      }
   }
   return $array;
 }
}