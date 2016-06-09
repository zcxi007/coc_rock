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
if(!isset($_POST['update_ic_confirmed']))
{
	header('Location:schedule.php');
	exit;
}

//表单验证
$order_ic_confirmed = trim($_POST['order_ic_confirmed']);

$sub_status = $_POST[status];

if(!is_numeric($order_ic_confirmed))
{
	echo "<script>alert('请输入序号');history.back();</script>";
	exit;
}

if(strlen($order_ic_confirmed) > 2)
{
	echo "<script>alert('不是合法的序号，请重新输入！');history.back();</script>";
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

if($sub_status == '参赛')
{
	mysql_query("UPDATE rock_impact_cup SET confirmed = '参赛' WHERE order_no = '$order_ic_confirmed'");
}

if($sub_status == '不参加')
{
	mysql_query("UPDATE rock_impact_cup SET confirmed = '不参加' WHERE order_no = '$order_ic_confirmed'");
}

if($sub_status == '清除')
{
	mysql_query("UPDATE rock_impact_cup SET confirmed = null WHERE order_no = '$order_ic_confirmed'");
}

echo "<h1 align='center'>" . "提交成功" . "</h1>";

mysql_close($con);
?>

	<div id = "top">

	</div>
	
	<div name = "return" style = "text-align: center;">
		<a href="ic.php">返回</a>
	</div>

</body>
</html>
