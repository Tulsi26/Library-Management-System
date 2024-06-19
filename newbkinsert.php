<?php


include_once("dbConn.inc");
extract($_GET);
$rs = mysqli_query($conn, "select * from book where bid = '$bid'");
if($rw= mysqli_fetch_row($rs)){
   echo "<center>Already exists";
}
else{
$qry="insert into book values($bid,'$name','$authors','$edition','$status',$quantity,'$department')";
echo $qry;
mysqli_query($conn,$qry);
echo "<center>Congratulations,<br><b> You have been successfully registered! </b></center>";
}
?>