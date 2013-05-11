<?php include("../include/connection.php"); ?>

<?php

if(isset($_GET['id']) && $_GET['status']==1)
{

$statement = $mysqli->prepare("DELETE FROM flats1 WHERE id=?");
$statement->bind_param('i', $_GET['id']);
$statement->execute();

header("location:editflats.php");

}

?>


<?php

if(isset($_GET['id']) && $_GET['status']==2)
{

$statement = $mysqli->prepare("DELETE FROM flats2 WHERE id=?");
$statement->bind_param('i', $_GET['id']);
$statement->execute();

header("location:editflats.php");

}

?>

<?php

if(isset($_GET['id']) && $_GET['status']==3)
{

$statement = $mysqli->prepare("DELETE FROM flats3 WHERE id=?");
$statement->bind_param('i', $_GET['id']);
$statement->execute();

header("location:editflats.php");

}

?>
