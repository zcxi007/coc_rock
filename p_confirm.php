<html>

<head>
<meta charset="utf-8" name="viewport" content=" width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>ChinaRush.Rock</title>
<style type="text/css">
#p_confirmed, #contact_confirmed, #cost_confirmed
  {
  font-family:"KaiTi", "Tahoma";
  width:100%;
  text-align:center;
  border-collapse:collapse;
  }

#p_confirmed td, #p_confirmed th, #contact_confirmed td, #contact_confirmed th, #cost_confirmed td, #cost_confirmed th
  {
  font-size:1.5em;
  border:1px solid #98bf21;
  padding:3px 7px 2px 7px;
  }

#p_confirmed th, #contact_confirmed th, #cost_confirmed th
  {
  font-size:1.5em;
  text-align:center;
  padding-top:5px;
  padding-bottom:4px;
  background-color:#A7C942;
  color:#ffffff;
  }

#p_confirmed tr.alt td, #contact_confirmed tr.alt_b td, #cost_confirmed tr.alt_a td
  {
  color:#000000;
  background-color:#EAF2D3;
  }
  
input#order_p_confirmed, input#phone_confirmed, input#order_phone_confirmed, input#order_cost_confirmed, input#cost_confirmed
{
	width:100%;
	height:30px;
}

input#update_p_confirmed, input#update_phone_confirmed, input#update_cost_confirmed
{
	width:55%;
	height:30px;
}

select#stay_or_not, select#lunch_or_not, select#dinner_or_not
{
	height:20px;
}

</style>
</head>

<body bgcolor="lightgray">

<p style="text-align: center; color: burlywood; font-size: 2em;">
<strong>ChinaRush.Rock</strong><br />
<strong>再聚首</strong>
</p>

<!--确认是否参加聚会-->
<form action="p_confirmed.php" method="post" style = "margin-top: 15px">
<table id="p_confirmed">
<tr>
<th>序号</th>
<th>是否住宿</th>
<th>21日午餐</th>
<th>22日午餐</th>
</tr>

<tr class="alt">
<td>
<input id="order_p_confirmed" type="text" name="order_p_confirmed" />
</td>

<td>
<select name="stay_or_not">
<option value="需要">需要</option>
<option value="不需要">不需要</option>
<option value="待定">待定</option>
</select>
</td>

<td>
<select name="lunch_or_not">
<option value="参加">参加</option>
<option value="不参加">不参加</option>
<option value="待定">待定</option>
</select>
</td>

<td>
<select name="dinner_or_not">
<option value="参加">参加</option>
<option value="不参加">不参加</option>
<option value="待定">待定</option>
</select>
</td>
</tr>

<tr>
<td colspan = '4'>
<input id="update_p_confirmed" type="submit" style="font-size:large; text-align:center" name='update_p_confirmed' value="确认" />
</td>
</tr>
</table>
</form>

<br />
<hr />
<br />

<!--费用-->
<form action="cost_confirmed.php" method="post" style = "margin-top: 15px">
<table id="cost_confirmed">
<tr>
<th>序号</th>
<th>费用</th>
</tr>

<tr class="alt_a">
<td>
<input id="order_cost_confirmed" type="text" name="order_cost_confirmed" />
</td>

<td>
<input id="cost_confirmed" type="text" name="cost_confirmed" />
</td>

<tr>
<td colspan = '2'>
<input id="update_cost_confirmed" type="submit" style="font-size:large; text-align:center" name='update_cost_confirmed' value="提交" />
</td>
</tr>
</table>
</form>

<hr />



<!--联系方式-->
<form action="contact_confirmed.php" method="post" style = "margin-top: 15px">
<table id="contact_confirmed">
<tr>
<th>序号</th>
<th>手机号</th>
</tr>

<tr class="alt_b">
<td>
<input id="order_phone_confirmed" type="text" name="order_phone_confirmed" />
</td>

<td>
<input id="phone_confirmed" type="text" name="phone_confirmed" />
</td>

<tr>
<td colspan = '2'>
<input id="update_phone_confirmed" type="submit" style="font-size:large; text-align:center" name='update_phone_confirmed' value="提交" />
</td>
</tr>
</table>
</form>

<hr />

</body>
</html>
