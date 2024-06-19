<?php

include_once("dbConn.inc");
extract($_GET);
$qry = "update table3 set user = '$user', mail= $mail where st_id= '$st_id'";
mysqli_query($conn , $qry);


?>
<center>
    Your record has been successfully updated...