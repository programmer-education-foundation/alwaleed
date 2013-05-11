<?php include("../include/connection.php"); ?>

<?php

if(isset($_GET['id']) && $_GET['status']==1)
{

$statement = $mysqli->prepare("DELETE FROM shops1 WHERE id=? ");
$statement->bind_param('i', $_GET['id']);
$statement->execute();

header("location:editshops.php");

}

?>


<?php

if(isset($_GET['id']) && $_GET['status']==2)
{

$statement = $mysqli->prepare("DELETE FROM shops2 WHERE id=? ");
$statement->bind_param('i', $_GET['id']);
$statement->execute();

header("location:editshops.php");

}

?>

<?php

if(isset($_GET['id']) && $_GET['status']==3)
{

$statement = $mysqli->prepare("DELETE FROM shops3 WHERE id=? ");
$statement->bind_param('i', $_GET['id']);
$statement->execute();

header("location:editshops.php");

}

?>
