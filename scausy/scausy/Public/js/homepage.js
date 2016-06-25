$(document).ready(function(){
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest(); // code for IE7+, Firefox, Chrome, Opera, Safari
	} else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); // code for IE6, IE5
	}
	xmlhttp.open("GET", url+"/index.php/home/login/islogin", true);
	xmlhttp.send();

	xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				//		    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
				$("#head_login").text(xmlhttp.responseText);
				if (xmlhttp.responseText == "登录") {
					$("#login").click(function() {
						/* 点击“登录”下滑切换登陆小窗口*/
						$(".login_pane").slideToggle(1000);
					});
					$("#mytab").click(function() {
						$(".login_pane").slideUp(1000);
					});

				} else {
					$("#login").hover(function(){
						$(".exit_log").slideDown(500);
					});
					$(".content").hover(function(){
						$(".exit_log").slideUp(500);
					})
				}
			}
		}


    /*
     *输入学号，异步传输到后台，若无此数据则显示验证码 
     */
    $("#username").blur(function(){
    	
    	//$("#validate").slideDown(500);//下滑验证码，测试失去焦点用的。你可注释掉
    	
    	var xmlhttp;
		if (window.XMLHttpRequest){
		  xmlhttp=new XMLHttpRequest();// code for IE7+, Firefox, Chrome, Opera, Safari
		}
		else {
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");// code for IE6, IE5
		}
		xmlhttp.open("GET",url+"/index.php/home/login/login? studentnumber="+ $("#user_name").val()+" &password=" + $("#password").val(),true);//改为你的路径
		xmlhttp.send();
		
		xmlhttp.onreadystatechange=function(){
		  if (xmlhttp.readyState==4 && xmlhttp.status==200){

			if(xmlhttp.responseText==='false'){
				$("#validate").slideDown(500);//下滑验证码
		    }
		    else  {
		    	$("#validate").slideUp(500);//上拉验证码
		    }
		  }
		  
		}
    });
    
    /*
     *输入密码，异步传输到后台，若密码错误则显示验证码 
     */
 

    $("#password").blur(function(){
    	
//  	$("#validate").slideDown(500);//下滑验证码
    	var xmlhttp;
		if (window.XMLHttpRequest){
		  xmlhttp=new XMLHttpRequest();// code for IE7+, Firefox, Chrome, Opera, Safari
		}
		else {
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");// code for IE6, IE5
		}
		xmlhttp.open("GET",url+"/index.php/home/login/login? studentnumber="+ $("#user_name").val()+" &password=" + $("#password").val(),true);//改为你的路径
		xmlhttp.send();
			
		xmlhttp.onreadystatechange=function(){
		  if (xmlhttp.readyState==4 && xmlhttp.status==200){
//		    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
            
			if(xmlhttp.responseText=='false'){
				$("#validate").slideDown(500);//下滑验证码	
		    }
		    else $("#validate").slideUp(500);
		  }

		}
    });

    $("#student_login").click(function(){

    	var xmlhttp;
		if (window.XMLHttpRequest){
		  xmlhttp=new XMLHttpRequest();// code for IE7+, Firefox, Chrome, Opera, Safari
		}
		else {
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");// code for IE6, IE5
		}
		xmlhttp.open("GET",url+"/index.php/home/login/zhengfang ? username="+ $("#user_name").val()+"&password=" + $("#password").val()+"&code=" + $("#validate_code").val() + "& i",true);
		xmlhttp.send();
				
		xmlhttp.onreadystatechange=function(){
		  if (xmlhttp.readyState==4 && xmlhttp.status==200){
		  	// alert("dis");
//		    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
			if(xmlhttp.responseText=='false'){
				 alert("登陆失败！信息有误！");
			
				 $(".login_warning").text("登陆失败！信息有误！");
    	         //return false;
		    }
		    else{

		    	return true;
		    } 
		  }

		}	
    });

    $("#img_code").click(function(){
			$("#img_code").src = "./index.php/home/login/code?"+Math.random();
    });

    printfSiYuan();
    
});

 text="负责全院奖助贷、勤工助学、贫困入库、竹铭计划、志愿感恩等工作！";
 i = 0;
 function printfSiYuan(){
  str  = text.substr(0,i);
  document.getElementById("jumbotron_p").innerHTML = str;
  i++;
  if (i>text.length){
   i=0;
   return true ;//加入则text显示完后，停止。 
  }
  setTimeout("printfSiYuan()",150);
 }
 
$(function(){
        var $this = $(".scrollNews");
		var scrollTimer;
		$this.hover(function(){
			  clearInterval(scrollTimer);
		 },function(){
		   scrollTimer = setInterval(function(){
						 scrollNews( $this );
					}, 4000 );
		}).trigger("mouseleave");
});
function scrollNews(obj){
   var $self = obj.find("ul:first"); 
// var lineHeight = 400px; //获取行高
   $self.animate({ "marginLeft" : "-700px" }, 3000 , function(){
         $self.css({marginLeft:0}).find("li:first").appendTo($self); //appendTo能直接移动元素
   })
}