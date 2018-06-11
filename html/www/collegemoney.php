<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>国家奖学金申请</title>
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/money.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $.ajax({
        url: "checkappli3.php",
        async: false,//改为同步方式
        type: "POST",
        data: {username:$("#username").val()},
        success: function (data) {
            if(data=="申请已提交"){
				z="no";
				}
        }
    });
});
function score(){
	if($("#average").val()<69){
		alert("您的成绩无法申请院级奖学金");
		return false;
		}
	else if(this.z=="no"){
		        alert("您已提交申请，请勿重复提交");
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
$con=mysqli_connect("rm-bp174l21wbvb7440r.mysql.rds.aliyuncs.com","rns4i9tf57","Fenglihui521","rns4i9tf57");
if(!$con){
	die('could not connect:'.mysql_error());
	}
$result1=mysqli_query($con,"select information.username,name,AVG(score) from information,score where information.username=$user and information.username=score.username");
while($row = mysqli_fetch_array($result1)){
	$user=$row["username"];
	$name=$row["name"];
	$average=(int)$row["AVG(score)"];
}
mysqli_close($con);
?>
<div id="all">
<div id="title">
<span>院级奖学金申请</span>
</div>
<div id="form">
<form id="form1" action="college.php" method="post" onSubmit="return score()">
<div class="infor">
<div class="left">
<label for="username">学号</label>
</div>
<div class="right">
<input type="text" id="username" name="username" class="form-control"  value="<?php echo $user;?>" readonly>
</div>
</div>
<div class="infor">
<div class="left">
<label for="name">姓名</label>
</div>
<div class="right">
<input type="text" id="name" name="name" class="form-control" value="<?php echo $name;?>" readonly>
</div>
</div>
<div class="infor">
<div class="left">
<label for="average">平均分</label>
</div>
<div class="right">
<input type="text" id="average" name="average" class="form-control" value="<?php echo $average;?>" readonly>
</div>
</div>
<div id="sub">
<button type="submit" id="tijiao" class="button button-raised button-primary button-pill">提交</button>
</div>
</form>
</div>
</div>
</body>
</html>
