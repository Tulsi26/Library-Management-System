  <?php

include_once("dbConn.inc");
$ctgry = $_GET["ctgry"];
$rs = mysqli_query($conn, "select * from category where ctgry='$ctgry'");
if($rw=mysqli_fetch_row($rs)){
    $ctgry=$rw[0];
    echo"<p>Category: <b>$ctgry</b>";
   
    
}

?>  