<?php
//header("Content-Type:text/html; charset=utf-8");

/*$dbhost = '172.31.54.197';   
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'excise';

$conn = @mysql_connect($dbhost, $dbuser, $dbpass);
if(!$conn)
{
	echo mysql_error();
	echo "error";
	exit(0);
}
*/

/*$link=mysql_connect("172.31.54.197", "julia", "840604");
echo $link;


echo "edn";
exit(0);*/?>
<?php
header("Content-Type:text/html; charset=utf-8");
$dbhost = '54.152.25.110';   
$dbuser = 'julia';
$dbpass = '840604';
$dbname = 'excise';

//$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$conn=mysql_connect("203.64.84.187", "System_Manager", "milab707");
if(!$conn)
{
	echo mysql_error();
	echo "error";
	exit(0);
}
else 
	echo"成功";

/*echo ' 連線成功 ';
$link_db=mysql_select_db($dbname);
if($link_db)
{
        echo'資料庫連結成功<br>';
}
else
        echo'資料庫連結失敗';

$sqll="SELECT * FROM UserData";
$sql = mysql_query($sqll) or die(mysql_error());
$rows=mysql_num_rows($sql);
if($rows==" ")
        echo'查無資料';
else
        echo'有'.$rows.'資料<br>';
while($list=mysql_fetch_array($sql))
{
        echo $list['UserID'];
        echo $list['Name'];
        echo $list['email'];
        echo $list['address'];
        echo $list['weight'];
        echo $list['height'];
        echo $list['department'];
        echo $list['campusid'];
}
mysql_free_result($sql);
mysql_close($Link);*/
?>


