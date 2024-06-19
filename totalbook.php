<?php
$conn =mysqli_connect("localhost","root","");
mysqli_select_db($conn,"lms");

//Retrieve data
$rs = mysqli_query($conn, "select * from book ");
while($rw = mysqli_fetch_array($rs))
{
    echo "<p>Book id : <b>".$rw['bid']."</b>";
    echo "<p>Book Name : <b>".$rw['name']."</b>";
    echo "<p>Author Name : <b>".$rw['authors']."</b>";
    echo "<p>Book Edition : <b>".$rw['edition']."</b>";
    echo "<p>Status : <b>".$rw['status']."</b>";
    echo "<p>Book Quantity : <b>".$rw['quantity']."</b>";
    echo "<p>Book Department : <b>".$rw['department']."</b>";
}
?>