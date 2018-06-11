<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>查询信息</title>
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/checkinfor.css">
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="scripts/jquery-3.1.1.min.js"></script>
<script src="scripts/jquery.cookie.js"></script>
</head>

<body>
<?php
$user=$_COOKIE["username"];
$con=mysqli_connect("rm-bp174l21wbvb7440r.mysql.rds.aliyuncs.com","rns4i9tf57","Fenglihui521","rns4i9tf57");
if(!$con){
	die('could not connect:'.mysql_error());
	}

$result=mysqli_query($con,"select * from information where username='$user'");
while($row = mysqli_fetch_array($result)){
	$user=$row["username"];
	$name=$row["name"];
	$sex=$row["sex"];
	$bir=$row["birthday"];
	$phone=$row["phone"];
	$mail=$row["mail"];
	$address=$row["address"];
	if($row["sex"]==null||$row["sex"]==""){
		$sex="空";
		}
	if($row["birthday"]==null||$row["birthday"]==""){
	    $bir="空";
	    }
	if($row["address"]==null||$row["address"]==""){
		$address="空";
		}
}
?>
<div id="all">
<div id="top"><h3>查询个人信息</h3></div>
<div id="mid">
<table id="infor">
<tr>
<td class="alt">用户名</td>
<td id="username" class="blt"><?php echo $user;?></td>
<td class="alt">姓名</td>
<td id="name" class="blt"><?php echo $name;?></td>
</tr>
<tr>
<td class="alt">性别</td>
<td id="sex" class="blt"><?php echo $sex;?></td>
<td class="alt">出生日期</td>
<td id="bir" class="blt"><?php echo $bir;?></td>
</tr>
<tr>
<td class="alt">电话</td>
<td id="phone" class="blt"><?php echo $phone;?></td>
<td class="alt">邮箱</td>
<td id="mail" class="blt"><?php echo $mail;?></td>
</tr>
<tr>
<td class="alt">家庭住址</td>
<td id="address" colspan="3"><?php echo $address;?></td>
</tr>
</table>
</div>
</div>
</body>
</html>