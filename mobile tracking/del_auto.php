<?php $id=$_REQUEST['id'];
include("connection.php");
$query="DELETE FROM shop WHERE id ='".$id."'";
mysql_query($query);
header("Location: reviewdetails.php");
mysql_close($link);
?>

