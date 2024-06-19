<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Book</title>
    <link rel="stylesheet" href="newbk.css">
</head>
<body>
    <div>
        <form method="get" action="newbkinsert.php">
            <h1><center>Add New Book</center></h1>
            <table align="center" width="40%" border="0" style="border-collapse:collapse" class="main">
               
                <tr>
                    <td>Book Id</td>
                <tr>
                    <td><input type="text" name="bid"></td>
                </tr>
                <tr>
                    <td>Book Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Book Authors</td>
                </tr>
                <tr>
                    <td><input type ="text" name="authors"></td>
                </tr>
                <tr>
                    <td>Book Edition</td>
                </tr>
                <tr>
                    <td><input type="text" name="edition"></td>
                </tr>
                <tr>
                    <td>Status</td>
                </tr>
                <tr>
                    <td><input type="radio" name="status" value="a">Available
                    <input type="radio" name="status" value="n">Not Available</td>
                    
                </tr>
                <tr>
                    <td>Quantity</td>
               </tr>
                <tr>
                    <td><input type ="text" name="quantity"></td>
                </tr>
                <tr>
                    <td>Department</td>
                </tr>
                <tr>
                    <td><input type ="text" name="department"></td>
                </tr>
                <tr>
                    <td align="center"><input type ="submit" value="Submit" ></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>