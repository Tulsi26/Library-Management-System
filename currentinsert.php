<?php


include_once("dbConn.inc");
extract($_GET);
$currentaffair="";
$rs = mysqli_query($conn, "select * from bookdetail where currentaffair='$currentaffair'");

if($rw= mysqli_fetch_row($rs)){
   echo "<center>Already exists";
}
else{
$qry="insert into bookdetail values('$currentaffair')";
mysqli_query($conn,$qry);
echo "<center>Congratulations,<br><b> You have been successfully registered! </b></center>";
}
?>