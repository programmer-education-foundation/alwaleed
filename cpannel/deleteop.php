

<?php
include("../include/connection.php"); 
$result=mysql_query("DELETE FROM opinion") or die(mysql_error());
header("Location:contactus.php");
?>
