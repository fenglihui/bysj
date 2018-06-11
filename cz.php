<?php
$user=$_COOKIE["username"];
$con=mysqli_connect("localhost","root","","user","3306");
if(!$con){
	die('could not connect:'.mysql_error());
	}

if(mysqli_query($con,"delete from application where username=$user")){
	echo "撤销成功";
}

?>