<?php
$conn =mysqli_connect("localhost","root","");
mysqli_select_db($conn,"lms");

//Retrieve data
$rs = mysqli_query($conn, "select * from author ");
while($rw = mysqli_fetch_array($rs))
{
    echo "<p>Book Author: <b>".$rw['athr']."</b>";
}
?>