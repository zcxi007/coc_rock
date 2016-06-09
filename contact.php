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

p#title, p#title_2
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
    <p id = "title"><strong>ChinaRush.Rock</strong></p>
	
	<br />
	
	<p id = "title_2"><strong>聚会人员联系方式</strong></p>
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
			<th width=45%>人员</th>
			<th width=45%>手机号</th>
			</tr>";
	
	while($row = mysql_fetch_array($result))
	{
		echo "<tr align='center' height='30px' bgcolor=#EAF2D3>";
		echo "<td width=45%>" . $row['body'] . "</td>";
		echo "<td width=45%>" . $row['phone'] . "</td>";
		"</td>";
		echo "</tr>";
	}
		echo "</table>";
		
	mysql_close($con);
	?>
    </div>    

</body>
</html>