<?php include("../include/connection.php"); ?>

<?php

if(isset($_GET['id']) && $_GET['status']==1)
{

$mysqli->query("DELETE FROM flats1 WHERE id='$_GET[id]' ");

header("location:editflats.php");

}

?>


<?php

if(isset($_GET['id']) && $_GET['status']==2)
{

$mysqli->query("DELETE FROM flats2 WHERE id='$_GET[id]' ");

header("location:editflats.php");

}

?>

<?php

if(isset($_GET['id']) && $_GET['status']==3)
{

$mysqli->query("DELETE FROM flats3 WHERE id='$_GET[id]' ");

header("location:editflats.php");

}

?>
