<?php
namespace Home\Api;
use Think\Model;
define('SCRIPT_ROOT',dirname(__FILE__.'/'));
class ZhengfangApi extends Model
{   
  protected $tableName = 'students';  
  /**
   *模拟登录
   *@param  string  $txtUserName 学号
   *@param  string  $password 密码
   *@param  string  $code 验证码
   */
  public function login($txtUserName,$password,$code){
    $sessionId = session_id();
    $loginParams['__VIEWSTATE'] = 'dDwyODE2NTM0OTg7Oz6XQwtkC4IPj2mY5bsI42qRkaJNzw==';
    $loginParams['RadioButtonList1'] = '学生';
    $loginParams['TextBox2'] = $password;
    $loginParams['txtUserName'] = $txtUserName;
    $loginParams['Button1'] = '';
    $loginParams['lbLanguage'] = '';
    $loginParams['hidPdrs'] = '';
    $loginParams['hidsc'] = '';
    $loginParams['txtSecretCode'] = $code;
    $cookieFile = SCRIPT_ROOT.'cookie.tmp';
    $targetUrl = 'http://202.116.160.170/default2.aspx';
    $ch = curl_init($targetUrl);
    curl_setopt($ch,CURLOPT_COOKIEFILE, $cookieFile); //同时发送Cookie
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);//设定返回的数据是否自动显示
    curl_setopt($ch, CURLOPT_HEADER, 0);//设定是否显示头信 息
    curl_setopt($ch, CURLOPT_NOBODY, false);//设定是否输出页面 内容
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 200);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $loginParams); //提交查询信息
    curl_exec($ch);//返回结果
    $en_contents=mb_convert_encoding( curl_exec($ch),'utf-8', array('Unicode','ASCII','GB2312','GBK','UTF-8')); 
    curl_close($ch); //关闭
    //return $en_contents;
  }
  
  /**
   *返回获取学生信息，和课表
   *@param  string $studentNumber 学号
   *@return  string $en_contents  返回抓取的字符串信息
   */
  public function getInfo($studentNumber){
    $sessionId = session_id();
    $curl2=curl_init();
    $cookieFile = SCRIPT_ROOT.'cookie.tmp';
    curl_setopt ($curl2,CURLOPT_REFERER,'http://202.116.160.170/xs_main.aspx?xh='.$studentNumber.'#a');
    curl_setopt($curl2, CURLOPT_COOKIEFILE, $cookieFile); 
    curl_setopt($curl2, CURLOPT_USERAGENT, 'User-Agent: Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36');
    curl_setopt($curl2, CURLOPT_HEADER, false); 
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($curl2, CURLOPT_TIMEOUT, 20); 
    curl_setopt($ch, CURLOPT_MAXREDIRS, 200);
    curl_setopt($curl2, CURLOPT_AUTOREFERER, true); 
    curl_setopt($curl2, CURLOPT_FOLLOWLOCATION, true); 
    curl_setopt($curl2, CURLOPT_URL, 'http://202.116.160.170/xskbcx.aspx?xh='.$studentNumber);//登陆后要从哪个页面获取信息
    $en_contents=mb_convert_encoding( curl_exec($curl2),'utf-8', array('Unicode','ASCII','GB2312','GBK','UTF-8')); 
    curl_close($curl2);
    return $en_contents;
  }

/**
 * 课表数组化
 * @param  string $en_contents 抓取的信息
 * @return  array $array 课表数组
 */
 function converttoTable($en_contents){
   preg_match_all('/<table id="Table1"[\w\W]*?>([\w\W]*?)<\/table>/',$en_contents,$out);
   $table = $out[0][0]; 
   preg_match_all('/<td [\w\W]*?>([\w\W]*?)<\/td>/',$table,$out);
   $td = $out[1];
   $length = count($td);
   //获得课程列表
   for ($i=0; $i < $length; $i++) {
     $td[$i] = str_replace("<br>", "", $td[$i]);
     $reg = "/{(.*)}/";
     if (!preg_match_all($reg, $td[$i], $matches)) {
       unset($td[$i]);
     }
   }
   $table = array_values($td); //将课程列表数组重新索引
   $tdLength = count($table);
   $list = array(
     'sun' => array(
       '1,2' => '无课',
       '3,4' => '无课',
       '5,6' => '无课',
       '7,8' => '无课',
       '9,10' => '无课',
     ),
     'mon' => array(
       '1,2' => '无课',
       '3,4' => '无课',
       '5,6' => '无课',
       '7,8' => '无课',
       '9,10' => '无课',
     ),
     'tues' => array(
       '1,2' => '无课',
       '3,4' => '无课',
       '5,6' => '无课',
       '7,8' => '无课',
       '9,10' => '无课',
     ),
     'wed' => array(
       '1,2' => '无课',
       '3,4' => '无课',
       '5,6' => '无课',
       '7,8' => '无课',
       '9,10' => '无课',
     ),
     'thur' => array(
       '1,2' => '无课',
       '3,4' => '无课',
       '5,6' => '无课',
       '7,8' => '无课',
       '9,10' => '无课',
     ),
     'fri' => array(
       '1,2' => '无课',
       '3,4' => '无课',
       '5,6' => '无课',
       '7,8' => '无课',
       '9,10' => '无课',
     ),
     'sat' => array(
       '1,2' => '无课',
       '3,4' => '无课',
       '5,6' => '无课',
       '7,8' => '无课',
       '9,10' => '无课',
     )
    );
    $week = array("sun"=>"周日","mon"=>"周一","tues"=>"周二","wed"=>"周三","thur"=>"周四","fri"=>"周五","sat"=>"周六");
    $order = array('1,2','3,4','5,6','7,8','9,10');
    foreach ($table as $key => $value) {
      $class = $value;
      foreach ($week as $key => $weekDay) {
        $pos = strpos($class,$weekDay);
        if ($pos) {
          $weekArrayDay = $key; //获取list数组中的第一维key
          foreach ($order as $key => $orderClass) {
            $pos = strpos($class,$orderClass);
            if ($pos) {
              $weekArrayOrder = $orderClass; //获取该课程是第几节
              break;
            }
          }
          break;
        }
      }          
      $list[$weekArrayDay][$weekArrayOrder] = $class;      
    }
    $array['1-1'] = $list['mon']['1,2'];
    $array['1-2'] = $list['mon']['3,4'];
    $array['1-3'] = $list['mon']['7,8'];
    $array['1-4'] = $list['mon']['9,10'];
    $array['2-1'] = $list['tues']['1,2'];
    $array['2-2'] = $list['tues']['3,4'];
    $array['2-3'] = $list['tues']['7,8'];
    $array['2-4'] = $list['tues']['9,10'];
    $array['3-1'] = $list['wed']['1,2'];
    $array['3-2'] = $list['wed']['3,4'];
    $array['3-3'] = $list['wed']['7,8'];
    $array['3-4'] = $list['wed']['9,10'];
    $array['4-1'] = $list['thur']['1,2'];
    $array['4-2'] = $list['thur']['3,4'];
    $array['4-3'] = $list['thur']['7,8'];
    $array['4-4'] = $list['thur']['9,10'];
    $array['5-1'] = $list['fri']['1,2'];
    $array['5-2'] = $list['fri']['3,4'];
    $array['5-3'] = $list['fri']['7,8'];
    $array['5-4'] = $list['fri']['9,10'];
    return $array;
  }
}