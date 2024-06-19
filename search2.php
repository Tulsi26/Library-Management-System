<?php
extract($_GET);
include_once("dbConn.inc");

$rs=mysqli_query($conn, "select * from book where bid='$bid'");
if($rw=mysqli_fetch_row($rs))
{
?>
<html>
    <head>
        <title> Form </title>
    </head>
    <body>
        <center>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <form>
            <table border="0" width="40%"  style="border-collapse:collapse">
                <tr>
                    <th bgcolor="#000055"><font color=white> Search Form</th> 
                </tr>
                <tr bgcolor="white"><td>&nbsp;</td></tr>
                
                
                <tr>
                    <td>
                        <table border="0" align="center">
                           <tr>
                            <td>&nbsp;
                                
                            <tr>
                  <td>Name : </td>
                  <td><input type="text" name="name" value='<?php echo $rw[1]; ?>' readonly>
                  <input type="hidden" name="bid" value='<?php echo $e_id; ?>'>
                
                <tr>
                    <td>Authors: </td>
                    <td><input type="text" name="authors" value='<?php echo $rw[2]; ?>'readonly>
                
                <tr>
                    <td>Edition : </td>
                    <td><input type="text" name="edition" value='<?php echo $rw[3]; ?>'readonly>
                    <tr>

                    <tr>
                    <td>Status: </td>
                    <td><input type="text" name="status" value='<?php echo $rw[4]; ?>'readonly>
                    <tr>
               

                    <tr>
                    <td>Quantity : </td>
                    <td><input type="text" name="quantity" value='<?php echo $rw[5]; ?>'readonly>
                    <tr>
               
                    <tr>
                    <td>Department: </td>
                    <td><input type="text" name="department" value='<?php echo $rw[6]; ?>'readonly>
                    <tr>

                    <tr>
               
                
                <tr>
                    <td>&nbsp;
                    </table>
                
            

            </table>
        
        </form>
       
        
     
    </body>
</html>
<?php
}
else
{
    echo "<center>Emp ID <b>$e_id</b> does not exist";
}
?>