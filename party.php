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

div#button_link, div#b_link
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
    <p id = "title"><strong>ChinaRush.Rock 聚会统计</strong></p>
	</div>
	
	<br />
    
    <div id = "button_link">
    <a id = "sub" href="p_confirm.php">去确认</a>
	</div>
	
	<br />

    <div id = "b_link">
    <a id = "sub" href="contact.php">联系方式</a>
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
	
	
	
	$result = mysql_query("SELECT * FROM rock_party order by order_no");
	
		echo "<table class='tb' bordercolor=#98bf21 align='center' cellspacing='2'>
			<tr align='center' height='30px' bgcolor=#A7C942>
			<th width=15%>序号</th>
			<th width=15%>人员</th>
			<th width=25%>是否需要住宿</th>
			<th width=15%>21日午餐</th>
			<th width=15%>22日午餐</th>
			<th width=15%>费用</th>
			</tr>";
	
	while($row = mysql_fetch_array($result))
	{
		echo "<tr align='center' height='30px' bgcolor=#EAF2D3>";
		echo "<td width=15%>" . $row['order_no'] . "</td>";
		echo "<td width=15%>" . $row['body'] . "</td>";
		echo "<td width=25%>" . $row['stay'] . "</td>";
		echo "<td width=15%>" . $row['lunch'] . "</td>";
		echo "<td width=15%>" . $row['dinner'] . "</td>";
		echo "<td width=15%>" . $row['p_cost'] . "</td>";
		"</td>";
		echo "</tr>";
	}
		echo "</table>";
		
	mysql_close($con);
	?>
    </div>    
    
	<br />
	
	<div id = "button_link">
    <a id = "sub" href="p_confirm.php">去确认</a>
	</div>
    
	<br />

    <div id = "b_link">
    <a id = "sub" href="contact.php">联系方式</a>
	</div>
	
	<br />
	
    <div id = "introduce" style="text-align: center;">
    <p align='center'><strong>行程安排（拟定）</strong></p>
    <p><strong>21行程安排</strong></p>
    <p>中午12点——自由组织午饭</p>
    <p>下午16点——【汉庭上海虹桥古北店】正式集合</p>
    <p>下午18点30分——五月罗马海鲜自助餐厅(徐家汇店)</p>
    <p>晚上20点30分——亮歌量贩式KTV(吴中路店)</p>
    
	<p>二星摧毁率比赛</p>
	
	<br />
	
    <p><strong>22行程安排</strong></p>
    <p>酒店结算</p>
    <p>中午11点30分——剩余人员组织午饭</p>

    <br />

    <p align='center'><strong>费用摊派</strong></p>
    <p>只参加21号下午晚上活动的100元/人</p>
    <p>参加21日全天活动的200元/人</p>
    <p>21日须住宿的400元/人</p>
    <p>妹子无需摊派费用</p>
    <p>剩余大部分费用由强、狼牙、玺宝鼎力赞助</p>

    <p>所有费用统一交张宇鹏推荐微信</p>
    <br />

    <p><strong>Rock发展至今，风雨兼程，一路有你，更加精彩</strong></p>
    </div>

</body>
</html>