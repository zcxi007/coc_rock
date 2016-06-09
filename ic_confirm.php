<html>

<head>
<meta charset="utf-8" name="viewport" content=" width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>ChinaRush.Rock</title>
<style type="text/css">
#ic_confirmed
  {
  font-family:"KaiTi", "Tahoma";
  width:100%;
  text-align:center;
  border-collapse:collapse;
  }

#ic_confirmed td, #ic_confirmed th
  {
  font-size:1.5em;
  border:1px solid #98bf21;
  padding:3px 7px 2px 7px;
  }

#ic_confirmed th
  {
  font-size:1.5em;
  text-align:center;
  padding-top:5px;
  padding-bottom:4px;
  background-color:#A7C942;
  color:#ffffff;
  }

#ic_confirmed tr.alt td
  {
  color:#000000;
  background-color:#EAF2D3;
  }
  
input#order_ic_confirmed
{
	width:100%;
	height:30px;
}

input#update_ic_confirmed
{
	width:55%;
	height:30px;
}

</style>
</head>

<body bgcolor="lightgray">

<p style="text-align: center; color: burlywood; font-size: 2em;">
<strong>ChinaRush.Rock</strong><br />
<strong>首届冲杯娱乐赛</strong>
</p>

<!--确认是否参赛-->
<form action="ic_confirmed.php" method="post" style = "margin-top: 15px">
<table id="ic_confirmed">
<tr>
<th colspan = '2'>确认是否参赛</th>
</tr>

<tr>
<th>序号</th>
<th>是否参赛</th>
</tr>

<tr class="alt">
<td><input id="order_ic_confirmed" type="text" name="order_ic_confirmed" /></td>
<td>
<select name="status">
<option value="参赛">参赛</option>
<option value="不参加">不参加</option>
<option value="清除">清除</option>
</select>
</td>
</tr>

<tr>
<td colspan = '2'>
<input id="update_ic_confirmed" type="submit" style="font-size:large; text-align:center" name='update_ic_confirmed' value="确认" />
</td>
</tr>
</table>
</form>

<hr />

</body>
</html>
