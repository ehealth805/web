
<?php
 header("Content-Type:text/html; charset=utf-8");
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = 'root';
 $dbname = 'excise';

$Link = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$Link) {
　die(' 連線失敗，輸出錯誤訊息 : ' . mysql_error());
}
echo ' 連線成功 ';

 $link_db=mysql_select_db($dbname);
if($link_db)
{
        echo'資料庫連結成功';
}
else
        echo'資料庫連結失敗';

$sqll="SELECT * FROM UserData";
$sql = mysql_query($sqll) or die(mysql_error());
$rows=mysql_num_rows($sql);
if($rows=="")
        echo'查無資料';
else
        echo'有'.$rows.'資料';
while($list=mysql_fetch_array($sql))
{
        echo .$list['UserID'].;
        echo .$list['Name'].;
        echo .$list['email'].;
		echo .$list['address'].;
		echo .$list['weight'].;
		echo .$list['height'].;
		echo .$list['department'].;
		echo .$list['campusid'].;
}
mysql_free_result($sql);
mysql_close($Link);
?>

