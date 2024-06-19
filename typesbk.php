

<table align=center width=37%>
<?php
include_once("dbConn.inc");
$rs = mysqli_query($conn, "select * from category ");
$name="";
while($rw = mysqli_fetch_row($rs))
{
    $ctgry=$rw[0];
  
   echo"<tr><td>$ctgry";
                            //Query String
    echo "<td><a href=bkdetail.php?ctgry=$ctgry>Details</a>";
    echo "<td><a href=updatebk.php?ctgry=$ctgry>Update</a>";
}

?>
