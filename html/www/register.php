<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册成功</title>
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/button.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<style type="text/css">
*{margin:0;
padding:0;}
#all{width:1280px;
margin:0px auto;
background-color:#EEFDFF;
text-align:center;}
#top{width:1280px;
height:200px;
margin:0px auto;
border-bottom:1px solid #000;
text-align:left;
color:#3F0;
font-size:36px;}
#bottom{width:1280px;
height:400px;
margin:0px auto;}
#bottom_1{width:1024px;
height:200px;
margin:50px auto;}
#bottom_2{width:1024px;
height:200px;
margin:0 auto;}
</style>
</head>

<body>
<?php
header("Content-type: text/html;charset=utf-8");
$username=isset($_POST["username"])?$_POST["username"]:false;
$password=isset($_POST["password"])?$_POST["password"]:false;
$name=isset($_POST["name"])?$_POST["name"]:false;
$phone=isset($_POST["phone"])?$_POST["phone"]:false;
$mail=isset($_POST["mail"])?$_POST["mail"]:false;
$con=mysqli_connect("rm-bp174l21wbvb7440r.mysql.rds.aliyuncs.com","rns4i9tf57","Fenglihui521","rns4i9tf57");
if(!$con){
	die('could not connect:'.mysql_error());
	}
$sql1="insert into user(username,password) values('$username','$password')";
$sql2="insert into information(username,name,phone,mail) values('$username','$name','$phone','$mail')";
if(!mysqli_query($con,$sql1))
 {
   die('Error: ' . mysqli_error($con));
 }
else if(!mysqli_query($con,$sql2)){
	die('Error: '.mysqli_error($con));
	}
mysqli_close($con);
?>
<div id="all">
<div id="top">
<p style="text-align:left;line-height:200px;margin-left:320px;font-weight:bold">注册成功</p>
</div>
<div id="bottom">
<div id="bottom_1">
<p style="text-align:center;font-size:25px;color:#F00;">恭喜你，注册成功</p><br/>
<br/>
<p style="text-align:center;font-size:16px;">点击<a href="login.html" style="text-decoration:none;">此处</a>返回登录界面</p>
</div>
<div id="bottom_2">
<p style="margin-top:130px;color:#63C;">如有疑问，请与我们联系，联系电话：18010580075</p>
</div>
</div>
</div>
</body>
</html>