<?php
$conn = mysql_connect('localhost', 'root', '') or
die(mysql_error());
$db = mysql_select_db('db_phone') or die(mysql_error());
?>