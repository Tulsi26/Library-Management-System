<?php
include_once("dbConn.inc");
$rs=mysqli_query($conn, "select * from book where status=0");
$name=""; $bid="";

while($rw=mysqli_fetch_row($rs))
{
    $name=$rw[1];
    $bid=$rw[0];
	$authors=$rw[2];
	$edition=$rw[3];
	$quantity=$rw[4];
	$department=$rw[5];
                            //Query String
    //echo "<p><a href=details2.php?e_id=$e_id>$nm</a>";
    echo "<p>$name $authors  $edition $quantity $department<a href=approvbook.php?bid=$bid&status=1>APPROVE</a>";
	
    echo " <a href=rejectbook.php?bid=$bid&status=9> REJECT</a>";
}
//update stdreg set status=1 where e_id='$e_id'

?>