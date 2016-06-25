$(document).ready(function() {
	$("#btn_submit").click(function(){
    	 var email_val=$("#student_email").val();
         var phone_val=$("#student_phone").val();
    	if(email_val==""){
    		$("#warning").text("邮箱不能为空！")
    		return false;
    	}else if(!email_val.match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)){
    		$("#warning").text("邮箱格式不正确");
    		return false;
    		
    	}else if(phone_val==""){
    		$("#warning").text("手机号不能为空！")
    		return false;
    	}else if(phone_val.length<4||phone_val.length>11||!phone_val.match(/^[0-9]*$/)){
    		$("#warning").text("请正确填写手机格式！");
    		return false;
    	}
    });

	function hideWarning() {
		if ($("#student_email").val() != "" &&
			$("#student_email").val().match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) &&
			$("#student_phone").val().length >= 4 &&
			$("#student_phone").val().length <= 11) {

			$("#warning").text("");
		}
	}
	$("#student_email").blur(hideWarning);
	$("#student_phone").blur(hideWarning);

	$(".logout").click(function() {
		if (confirm("确定注销用户吗？")) {
			return true;
		} else {
			return false;
		}
	});

	$(".modify_data").click(function() {
		if (confirm("确定修改资料吗？")) {
			return true;
		} else {
			return false;
		}
	});
});