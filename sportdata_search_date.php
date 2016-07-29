<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<h1><p class="title">日期查詢</p></h1>
<style type="text/css">
		h1 {
		text-align:center;
		background:#555;
		color:white;
		}
</style>
</head>
<body>
<center>
<form id="choose_time" action="show_sportdatat.php " method="post">
<label for="bookdate">開始日期：</label>
<input type="date" id="bookdate_S" name="bookdate_S" placeholder="2014-09-18"><br><p>
<!--placeholder 就是用來提供使用者一個標準的格式，讓使用者依照這樣的格式輸入-->
<label for="bookdate">結束日期：</label>
<input type="date" id="bookdate_E" name="bookdate_E" placeholder="2014-09-18"><br><p>
<input type="submit" value="確認"></form>
<a href="home_page_student.php" ><img src="Home.png" width="50" height="50" align="center"><br></a>回主畫面
</center>
</body>
</html>
