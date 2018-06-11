<?php
header("Content-Type:text/html; charset=utf8");
$n="true";
$username=isset($_POST['username'])?$_POST['username']:false;
$password=isset($_POST['password'])?$_POST['password']:
false;
$con=mysqli_connect("rm-bp174l21wbvb7440r.mysql.rds.aliyuncs.com","rns4i9tf57","Fenglihui521","rns4i9tf57");
if(!$con){
	die('could not connect:'.mysql_error());
	}
$result=mysqli_query($con,"select * from user");
while($row = mysqli_fetch_array($result)){
	if($row["username"]==$username&&$row["password"]==$password){
		setcookie("username",$username,time()+3600);
		$result1=mysqli_query($con,"select name from information where username='$username'");
		$row1 = mysqli_fetch_array($result1);
		setcookie("name",$row1["name"],time()+3600);
		$n="false";
		break;
	}
	else{
		$n="true";
		}
}
if($n=="true"){
	echo "用户名或密码错误";
	}
if($n=="false"){
	echo "登陆成功";
	}
mysqli_close($con);
?>