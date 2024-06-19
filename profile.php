<?php

include_once("dbConn.inc");
$rs = mysqli_query($conn, "select * from table3");
$st_id ="";
$name="";
$user="";
$mail="";

while($rw = mysqli_fetch_row($rs))
{
    $st_id=$st_id;
    $name=$name;
    $user=$user;
    $mail=$mail;

    echo"<tr><td>$st_id";
    echo"<tr><td>$name";
    echo"<tr><td>$user";
    echo"<tr><td>$mail";
    echo "<td><a href=profilefetch.php?st_id=$st_id>Profile</a>";
    // echo "<td><a href=profilefetch.php?name=$name>Profile</a>";
    // echo "<td><a href=profilefetch2.php?e_id=$st_id>Update</a>";

}

?>