<?php
include_once("dbConn.inc");
$st_id="";
$rs=mysqli_query($conn, "select * from table3 where st_id='$st_id'");
if($rw=mysqli_fetch_row($rs))
{


    


 mysqli_query($conn, "update table3 set pass='$pass' where st_id='$st_id'");



echo "Your Password has been updated....";
?>
<?php
}
else
{
    echo "<center>Stu ID <b>$st_id</b> NOT found";
}
?>