<?php
error_reporting(0);

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("coc_rock", $con);

$result = mysql_query("SELECT sub_time FROM rock_info");

while($row = mysql_fetch_array($result))
  {
  $endtime = $row['sub_time'];
  }

$starttime = strtotime(date('Y-m-d H:i:s', time()));

$lefttime = $endtime-$starttime;  //实际剩下的时间（秒）

mysql_free_result($result);

mysql_close($con);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport" content=" width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>ChinaRush.Rock对战预约</title>

    <!--倒计时JS-->
    <script type="text/javascript">
    <!-- //
    var runtimes = 0;
    function GetRTime(){
    var nMS = <?=$lefttime?>*1000-runtimes*1000;
    var nH = Math.floor(nMS/(1000*60*60))%24;
    var nM = Math.floor(nMS/(1000*60)) % 60;
    var nS = Math.floor(nMS/1000) % 60;
    document.getElementById("RemainH").innerHTML=nH;
    document.getElementById("RemainM").innerHTML=nM;
    document.getElementById("RemainS").innerHTML=nS;

    runtimes++;

    setTimeout("GetRTime()",1000);
    }
    window.onload=GetRTime;
    // -->
    </script>

<!--CSS-->
<style type="text/css">
*
{
	margin:0;
	padding:0;
}

p#title
{
	width:100%;
	height:20px;
	font-family:"Comic Sans MS", cursive;
	text-align:center;
	font-size:24px;
	color:#F69;
}

div#info
{
	text-align:center;
	font-family:"方正舒体";
	font-size:16px;
	color:#93C;
	background-image:url(bg.png);
	background-repeat:no-repeat;
	background-size:100% 100%;
	height:120px;
}

div#info_table
{
	margin:0 auto;
	text-align:center;
	font-family:"楷体";
	font-size:14px;
	width:100%;
}

div#button_link
{
	text-align:center;
}

div#introduce
{
	font-family:"楷体";
	font-size:16px;
	color:#000;
}

#sub
{
	font-size:28px;
}

.tb
{
	table-layout:fixed;
	margin:0 auto;
	width:100%;
	border-top:0;
	border-bottom:0;
}

</style>

</head>

<body bgcolor="lightgray">
	<div id = "info">
    <p id = "title"><strong>ChinaRush.Rock 对战预约</strong></p>

	<br />

	<?php
    error_reporting(E_ALL ^ E_DEPRECATED);

    $con = mysql_connect("localhost","root","");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }

    mysql_select_db("coc_rock", $con);

    $result = mysql_query("SELECT * FROM rock_info");

    while($row = mysql_fetch_array($result))
      {
	  echo "<p align='center'>三星比(我方在前)：" . $row['self_stars'] . ":" . $row['against_stars']. "<br />";
	  echo "剩余进攻数(我方在前)：" . $row['self_attack_no'] . ":" . $row['against_attack_no']. "</p>";
      }

    mysql_free_result($result);

    mysql_close($con);
    ?>

    <p>离对战结束还有：<strong id="RemainH"></strong>小时<strong id="RemainM"></strong>分<strong id="RemainS"></strong>秒</p>
    </div>

	<br />

    <div id = "button_link">
    <a id = "sub" href="schedule.php">去预约或去更新</a>
	</div>

	<br />

    <div id = "info_table">
    <?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_query("SET NAMES 'utf8'");

	mysql_select_db("coc_rock", $con);



	$result = mysql_query("SELECT * FROM rock_reservation where  DELETE_MARK = '0' ORDER BY order_no");

		echo "<table class='tb' bordercolor=#98bf21 align='center' cellspacing='2'>
			<tr align='center' height='30px' bgcolor=#A7C942>
			<th width=10%>对手编号</th>
			<th width=10%>状态</th>
			<th width=20%>预约者</th>
			<th width=10%>成功率</th>
			<th width=25%>预约时间</th>
			<th width=25%>代码</th>
			</tr>";

	while($row = mysql_fetch_array($result))
	{
		echo "<tr align='center' height='35px' bgcolor=#EAF2D3>";
		echo "<td width=10%>" . $row['order_no'] . "</td>";
		echo "<td width=10%>" . $row['status'] . "</td>";
		echo "<td width=20%>" . $row['subscriber'] . "</td>";
		echo "<td width=10%>" . $row['attack_no'] . "</td>";
		echo "<td width=25%>" . $row['time'] . "</td>";
		echo "<td width=25%>" . "<textarea style='width:95%; height:100%;'>" . $row['code'] . "</textarea>" . "</td>";
		echo "</tr>";
	}
		echo "</table>";

	mysql_free_result($result);

	mysql_close($con);
	?>
    </div>

	<br />

	<div id = "button_link">
    <a id = "sub" href="schedule.php">去预约或去更新</a>
	</div>

	<br />

    <div id = "introduce">
    <p align='center'><strong>对战实时在线预约系统使用说明</strong></p>
    <p>1. 输入需要预约的对手编号及预约人，点击预约，即可成功预约<br />
    系统同时会自动记录预约时间，以便管理员跟踪预约情况<br />
    注：已经预约的，在未经协商之前，请不要重复预约，<strong>会覆盖！</strong> </p>

    <p>2. 撤销预约，只需输入预约的对手编号，系统会自动撤销</p>

    <p>3. 三星比和剩余进攻次数，只需录入数字并提交，自动会更新在页面上<br />
    便于成员和管理随时掌握对战情况 </p>

    <p>4. 成功率录入格式为0、1/总进攻数<br />
    0表示未完成三星，1表示已经被三星<br />
    /后面数字表示使用几次进攻才达成三星
    </p>

    <p>5. 状态分三星、黑三、一星坑及未开图<br />
    对战开始后，请大家及时更新状态，便于管理及时跟进战况
    </p>
    </div>

</body>
</html>