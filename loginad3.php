<?php
session_start();

$user=$_SESSION["user"];
if(strcmp($user, "")==0)
{
    echo "<center>Please do login first!";
}
else
{
    $nm=$_SESSION["name"];
    echo "<center>Welcome <b>$name</b>";
    echo "<p><a href=logoutad.php>Sign out</a>";
}
?>