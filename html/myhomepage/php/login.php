<?php
header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/17
 * Time: 15:39
 */
$con=mysqli_connect("localhost","root","","homepage","3306");
if(!$con){
    die('could not connect:'.mysqli_error());
}
else{
   echo "连接成功";
}
mysqli_close($con);
?>