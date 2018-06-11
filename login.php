<?php
header("Content-Type:text/html; charset=utf8");
$n="t";
$username=isset($_POST['username'])?$_POST['username']:false;
$password=isset($_POST['password'])?$_POST['password']:false;
$loginstyle=$_POST['loginstyle'];
$con=mysqli_connect("localhost","root","","user","3306");
if(!$con){
	die('could not connect:'.mysqli_error());
	}
$result=mysqli_query($con,"select * from user");
while($row = mysqli_fetch_array($result)){
	if($row["username"]==$username&&$row["password"]==$password&&$row["loginstyle"]==$loginstyle){
		setcookie("username",$username,time()+3600);
		setcookie("loginstyle",$loginstyle,time()+3600);
		$result1=mysqli_query($con,"select name from information where username='$username'");
		$row1 = mysqli_fetch_array($result1);
		setcookie("name",$row1["name"],time()+3600);
		$n="f";
		break;
	}
	else{
		$n="t";
		}
}
if($n=="t"){
	echo "用户名密码错误或登录方式有误";
	}
if($n=="f"){
	echo "登陆成功";
	}
mysqli_close($con);
?>