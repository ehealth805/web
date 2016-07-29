<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>使用者資訊查詢</title>
</head>
<style type="text/css">
		h1 {
		text-align:center;
		background:#555;
		color:white;
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
</style>
<body>
<h1><p class="title">使用者資訊查詢</p></h1>
<center>
<h2>
<?php
session_start();
echo $_SESSION['school_name'];
?></h2>
<table>
  <tr>
    <th>學號</th>
    <th>姓名</th>
    <th>班別</th>
	<th>性別</th>
	<th>身高(cm)</th>
	<th>體重(kg)</th>
	<th>e-mail</th>
	<th>晶片編碼</th>
  </tr>
  <tr>
    <td>102316999</td>
    <td>王小明</td>
    <td>10111</td>
	<td>女</td>
	<td>199</td>
	<td>60</td>
	<td>aaaa@gmail.com</td>
	<td>333333333</td>
  </tr>
</table>
<form action="home_page_student.php " method="post">
<input type="hidden" name="shcool" value=$_POST["school"]>
</form>
<a href="home_page_student.php" ><img src="Home.png" width="50" height="50" align="center"><br></a>回主畫面
 
</body>
</html>