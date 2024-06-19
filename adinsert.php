<?php


include_once("dbConn.inc");
extract($_GET);
$rs = mysqli_query($conn, "select * from table2 where user = '$user'");
if($rw= mysqli_fetch_row($rs)){
   echo "<center>Already exists";
}
else{
$qry="insert into table2 values('$name','$user','$mail','$pass')";
mysqli_query($conn,$qry);
echo "<center>Congratulations,<br><b> You have been successfully registered! </b></center>";
}
?>