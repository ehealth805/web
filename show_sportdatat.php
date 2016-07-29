<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<h1><p class="title">個人運動資料</p></h1>
<style type="text/css">
		h1 {
		text-align:center;
		background:#555;
		color:white;
		}
		h2
		{
		text-align:center; 
		color:crimson;
		}
				table {
		font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 70%;
	font-size:20px;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
	
}
</
</style>
</head>
<body>
<center>
<?php 
if(empty($_POST))
{$type=1;
}
else
{
	//加上資料庫的搜尋
	//------------------------------
    // $db = new SQLite3('../www/ehealth.db');
    // $temp="SELECT Competence From AccountData WHERE Accou$";
    // $temp=$db->query($temp);
    // $result=$temp->fetchArray();
        // if($result)
        // {$type=1;}
        // else
        // {$type=2;}
	$type=1;
}
if($type==1)
{
	echo'
	<table>
  <tr>
    <th>學號</th>
    <th>姓名</th>
    <th>年/週</th>
	<th>日期時間</th>
	<th>跑步距離(m)</th>
	<th>跑步時間(min)</th>
	<th>走路距離(m)</th>
	<th>走路時間(分)</th>
	<th>平均速度(KM/hr.)</th>
	<th>消耗熱量(Kcal)</th>
	<th>運動場所</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
  </tr>
</table>';
}
else if($type==2)
{
	echo'<h2>此時段並沒有運動紀錄<br><p>';
	echo'
	<input type="submit" value="返回上一頁" onclick="history.back()"></h2>';
}
?>
<a href="home_page_student.php" ><img src="Home.png" width="50" height="50" align="center"><br></a>回主畫面
</body>
</html>