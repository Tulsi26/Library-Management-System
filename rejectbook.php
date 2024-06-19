<!-- <!DOCTYPE html>
<html>
<head>
    <title>Student details</title>
</head>
<body>
<center>
<form method="get" action="issue.php">
    <label for="branch">Select Category:</label>
    <select name="branch" id="branch">
        <option value="CSE">Magzine</option>
        <option value="ELECTRONIC">Novel</option>
        <option value="ELECTRONIC">Newspaper</option>
        <option value="ELECTRONIC">IT Book</option>
        <option value="ELECTRONIC">Medical Book</option>


    </select>
    <input type="submit" value="Search">
</form>
</center>
</body>
</html> -->



<?php
extract($_GET);
include_once("dbConn.inc");

// mysqli_query($conn, "update table3 set pass='$pass', sal=$sal where e_id='$e_id'");
"delete from book where bid='$bid'";
mysqli_query($conn,"delete from book where bid='$bid'");

?>
<center>
Your book has been deleted