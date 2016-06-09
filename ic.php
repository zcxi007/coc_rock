


<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport" content=" width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>ChinaRush.Rock</title>

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
	font-family:"微软雅黑";
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
    <p id = "title"><strong>ChinaRush.Rock 首轮冲杯赛</strong></p>
	</div>
	
	<br />
    
    <div id = "button_link">
    <a id = "sub" href="ic_confirm.php">去确认</a>
	</div>
	
	<br />
    
    <div id = "info_table">
    <?php
	error_reporting(0);
	
	$con = mysql_connect("localhost","root","");
	if (!$con)
	  {
      die('Could not connect: ' . mysql_error());
      }
	
	mysql_query("SET NAMES 'utf8'");
	  
	mysql_select_db("coc_rock", $con);
	
	
	
	$result = mysql_query("SELECT * FROM rock_impact_cup order by order_no");
	
		echo "<table class='tb' bordercolor=#98bf21 align='center' cellspacing='2'>
			<tr align='center' height='30px' bgcolor=#A7C942>
			<th width=15%>序号</th>
			<th width=15%>账号</th>
			<th width=20%>当前杯数</th>
			<th width=20%>目标杯数</th>
			<th width=30%>确认是否参加</th>
			</tr>";
	
	while($row = mysql_fetch_array($result))
	{
		echo "<tr align='center' height='30px' bgcolor=#EAF2D3>";
		echo "<td width=15%>" . $row['order_no'] . "</td>";
		echo "<td width=15%>" . $row['account'] . "</td>";
		echo "<td width=20%>" . $row['now'] . "</td>";
		echo "<td width=20%>" . $row['target'] . "</td>";
		echo "<td width=30%>" . $row['confirmed'] . "</td>";
		"</td>";
		echo "</tr>";
	}
		echo "</table>";
		
	mysql_close($con);
	?>
    </div>    
    
	<br />
	
	<div id = "button_link">
    <a id = "sub" href="ic_confirm.php">去确认</a>
	</div>
    
	<br />
	
    <div id = "introduce" style="text-align: center;">
    <p align='center'><strong>冲杯说明</strong></p>
    <p>亲爱的老伙伴们，很遗憾遇到了sc大封杀的日子。一路走来风风雨雨，我们并肩作战，一起笑一闹。虽然有几个小伙伴的号被封了，但是大家别灰心。只要我们还在一起，一切都依然美好。近期停了部落战，决定举办一次冲杯活动。<strong>赛季结束时结算</strong>，达成目标的伙伴<strong>奖励500宝石（折合红包30元）</strong>。另：伙伴们在线时要积极互相捐石头狗球。 </p>
    
    <p>近期部落资金有出无进，也<strong>欢迎各位老板来扩充部落金库</strong>（多少无所谓）</p>
    
    <p><strong>Rock发展至今，风雨兼程，一路有你，更加精彩</strong></p>
    </div>

</body>
</html>