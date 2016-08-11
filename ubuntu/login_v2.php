<?php
session_start();
 $_SESSION['views']=0;
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title>智慧跑道系統</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js">
</script>

</head>
<style type="text/css">
<!--
	h1 {
		text-align:center;
		background:#555;
		color:white;
		}
	h4 {text-align:center;}

ul, li {
	margin: 0;
	padding: 0;
	list-style: none;
}
.abgne_tab {
	clear: center;
	width: 650px;
	/*margin: 10px 0px;*/
	margin: 0px auto;
}
ul.tabs {
	width: 100%;
	height: 32px;
	border-bottom: 1px solid #999;
	border-left: 1px solid #999;
}
ul.tabs li {
	float: left;
	height: 31px;
	line-height: 31px;
	overflow: hidden;
	position: relative;
	margin-bottom: -1px;	/* 讓 li 往下移來遮住 ul 的部份 border-bottom */
	border: 1px solid #999;
	border-left: none;
	background: #e1e1e1;
}
ul.tabs li a {
	display: block;
	padding: 0 20px;
	color: #000;
	border: 1px solid #fff;
	text-decoration: none;
}
ul.tabs li a:hover {
	background: #ccc;
}
ul.tabs li.active  {
	background: #fff;
	border-bottom: 1px solid#fff;
}
ul.tabs li.active a:hover {
	background: #fff;
}
div.tab_container {
	clear: left;
	width: 100%;
	border: 1px solid #999;
	border-top: none;
	background: #fff;
}
div.tab_container .tab_content {
	padding: 20px;
}
div.tab_container .tab_content h2 {
	margin: 0 0 20px;
}

-->
</style>

<script type="text/javascript">
$(function(){
	// 預設顯示第一個 Tab
	var _showTab = 0;
	$('.abgne_tab').each(function(){
		// 目前的頁籤區塊
		var $tab = $(this);
 
		var $defaultLi = $('ul.tabs li', $tab).eq(_showTab).addClass('active');
		$($defaultLi.find('a').attr('href')).siblings().hide();
 
		// 當 li 頁籤被點擊時...
		// 若要改成滑鼠移到 li 頁籤就切換時, 把 click 改成 mouseover
		$('ul.tabs li', $tab).click(function() {
			// 找出 li 中的超連結 href(#id)
			var $this = $(this),
				_clickTab = $this.find('a').attr('href');
			// 把目前點擊到的 li 頁籤加上 .active
			// 並把兄弟元素中有 .active 的都移除 class
			$this.addClass('active').siblings('.active').removeClass('active');
			// 淡入相對應的內容並隱藏兄弟元素
			$(_clickTab).stop(false, true).fadeIn().siblings().hide();
 
			return false;
		}).find('a').focus(function(){
			this.blur();
		});
	});
});

</script>



<body>
<center>
<header>
<br>
<h1>Welcome 智慧跑道系統!</h1>
<br>
<h2>請先登入</h2>
</header>
<?php
header("Content-Type:text/html; charset=utf-8");
$db = new SQLite3('/var/www/html/exercise.db');
$temp=$db->query('SELECT * FROM campus_detail');
?>
<p>
	<div class="abgne_tab">
		<ul class="tabs">
			<li><a href="#tab1">學生</a></li>
			<li><a href="#tab2">教職員</a></li>
			<li><a href="#tab3">一般民眾</a></li>
		</ul>

<div class="tab_container">
<div id="tab1" class="tab_content">
<form id="identity_choose" action="home_page_student_v2.php" method="post">
<table border="1">
請選擇學校：
<select name="school">
<?php
while($list=$temp->fetchArray())
{
        echo "<option value=".$list['CampusName'].">".$list['CampusName']."</option>\n";
}
?>
</select>
<br>
<br><p>學號：<input type="text" style="font-size:10px;padding:5px" name="ID"></p>
<p>生日：<input type="password" style="font-size:10px;padding:5px" name="birthday"><br>(例如：840604)</p>
<br>
</table><p align="center"><input type="submit" value="確認"/></p>
</form></div>


<div id="tab2" class="tab_content">
<form id="identity_choose" action="?" method="post">
<table border="1">
請選擇學校：
<select name="school">
<?php
$temp=$db->query('SELECT * FROM campus_detail');
while($list=$temp->fetchArray())
{
       echo "<option value=".$list['CampusName'].">".$list['CampusName']."</option>\n";		
}
?>
</select>
<br>
<br><p>身分證：<input type="text" style="font-size:10px;padding:5px" name="ID"></p>
<p>生日：<input type="password" style="font-size:10px;padding:5px" name="birthday"><br>(例如：840604)</p>
<br>
</table><p align="center"><input type="submit" value="確認" /></p></form>
</div>
	<div id="tab3" class="tab_content"> 
	<form id="identity_choose" action="?" method="post">
				<table border="1">
請選擇學校：
<select name="school">
<?php
$temp=$db->query('SELECT * FROM campus_detail');
while($list=$temp->fetchArray())
{
echo $list[Campusid];
       echo "<option value=".$list['CampusName'].">".$list['CampusName']."</option>\n";
}
$db->close();
?>
</select>
<br>
<br><p>身分證：<input type="text" style="font-size:10px;padding:5px" name="ID"></p>
<p>生日：<input type="password" style="font-size:10px;padding:5px" name="birthday"><br>(例如：840604)</p>
<br>
</table><p align="center"><input type="submit" value="確認" /></p></form>
</div>
</div>
</body>
</html>
