<html>
<meta name="viewport" content="initial-scale=1.0, width=device-width, text/html, charset=utf-8" http-equiv="Content-Type">
<title>ChinaRush.Rock账号统筹</title>

<body>

<div style = "margin-top: 15px">
<?php

error_reporting(E_ALL ^ E_DEPRECATED);

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_query("SET NAMES 'utf8'");
  
mysql_select_db("coc_rock", $con);

$result = mysql_query("SELECT name_in_games FROM rock_account");

	

while($row = mysql_fetch_array($result))
{
	echo "<select name="account_list">";
	echo "<option value="$row['name_in_games']">" . $row['name_in_games'] . "</option>";
	echo "</select>";
}
	
	
mysql_close($con);
?>
</div>






</body>
</html>
