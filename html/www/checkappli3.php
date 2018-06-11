<?php
header("Content-Type:text/html; charset=utf8");
$n="true";
$username=isset($_POST['username'])?$_POST['username']:false;
$con=mysqli_connect("rm-bp174l21wbvb7440r.mysql.rds.aliyuncs.com","rns4i9tf57","Fenglihui521","rns4i9tf57");
if(!$con){
	die('could not connect:'.mysql_error());
	}

$result=mysqli_query($con,"select username from college");
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
	echo "申请已提交";
	}
if($n=="true"){
	echo "可以提交申请";
	}
mysqli_close($con);
?>
