<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<form action=" ?" method='post'>
Username: <input type="text" name="user"><br>
 <input type='submit' value='計算'>
<!--Password: <input type="password" name="password">-->
</form> 
<?php
if($_POST['user']==1)
{
 echo "do something";
 exit(0);
}
?>
</body>
</html>