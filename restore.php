<html>
<head>
<meta charset="utf-8" name="viewport" content=" width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<style type="text/css">
div#top
{
	width:100%;
	height:100px;
}


div#reset_table
{
	width:100%;
	height:200px;
	text-align:center;
}

#clear_table
{
	width:30%;
	height:50px;
	font-size:24px;
}

p
{
	font-size:30px;
}

</style>
</head>

<body>
	<div id = "top">

	</div>
	
	<p align="center">清除表格数据</p>
	
	<br />
	<br />
	<br />
	
	<div id = "reset_table">
		<form action = "reset.php" method = "post">
			<input id = "clear_table" type = "submit" name = "clear_table" value = "清空" />
		</form>
	</div>

</body>
</html>