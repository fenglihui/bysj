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
$course1=isset($_POST["course1"])?$_POST["course1"]:false;
$course2=isset($_POST["course2"])?$_POST["course2"]:false;
$course3=isset($_POST["course3"])?$_POST["course3"]:false;
$course4=isset($_POST["course4"])?$_POST["course4"]:false;
$course5=isset($_POST["course5"])?$_POST["course5"]:false;
$course6=isset($_POST["course6"])?$_POST["course6"]:false;
$score1=isset($_POST["score1"])?$_POST["score1"]:false;
$score2=isset($_POST["score2"])?$_POST["score2"]:false;
$score3=isset($_POST["score3"])?$_POST["score3"]:false;
$score4=isset($_POST["score4"])?$_POST["score4"]:false;
$score5=isset($_POST["score5"])?$_POST["score5"]:false;
$score6=isset($_POST["score6"])?$_POST["score6"]:false;
$con=mysqli_connect("localhost","root","","user","3306");
if(!$con){
	die('could not connect:'.mysql_error());
	}
$sql1="replace into score(username,courseid,score) values('$username','$course1','$score1')";
$sql2="replace into score(username,courseid,score) values('$username','$course2','$score2')";
$sql3="replace into score(username,courseid,score) values('$username','$course3','$score3')";
$sql4="replace into score(username,courseid,score) values('$username','$course4','$score4')";
$sql5="replace into score(username,courseid,score) values('$username','$course5','$score5')";
$sql6="replace into score(username,courseid,score) values('$username','$course6','$score6')";
if(!mysqli_query($con,$sql1)||!mysqli_query($con,$sql2)||!mysqli_query($con,$sql3)||!mysqli_query($con,$sql4)||!mysqli_query($con,$sql5)||!mysqli_query($con,$sql6))
 {
 }
mysqli_close($con);
?>
<div id="all">
<div id="top">
成绩录入成功
</div>
<div id="mid">
点击<a href="checkscore.html">此处</a>查看个人成绩
</div>
</div>
</body>
</html>