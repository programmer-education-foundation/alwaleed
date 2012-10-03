<?php

$host="localhost";
$user="root";
$pass="";
$db="alwaleed";

$connect = mysql_connect($host, $user, $pass);
$db_con = mysql_select_db($db);

@mysql_query("SET NAMES 'utf8' COLLATE 'utf8' ");

@mysql_query("SET character_set_server='utf8'; ");
	
@mysql_query("SET character_set_client='utf8'; ");
	
@mysql_query("SET character_set_results='utf8'; ");
	
@mysql_query("SET character_set_connection='utf8'; ");
	
@mysql_query("SET character_set_database='utf8'; ");
	
@mysql_query("SET collation_connection='utf8_general_ci'; ");
	
@mysql_query("SET collation_database='utf8_general_ci'; ");

@mysql_query("SET collation_server='utf8_general_ci'; ");

?>

