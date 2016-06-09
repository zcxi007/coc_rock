<html>

<head>
<meta charset="utf-8" name="viewport" content=" width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>ChinaRush.Rock对战预约</title>
<style type="text/css">
#countdown, #reserve, #revoke, #code, #update_status, #update_stars, #update_remaind_attack
  {
  font-family:"KaiTi", "Tahoma";
  width:100%;
  text-align:center;
  border-collapse:collapse;
  }

#countdown td, #countdown th, #reserve td, #reserve th, #revoke td, #revoke th, #code td, #code th, #update_status td, #update_status th, #update_stars td, #update_stars th, #update_remaind_attack td, #update_remaind_attack th
  {
  font-size:1.5em;
  border:1px solid #98bf21;
  padding:3px 7px 2px 7px;
  }

#countdown th, #reserve th, #revoke th, #code th, #update_status th, #update_stars th, #update_remaind_attack th
  {
  font-size:1.5em;
  text-align:center;
  padding-top:5px;
  padding-bottom:4px;
  background-color:#A7C942;
  color:#ffffff;
  }

#countdown tr.alt td, #reserve tr.alt td, #revoke tr.alt td, #code tr.alt td, #update_status tr.alt td, #update_stars tr.alt td, #update_remaind_attack tr.alt td
  {
  color:#000000;
  background-color:#EAF2D3;
  }
  
input#h, input#i, input#s, input#order_no, input#subscriber, input#input_code, input#order_no_status, input#attack_no, input#self_stars, input#against_stars, input#self_attack_no, input#against_attack_no
{
	width:100%;
	height:30px;
}

input#countdown, input#reserve, input#revoke, input#code, input#revoke_order_no, input#update_status, input#update
{
	width:55%;
	height:30px;
}

</style>
</head>

<body bgcolor="lightgray">

<p style="text-align: center; color: burlywood; font-size: 2em;">
<strong>ChinaRush.Rock</strong><br />
<strong>对战预约</strong>
</p>

<!--倒计时-->
<form action="countdown.php" method="post">
<table id="countdown">
<tr>
<th colspan = '3'>距离对战结束还有</th>
</tr>

<tr>
<th>时</th>
<th>分</th>
<th>秒</th>
</tr>

<tr class="alt">
<td><input id="h" type="text" name="h" /></td>
<td><input id="i" type="text" name="i" /></td>
<td><input id="s" type="text" name="s" /></td>
</tr>

<tr>
<td colspan = '3'>
<input id="countdown" type="submit" style="font-size:large; text-align:center" name='countdown' value="开始计时" />
</td>
</tr>
</table>
</form>

<hr />

<!--预约-->
<form action="reserve.php" method="post" style = "margin-top: 15px">
<table id="reserve">
<tr>
<th colspan = '2'>预约对手</th>
</tr>

<tr>
<th>对手编号</th>
<th>预约者</th>
</tr>

<tr class="alt">
<td><input id="order_no" type="text" name="reserve_order_no" /></td>
<td><input id="subscriber" type="text" name="subscriber" /></td>
</tr>

<tr>
<td colspan = '2'>
<input id="reserve" type="submit" style="font-size:large; text-align:center" name='reserve' value="预约" />
</td>
</tr>
</table>
</form>

<hr />

<!--撤销预约-->
<form action="revoke.php" method="post" style = "margin-top: 15px">
<table id="revoke">
<tr>
<th>撤销预约</th>
</tr>

<tr class="alt">
<td><input id="revoke_order_no" type="text" name="revoke_order_no" /></td>
</tr>

<tr>
<td>
<input id="revoke" type="submit" style="font-size:large; text-align:center" name='revoke' value="撤销" />
</td>
</tr>
</table>
</form>

<hr />

<!--三星代码-->
<form action="code.php" method="post" style = "margin-top: 15px">
<table id="code">
<tr>
<th colspan = '2'>提交代码</th>
</tr>

<tr>
<th>对手编号</th>
<th>代码</th>
</tr>

<tr class="alt">
<td><input id="order_no" type="text" name="code_order_no" /></td>
<td><input id="input_code" type="text" name="input_code" /></td>
</tr>

<tr>
<td colspan = '2'>
<input id="code" type="submit" style="font-size:large; text-align:center" name='code' value="提交" />
</td>
</tr>
</table>
</form>

<hr />

<!--更新状态和进攻次数-->
<form action="update_status.php" method="post" style = "margin-top: 15px">
<table id="update_status">
<tr>
<th colspan = '3'>更新状态</th>
</tr>

<tr>
<th>对手编号</th>
<th>状态</th>
<th>成功率</th>
</tr>

<tr class="alt">
<td><input id="order_no_status" type="text" name="order_no_status" /></td>
<td>
<select name="status">
<option value="无变化">无变化</option>
<option value="两星">两星</option>
<option value="三星">三星</option>
<option value="一星坑">一星坑</option>
<option value="黑三">黑三</option>
<option value="未开图">未开图</option>
<option value="清除">清除</option>
</select>
</td>
<td><input id="attack_no" type="text" name="attack_no" /></td>
</tr>

<tr>
<td colspan = '3'>
<input id="update_status" type="submit" style="font-size:large; text-align:center" name='update_status' value="更新" />
</td>
</tr>
</table>
</form>

<hr />

<!--更新三星比和剩余进攻次数-->
<form action="update.php" method="post" style = "margin-top: 15px">

<!--更新三星比-->
<table id="update_stars">
<tr>
<th colspan = '2'>更新三星比</th>
</tr>

<tr>
<th>我方部落</th>
<th>对手部落</th>
</tr>

<tr class="alt">
<td><input id="self_stars" type="text" name="self_stars" /></td>
<td><input id="against_stars" type="text" name="against_stars" /></td>
</tr>

</table>

<br>

<!--更新剩余进攻次数-->
<table id="update_remaind_attack">
<tr>
<th colspan = '2'>更新剩余进攻次数</th>
</tr>

<tr>
<th>我方部落</th>
<th>对手部落</th>
</tr>

<tr class="alt">
<td><input id="self_attack_no" type="text" name="self_attack_no" /></td>
<td><input id="against_attack_no" type="text" name="against_attack_no" /></td>
</tr>

<tr>
<td colspan = '2'>
<input id="update" type="submit" style="font-size:large; text-align:center" name='update' value="更新" />
</td>
</tr>
</table>
</form>

</body>
</html>
