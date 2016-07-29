
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>智慧跑道系統</title>
</head>
<body>
<center>
<header>
<br>
<h1>Welcome 智慧跑道系統!</h1>
<br>
<h2>請先登入</h2>
</header>
<form action="?" method="post">
<table border="1">
<th>
<form onclick='Radio_onclick'>
<p><input type="radio" name="purview" value="student" checked="true">學生(帳號：學號)</p>
<br>
<p><input type="radio" name="purview" value="teacher"> 教職員(帳號：身分證)</p>
<br>
<p><input type="radio" name="purview" value="masses"> 一般民眾(帳號：身分證)</p>
<br>
</form></th>
<th>
<?php
header("Content-Type:text/html; charset=utf-8");
 $dbhost = 'localhost';
 $dbuser = 'exercise';
 $dbpass = '7154822';
 $dbname = 'exercise';

$Link = mysql_connect($dbhost, $dbuser, $dbpass);
/*if (!$Link) {
　die(' 連線失敗，輸出錯誤訊息 : ' . mysql_error());
}
echo ' 連線成功 ';*/

$link_db=mysql_select_db($dbname);
/*if($link_db)
{
        echo'資料庫連結成功';
}
else
        echo'資料庫連結失敗';*/

$sqll="SELECT * FROM campusid ";
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER_SET_CLIENT=utf8");
mysql_query("SET CHARACTER_SET_RESULTS=utf8");
$sql = mysql_query($sqll) or die(mysql_error());
$rows=mysql_num_rows($sql);
/*if($rows=="")
        echo'查無資料';
else
        echo'有'.$rows.'資料';*/
echo '請選擇學校：';
?>

<select name="select">
<?php
while($list=mysql_fetch_array($sql))
{
        $num=0;
        echo "<option value=".$num.">".$list['CampusName']."</option>\n";
}
mysql_free_result($sql);
mysql_close($Link);
?>
</select>
<br>
<br><p>帳號：<input type="text" style="font-size:10px;padding:5px" name="ID"></p>
<p>生日：<input type="text" style="font-size:10px;padding:5px" name="birthday"><br>(例如：840604)</p>
<br>
</th>
</table>
<p><input type="submit" value="Login"></p>
</form>
</center>
</body>
</html>

