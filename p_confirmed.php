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
if(!isset($_POST['update_p_confirmed']))
{
	header('Location:schedule.php');
	exit;
}

//表单验证
$order_p_confirmed = trim($_POST['order_p_confirmed']);

$sub_party_or_not = $_POST[party_or_not];

$sub_stay_or_not = $_POST[stay_or_not];

$sub_lunch_or_not = $_POST[lunch_or_not];

$sub_dinner_or_not = $_POST[dinner_or_not];

if(!is_numeric($order_p_confirmed))
{
	echo "<script>alert('请输入序号');history.back();</script>";
	exit;
}

if(strlen($order_p_confirmed) > 2)
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

if($sub_party_or_not == '参加')
{
	mysql_query("UPDATE rock_party SET party = '参加' WHERE order_no = '$order_p_confirmed'");
}

if($sub_party_or_not == '不参加')
{
	mysql_query("UPDATE rock_party SET party = '不参加' WHERE order_no = '$order_p_confirmed'");
}

if($sub_party_or_not == '待定')
{
	mysql_query("UPDATE rock_party SET party = '待定' WHERE order_no = '$order_p_confirmed'");
}



if($sub_stay_or_not == '需要')
{
	mysql_query("UPDATE rock_party SET stay = '需要' WHERE order_no = '$order_p_confirmed'");
}

if($sub_stay_or_not == '不需要')
{
	mysql_query("UPDATE rock_party SET stay = '不需要' WHERE order_no = '$order_p_confirmed'");
}

if($sub_stay_or_not == '待定')
{
	mysql_query("UPDATE rock_party SET stay = '待定' WHERE order_no = '$order_p_confirmed'");
}



if($sub_lunch_or_not == '参加')
{
	mysql_query("UPDATE rock_party SET lunch = '参加' WHERE order_no = '$order_p_confirmed'");
}

if($sub_lunch_or_not == '不参加')
{
	mysql_query("UPDATE rock_party SET lunch = '不参加' WHERE order_no = '$order_p_confirmed'");
}

if($sub_lunch_or_not == '待定')
{
	mysql_query("UPDATE rock_party SET lunch = '待定' WHERE order_no = '$order_p_confirmed'");
}



if($sub_dinner_or_not == '参加')
{
	mysql_query("UPDATE rock_party SET dinner = '参加' WHERE order_no = '$order_p_confirmed'");
}

if($sub_dinner_or_not == '不参加')
{
	mysql_query("UPDATE rock_party SET dinner = '不参加' WHERE order_no = '$order_p_confirmed'");
}

if($sub_dinner_or_not == '待定')
{
	mysql_query("UPDATE rock_party SET dinner = '待定' WHERE order_no = '$order_p_confirmed'");
}

echo "<h1 align='center'>" . "提交成功" . "</h1>";

mysql_close($con);
?>

	<div id = "top">

	</div>
	
	<div name = "return" style = "text-align: center;">
		<a href="party.php">返回</a>
	</div>

</body>
</html>
