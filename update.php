<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改成功</title>
<link rel="stylesheet" href="css/success.css">
</head>

<body>
<?php
$username=isset($_COOKIE["username"])?$_COOKIE["username"]:false;
$name=isset($_POST["name"])?$_POST["name"]:false;
$sex=isset($_POST["sex"])?$_POST["sex"]:false;
$bir=isset($_POST["bir"])?$_POST["bir"]:false;
$phone=isset($_POST["phone"])?$_POST["phone"]:false;
$mail=isset($_POST["mail"])?$_POST["mail"]:false;
$address=isset($_POST["address"])?$_POST["address"]:false;
$con=mysqli_connect("localhost","root","","user","3306");
if(!$con){
	die('could not connect:'.mysql_error());
	}
$sql="replace into information(username,name,sex,birthday,phone,mail,address) values('$username','$name','$sex','$bir','$phone','$mail','$address')";
if(!mysqli_query($con,$sql))
 {
   die('Error: ' . mysqli_error($con));
 }
 setcookie("name",$name,time()+3600);
mysqli_close($con);
?>
<div id="all">
<div id="top">
资料修改成功
</div>
<div id="mid">
点击<a href="checkinfor.php">此处</a>查看个人资料
</div>
</div>
</body>
</html>