<?php
header("content-type:text/html;charset=utf-8");
require_once 'class.phpmailer.php';
try {
	$mail = new PHPMailer(true); 
	$mail->IsSMTP();
	$mail->CharSet='UTF-8'; //设置邮件的字符编码，这很重要，不然中文乱码
	$mail->SMTPAuth   = true;                  //开启认证
	$mail->Port       = 25;                    
	$mail->Host       = "smtp.163.com"; 
	$mail->Username   = "15016291381@163.com";    
	$mail->Password   = "biglgnjovpvodfkd";            
	//$mail->IsSendmail(); //如果没有sendmail组件就注释掉，否则出现“Could  not execute: /var/qmail/bin/sendmail ”的错误提示
	$mail->AddReplyTo("15016291381@163.com","6666");//回复地址
	$mail->From       = "15016291381@163.com";
	$mail->FromName   = "lcy";
	$to = "862727566@qq.com";
	$mail->AddAddress($to);
	$mail->Subject  = "测试测试";
	$mail->Body = "<h1>phpmail</h1> 马蛋，终于不会报错了，那注册需要哪些信息，邮箱，姓名，年级，班级吗？";
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; //当邮件不支持html时备用显示，可以省略
	$mail->WordWrap   = 80; // 设置每行字符串的长度
	//$mail->AddAttachment("f:/test.png");  //可以添加附件
	$mail->IsHTML(true); 
	$mail->Send();
	echo '邮件已发送';
} catch (phpmailerException $e) {
	echo "邮件发送失败：".$e->errorMessage();
}
?>