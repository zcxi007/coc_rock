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
if(!isset($_POST['update_status']))
{
	header('Location:schedule.php');
	exit;
}

//表单验证
$sub_order_no_status = trim($_POST['order_no_status']);

$sub_status = $_POST[status];

$sub_attack_no = htmlspecialchars(trim($_POST[attack_no]));

if(!is_numeric($sub_order_no_status))
{
	echo "<script>alert('请输入对手编号');history.back();</script>";
	exit;
}

if(strlen($sub_order_no_status) > 2)
{
	echo "<script>alert('不是合法的对手编号，请重新输入！');history.back();</script>";
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

if($sub_status == '三星')
{
	mysql_query("UPDATE rock_reservation SET status = '三星' WHERE order_no = '$sub_order_no_status'");
	
	mysql_query("UPDATE rock_info SET self_stars = self_stars + 1 WHERE info = 'info'");
}

if($sub_status == '两星')
{
	mysql_query("UPDATE rock_reservation SET status = '两星' WHERE order_no = '$sub_order_no_status'");
}

if($sub_status == '黑三')
{
	mysql_query("UPDATE rock_reservation SET status = '黑三' WHERE order_no = '$sub_order_no_status'");
}

if($sub_status == '一星坑')
{
	mysql_query("UPDATE rock_reservation SET status = '一星坑' WHERE order_no = '$sub_order_no_status'");
}

if($sub_status == '未开图')
{
	mysql_query("UPDATE rock_reservation SET status = '未开图' WHERE order_no = '$sub_order_no_status'");
}

if($sub_status == '清除')
{
	mysql_query("UPDATE rock_reservation SET status = null WHERE order_no = '$sub_order_no_status'");
	
	mysql_query("UPDATE rock_reservation SET attack_no = null WHERE order_no = '$sub_order_no_status'");
}

if($sub_attack_no != '')
{
	mysql_query("UPDATE rock_reservation SET attack_no = '$sub_attack_no' WHERE order_no = '$sub_order_no_status'");
}

if($sub_status == '无变化' && $sub_attack_no == '')
{
	echo "<script>alert('更新失败，请输入成功率！');history.back();</script>";
	exit;
}

echo "<h1 align='center'>" . "更新成功" . "</h1>";

mysql_close($con);
?>

	<div id = "top">

	</div>
	
	<div name = "return" style = "text-align: center;">
		<a href="clash.php">返回</a>
	</div>

</body>
</html>
