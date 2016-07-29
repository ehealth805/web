<!DOCTYPE html>
<?
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
<title>智慧跑道系統</title>
</head>
<style type="text/css">
	h1 {
		text-align:center;
		background:#555;
		color:white;
		}
		.title{
		text-align:right;
		color:maroon;
		font-size:30px;
		}
		.function{
		text-align:center;
		color:maroon;
		font-size:25px;
		}
</style>
 <script type="text/javascript"> 
	// function delete(){
// if(<?$_SESSION['views']?>>1)
		// {	
			// <?echo'iiii';
			// session_destroy();?>
		// }		
	// } 
// </script>
<body>
<?php 
if($_SESSION['views']==0)
{
	$_SESSION['school_name']=$_POST["school"];
	//echo$_SESSION['views'].'OK';
}
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
{?>
<center>
<header>
<br>
<h1>
<?$_SESSION['school_name'];
 $_SESSION['views']+=1;
   echo $_SESSION['school_name'];
?>
 </h1>
</header>
<p class="title">
<!--$_POST["ID"].-->
您好，
<a href="login_v2.php">登出</a></p>
</p>
<p class="function"><a href="user_data.php">使用者資訊查詢</a></p>
<br>
<p class="function"><a href="sportdata_search_date.php">運動紀錄查詢</a></p>
<br>
<p class="function"><a href="analyze_chat_choose.php">分析排名</a></p>
<?}
else if($type==2)
{?>
<center>
<header>
<br>
<h1>輸入錯誤</h1>
</header>	
<a href="login_v2.php">回上一頁</a>';
<?}?>

</body>
</html>