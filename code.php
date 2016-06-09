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
if(!isset($_POST['code']))
{
	header('Location:schedule.php');
	exit;
}

//表单验证
$code_input = htmlspecialchars(trim($_POST['input_code']));

$code_order_no = trim($_POST['code_order_no']);

if(strlen($code_order_no) > 2)
{
	echo "<script>alert('不是合法的对手编号，请重新输入！');history.back();</script>";
	exit;
}

if(!is_numeric($code_order_no))
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

if($code_input != '' && $code_order_no != '')
{
	mysql_query("UPDATE rock_reservation SET code = '$code_input' WHERE order_no = '$code_order_no'");
	
	echo "<h1 align='center'>" . "提交成功" . "</h1>";
}
else
{
	echo "<h1 align='center'>" . "提交失败，请重新提交" . "</h1>";
}

mysql_close($con);
?>

	<div id = "top">

	</div>
	
	<div name = "return" style = "text-align: center;">
		<a href="clash.php">返回</a>
	</div>

</body>
</html>