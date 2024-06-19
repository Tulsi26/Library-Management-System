<?php
$conn =mysqli_connect("localhost","root","");
mysqli_select_db($conn,"lms");

//Retrieve data
$rs = mysqli_query($conn, "select * from table3 ");
while($rw = mysqli_fetch_array($rs))
{
    echo "<p>St_id : <b>".$rw['st_id']."</b>";
    echo "<p>Name : <b>".$rw['name']."</b>";
    echo "<p>User Name : <b>".$rw['user']."</b>";
    echo "<p>Email : <b>".$rw['mail']."</b>";
    echo "<p>Password : <b>".$rw['pass']."</b>";
  
}
?>