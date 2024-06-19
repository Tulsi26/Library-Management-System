<?php
extract($_GET);
include_once("dbConn.inc");

$rs=mysqli_query($conn, "select * from table3 where st_id='$st_id'");
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
                    <th bgcolor="#000055"><font color=white> Student Form</th> 
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
                  <input type="hidden" name="name" value='<?php echo $name; ?>'>
                
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="user" value='<?php echo $rw[2]; ?>'readonly>
                
                <tr>
                    <td>Email : </td>
                    <td><input type="text" name="mail" value='<?php echo $rw[3]; ?>'readonly>
                    <tr>

                    <tr>
                    <td>Password: </td>
                    <td><input type="text" name="pass" value='<?php echo $rw[4]; ?>'readonly>
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
    echo "<center>Student ID <b>$e_id</b> does not exist";
}
?>