<?php
extract($_GET);
include_once("dbConn.inc");

 mysqli_query($conn, "update table3 set pass='$pass' where st_id='$st_id'");


?>
<center>
Your Password has been updated....