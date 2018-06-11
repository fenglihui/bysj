<?php
$user=$_COOKIE["username"];
$con=mysqli_connect("localhost","root","","user","3306");
if(!$con){
	die('could not connect:'.mysql_error());
	}
$result1=mysqli_query($con,"select AVG(score) from score where username=$user");
while($row = mysqli_fetch_array($result1)){
	if($row["AVG(score)"]!=0){
		$average=$row["AVG(score)"];
		echo "yes";
		}
	else{
		echo "no";
	}
}
mysqli_close($con);
?>