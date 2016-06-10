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
error_reporting(E_ALL ^ E_DEPRECATED);

//验证是否是从计时表单提交过来的
if(!isset($_POST['reserve']))
{
	header('Location:schedule.php');
	exit;
}

//表单验证
$sub_subscriber = htmlspecialchars(trim($_POST['subscriber']));

$sub_order_no = trim($_POST['reserve_order_no']);


if(strlen($sub_order_no) > 2)
{
	echo "<script>alert('不是合法的对手编号，请重新输入！');history.back();</script>";
	exit;
}

if(!is_numeric($sub_order_no))
{
	echo "<script>alert('请输入对手编号');history.back();</script>";
	exit;
}



//执行sql
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_query("SET NAMES 'utf8'");

mysql_select_db("coc_rock", $con);

$time= date('Y-m-d H:i:s',time());

if($sub_subscriber != '' && $sub_order_no != '')
{
	mysql_query("UPDATE rock_reservation SET subscriber = '$sub_subscriber', time = '$time' WHERE order_no = '$sub_order_no'");

	echo "<h1 align='center'>" . "预约成功" . "</h1>";
}
else
{
	echo "<h1 align='center'>" . "预约失败，请重新预约" . "</h1>";
}

mysql_close($con);
?>

	<div id = "top">

	</div>

	<div style = "text-align: center;">
		<a href="clash.php">返回</a>
	</div>

</body>
</html>