<?php
$db = new SQLite3('/var/www/html/exercise.db');
$temp=$db->query('SELECT Campusid  FROM campus_detail');
while($result=$temp->fetchArray())
{
echo $result[Campusid];
echo '<br>';
}
?>
