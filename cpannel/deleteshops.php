<?php include("../include/connection.php"); ?>

<?php

if(isset($_GET['id']) && $_GET['status']==1)
{

$mysqli->query("DELETE FROM shops1 WHERE id='$_GET[id]' ");

header("location:editshops.php");

}

?>


<?php

if(isset($_GET['id']) && $_GET['status']==2)
{

$mysqli->query("DELETE FROM shops2 WHERE id='$_GET[id]' ");

header("location:editshops.php");

}

?>

<?php

if(isset($_GET['id']) && $_GET['status']==3)
{

$mysqli->query("DELETE FROM shops3 WHERE id='$_GET[id]' ");

header("location:editshops.php");

}

?>