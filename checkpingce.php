<?php
$user=$_COOKIE["username"];
$con=mysqli_connect("localhost","root","","user","3306");
if(!$con){
	die('could not connect:'.mysql_error());
	}
$result1=mysqli_query($con,"select average from application where username=$user");
while($row = mysqli_fetch_array($result1)){
	if($row["average"]!=0){
		$average=$row["average"];
		}
}
echo $average;
mysqli_close($con);
?>