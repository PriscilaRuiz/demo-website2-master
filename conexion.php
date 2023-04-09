<?php
	function conexion(){
	$host = "host=containers-us-west-35.railway.app";
	$port = "port=6543";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=vcTnSUXTBqDJutECvjov";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>