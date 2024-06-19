<?php
session_start();

include_once("dbConn.inc");
extract($_GET);
$rs=mysqli_query($conn, "select * from table3 where user='$user' and pass='$pass'");
if($rw=mysqli_fetch_row($rs))
{
    $_SESSION["user"]=$user;
    $_SESSION["name"]=$rw[1];
    header("Location: login3.php");
}
else
{
    header("Location: login.php?abc=inv");
}
?>