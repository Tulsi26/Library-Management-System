<?php
include_once("dbConn.inc")
extract($_GET);
$query = "select * from table3 where st_id = '$_SESSION[st_id]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
        $st_id = $row['st_id']
		$name = $row['name'];
        $user = $row['user']
		$mail = $row['mail'];
		$pass = $row['pass'];
		
	}
?>