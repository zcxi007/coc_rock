<?php
error_reporting(E_ALL ^ E_DEPRECATED);

//验证是否是从计时表单提交过来的
if(!isset($_POST['clear_table']))
{
	header('Location:clash.php');
	exit;
}
?>

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

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_query("SET NAMES 'utf8'");
  
mysql_select_db("coc_rock", $con);

mysql_query("UPDATE rock_reservation SET subscriber = null, attack_no = null, status = null, time = null, code = null");

mysql_query("UPDATE rock_info SET self_stars = null, self_attack_no = null, against_stars = null, against_attack_no = null");

echo "<h1 align='center'>" . "清空成功" . "</h1>";

mysql_close($con);
?>

	<div id = "top">

	</div>
	
	<div name = "return" style = "text-align: center;">
		<a href="clash.php">返回</a>
	</div>

</body>
</html>