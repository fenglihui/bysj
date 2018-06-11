<?php
header("Content-Type:text/html; charset=utf8");
$n="true";
$username=isset($_POST['username'])?$_POST['username']:false;
$con=mysqli_connect("localhost","root","","user","3306");
if(!$con){
	die('could not connect:'.mysql_error());
	}

$result=mysqli_query($con,"select * from user");
while($row = mysqli_fetch_array($result)){
	if($row["username"]==$username){
		$n="false";
		break;
		}
	else{
		$n="true";
		}
	}
if($n=="false"){
	echo "用户名已存在";
	}
if($n=="true"){
	echo "用户名可用";
	}
mysqli_close($con);
?>
