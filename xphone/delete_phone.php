<?php
include('connection.php');
$id = (int)$_POST['id'];
$query = 'delete from tbl_phone where id = '.$id;
$result = mysql_query($query) or die(mysql_error());
if(mysql_affected_rows() > 0){
echo 'Delete Data Success';
}else{
echo '';
}
?>