<?php

$host="localhost";
$user="root";
$pass="";
$db="alwaleed";

$mysqli = mysqli_connect($host, $user, $pass, $db);

@$mysqli->query("SET NAMES 'utf8' COLLATE 'utf8' ");

@$mysqli->query("SET character_set_server='utf8'; ");
	
@$mysqli->query("SET character_set_client='utf8'; ");
	
@$mysqli->query("SET character_set_results='utf8'; ");
	
@$mysqli->query("SET character_set_connection='utf8'; ");
	
@$mysqli->query("SET character_set_database='utf8'; ");
	
@$mysqli->query("SET collation_connection='utf8_general_ci'; ");
	
@$mysqli->query("SET collation_database='utf8_general_ci'; ");

@$mysqli->query("SET collation_server='utf8_general_ci'; ");

?>

