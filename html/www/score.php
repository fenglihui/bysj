<?php
header("Content-Type:text/html;charset=utf-8");
$username=isset($_COOKIE["username"])?$_COOKIE["username"]:false;
$con=mysqli_connect("rm-bp174l21wbvb7440r.mysql.rds.aliyuncs.com","rns4i9tf57","Fenglihui521","rns4i9tf57");
$arr=array();
if(!$con){
	die('could not connect:'.mysql_error());
	}
$sql="select coursename,score from course,score where score.username='$username' and score.courseid=course.courseid";
if($result=mysqli_query($con,$sql)){
	while($row = mysqli_fetch_array($result)){
		$row=array('coursename'=>$row['coursename'],'score'=>$row['score']);
		$arr[]=$row;
	}
	echo json_encode($arr);
	
}
else{
	die('Error: ' . mysqli_error($con));
}
?>