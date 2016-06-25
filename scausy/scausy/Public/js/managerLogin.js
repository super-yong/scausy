$(document).ready(function() {

	//	$('.tabs a:last').tab('show');



//	$("#lookup").click(function() {
		//这是测试点击添加，已可成功添加
		//		var obj={//json格式，多个对象的话是用数组存放吧，下边有改动
		//			   "student_name":"刘超勇",
		//			   "student_number":"201330320",
		//			   "student_phone":"18817391",
		//			   "student_email":"1320279417@qq.com",
		//			   "student_grade":"2013",
		//			   "student_class":"13计机6班",
		//			   "student_group":"生委"
		//			
		//		}
		//		var txttable = "<tr><td>"+obj.student_name+"</td><td>"+obj.student_number+"</td><td>"
		//			               +obj.student_phone+"</td><td>"+obj.student_email+"</td><td>"+obj.student_grade+"</td><td>"
		//			               +obj.student_class+"</td><td>"+obj.student_group+"</td><td><a href='#'>删除</a>"+"</td></tr>";
		//		$(".addtr").append(txttable);


//		$.get("demo.php", {
//			option_grade: $("#option_grade").val(); //这里前边变量改为与你php设置变量一样
//			option_group: $("#option_group").val(); //这里前边变量改为与你php设置变量一样
//		}, function(data, textStatus) {
//			//data   返回得内容，可以是xml,json文件,html片段
//			var obj = JSON.parse(data); //解析json文件
//			//这里改为你后台的变量，用obj对象引用
//			var txttable = "<tr><td>" + obj.student_name + "</td><td>" + obj.student_number + "</td><td>" + obj.student_phone + "</td><td>" + obj.student_email + "</td><td>" + obj.student_grade + "</td><td>" + obj.student_class + "</td><td>" + obj.student_group + "</td><td><a href='#'>删除</a>" + "</td></tr>";
//			$(".addtr").append(txttable);
//		}, "json");

//	});
	$("#send_news").click(function() {
		if (confirm("确定发表该文章吗？")) {
			return true;
		} else {
			return false;
		}
	});
	
	$("#send_email").click(function() {
		if (confirm("确定群发邮件吗？")) {
			return true;
		} else {
			return false;
		}
	});


});