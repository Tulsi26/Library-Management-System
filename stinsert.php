<?php


include_once("dbConn.inc");
extract($_GET);
// $Name=$_GET["name"];
// $Username=$_GET["user"];
// $Email=$_GET["mail"];
// $Password=$_GET["pass"];
$rs = mysqli_query($conn, "select st_id from table3 order by st_id asc");
$st_id="";
if($rw=mysqli_fetch_row($rs)){
  $n = 1;
  $n++;
  $st_id = "S".$n;
}
else{
    $st_id ="S1";
}
$qry="insert into table3 values('$st_id','$name','$user','$mail','$pass')";
mysqli_query($conn,$qry);
echo "<center>Congratulations, You have been successfully registered! </center>";

?>