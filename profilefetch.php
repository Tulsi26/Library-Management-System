<?Php

include_once("dbConn.inc");
$st_id=$_GET["st_id"];
$rs = mysqli_query($conn, "select * from table3 where st_='$st_id'");
if($rw=mysqli_fetch_row($rs))
{

    
    echo "<p>st_id : <b>$rw[0]</b>";
    echo "<p>name : <b>$rw[1]</b>";
    echo "<p>user : <b>$rw[2]</b>";
    echo "<p>mail : <b>$rw[3]</b>";
    // echo"<p>st_id:<b>$st_id</b>";
    // echo"<p>name:<b>$name</b>";
   
    // echo"<p>user:<b>$user</b>";
    // echo"<p>mail:<b>$mail</b>";
    // echo"<p>pass:<b>$pass</b>";

}

?>