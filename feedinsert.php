<?php

include_once("dbConn.inc");
extract($_GET);

$rs = mysqli_query($conn, "select * from feedback where athr = '$athr'");
if($rw= mysqli_fetch_row($rs)){
   echo "<center>Already exists";
}
else{
$qry="insert into  feedback values('$athr')";
mysqli_query($conn,$qry);
echo "<center>Congratulations,<br><b> You have been successfully registered! </b></center>";
}
?>

?>