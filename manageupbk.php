<?php
extract($_GET);
include_once("dbConn.inc");


"delete from book where bid='$bid'";
mysqli_query($conn,"delete from book where bid='$bid'");

?>
<center>
Your book has been deleted