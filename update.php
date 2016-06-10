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
if(!isset($_POST['update']))
{
	header('Location:schedule.php');
	exit;
}

//
$sub_self_stars = trim($_POST[self_stars]);

$sub_against_stars = trim($_POST[against_stars]);

$sub_self_attack_no = trim($_POST[self_attack_no]);

$sub_against_attack_no = trim($_POST[against_attack_no]);

if(strlen($sub_self_stars) > 2 || strlen($sub_against_stars) > 2 || strlen($sub_self_attack_no) > 2 || strlen($sub_against_attack_no) > 2)
{
	echo "<script>alert('不是合法输入，请重新输入！');history.back();</script>";
	exit;
}

/*
if(!is_numeric($sub_self_stars) || !is_numeric($sub_against_stars) || !is_numeric($sub_self_attack_no) ||!is_numeric($sub_against_attack_no))
{
	echo "<script>alert('请输入数字！');history.back();</script>";
	exit;
}
*/


//执行sql
    $mysql_server_name = "localhost"; //数据库服务器名称
    $mysql_username = "root"; // 连接数据库用户名[默认为root，如果忘记可以通过select * from mysql.user 方式查询]
    $mysql_password = ""; // 连接数据库密码
    $mysql_database = "coc_rock"; // 数据库的名字
    $conn = mysql_connect($mysql_server_name, $mysql_username, $mysql_password);

    if (!$conn)
      {
      die('Could not connect: ' . mysql_error());
      }

mysql_query("SET NAMES 'utf8'");

mysql_select_db("coc_rock", $conn);

if($sub_self_stars != '')
{
	mysql_query("UPDATE rock_info SET self_stars = '$sub_self_stars' WHERE info = 'info'");
}

if($sub_against_stars != '')
{
	mysql_query("UPDATE rock_info SET against_stars = '$sub_against_stars' WHERE info = 'info'");
}

if($sub_self_attack_no != '')
{
	mysql_query("UPDATE rock_info SET self_attack_no = '$sub_self_attack_no' WHERE info = 'info'");
}

if($sub_against_attack_no != '')
{
	mysql_query("UPDATE rock_info SET against_attack_no = '$sub_against_attack_no' WHERE info = 'info'");
}

echo "<h1 align='center'>" . "更新成功" . "</h1>";

if($sub_self_stars == "" and $sub_against_stars == "" and $sub_self_attack_no == "" and $sub_against_attack_no == "")
{
	echo "<script>alert('请输入数字！');history.back();</script>";
}

mysql_close($conn);
?>

	<div id = "top">

	</div>

	<div style = "text-align: center;">
		<a href="clash.php">返回</a>
	</div>

</body>
</html>

