<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改信息</title>
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/button.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/checkinfor.css">
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="scripts/jquery-3.1.1.min.js"></script>
<script src="scripts/jquery.cookie.js"></script>
<script type="text/javascript">
function checkform(){
	if($("#name").val()==""||$("#name").val()==undefined){
	return false;
	}
	if($("#bir").val()==""||$("#bir").val()==undefined){
	return false;
	}
	if($("#mail").val()==undefined||$("#mail").val()==""){
	return false;
	}
	if($("#address").val()==""||$("#address").val()==undefined){
		return false;
		}
	else{
		return true;
		}
}
</script>
</head>

<body>
<?php
$user=$_COOKIE["username"];
$con=mysqli_connect("localhost","root","","user","3306");
if(!$con){
	die('could not connect:'.mysql_error());
	}

$result=mysqli_query($con,"select * from information where username=$user");
while($row = mysqli_fetch_array($result)){
	$user=$row["username"];
	$name=$row["name"];
	$sex=$row["sex"];
	$bir=$row["birthday"];
	$phone=$row["phone"];
	$mail=$row["mail"];
	$address=$row["address"];
	if($row["sex"]==null||$row["sex"]==""){
		$sex="";
		}
	if($row["birthday"]==null||$row["birthday"]==""){
	    $bir="";
	    }
	if($row["address"]==null||$row["address"]==""){
		$address="";
		}
}
?>
<div id="all">
<div id="top"><h3>修改个人信息</h3></div>
<div id="mid">
<form id="form2" action="update.php" method="post" onSubmit="return checkform()">
<table id="infor">
<tr>
<td class="alt">用户名</td>
<td class="blt"><?php echo $user;?></td>
<td class="alt">姓名</td>
<td class="blt"><input id="name" name="name" class="blt" type="text" value="<?php echo $name;?>"></td>
</tr>
<tr>
<td class="alt">性别</td>
<td class="blt"><input id="sex1" name="sex" type="radio" value="男" checked>男<input id="sex2" name="sex" type="radio" value="女">女</td>
<td class="alt">出生日期</td>
<td class="blt"><input id="bir" name="bir" class="blt" type="date" value="<?php echo $bir;?>"></td>
</tr>
<tr>
<td class="alt">电话</td>
<td class="blt"><input id="phone" name="phone" class="blt" type="number" value="<?php echo $phone;?>"></td>
<td class="alt">邮箱</td>
<td class="blt"><input id="mail" name="mail" class="blt" type="email" value="<?php echo $mail;?>"></td>
</tr>
<tr>
<td class="alt">家庭住址</td>
<td colspan="3"><input id="address" name="address" class="blt1" type="text" value="<?php echo $address;?>"></td>
</tr>
<tr>
<td id="sub" colspan="4">
<button id="but1" type="submit" class="button button-pill button-primary">提交</button>
</td>
</tr>
</table>
</form>
</div>
</div>
</body>
</html>