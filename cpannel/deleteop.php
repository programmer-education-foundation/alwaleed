

<?php
include("../include/connection.php"); 
$result=$mysqli->query("DELETE FROM opinion") or die($mysqli->error);
header("Location:contactus.php");
?>
