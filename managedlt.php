<?php
extract($_GET);
include_once("dbConn.inc");


"delete from book where ctgry='$ctgry'";
mysqli_query($conn,"delete from category where ctgry='$ctgry'");

?>
<center>
Your Category has been deleted