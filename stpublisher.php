<?php
$conn =mysqli_connect("localhost","root","");
mysqli_select_db($conn,"lms");

//Retrieve data
$rs = mysqli_query($conn, "select * from publisher ");
while($rw = mysqli_fetch_array($rs))
{
    echo "<p>Book Publisher: <b>".$rw['publish']."</b>";
}
?>