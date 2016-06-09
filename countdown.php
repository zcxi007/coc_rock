<html>
<head>
<meta charset="utf-8" name="viewport" content=" width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<style type="text/css">
div#top
{
	width:100%;
	height:100px;
}

div#return
{
	width:100%;
	height:200px;
}

a
{
	font-size:30px;
}

</style>

</head>
<body>
<?php
error_reporting(0);

//验证是否是从计时表单提交过来的
if(!isset($_POST['countdown']))
{
	header('Location:schedule.php');
	exit;
}


//表单验证
$h_time = trim($_POST['h']);

$i_time = trim($_POST['i']);

$s_time = trim($_POST['s']);

if(strlen($h_time) > 2 || strlen($i_time) > 2 || strlen($s_time) > 2)
{
	echo "<script>alert('不是合法的时间');history.back();</script>";
	exit;
}

/*
if(!is_numeric($h_time) || !is_numeric($i_time) || !is_numeric($s_time))
{
	echo "<script>alert('请输入数字');history.back();</script>";
	exit;
}
*/



//执行sql
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("coc_rock", $con);

$submit_time = strtotime(date('Y-m-d H:i:s', time()+(($h_time*60*60)+($i_time*60)+$s_time)));

mysql_query("UPDATE rock_info SET sub_time = '$submit_time' WHERE info = 'info'");
	
echo "<h1 align='center'>" . "计时开始" . "</h1>";

mysql_close($con);
?>

	<div id = "top">

	</div>
	
	<div name = "return" style = "text-align: center;">
		<a href="clash.php">返回</a>
	</div>

</body>
</html>