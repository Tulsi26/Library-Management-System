<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Book</title>
</head>
<body>
    <h1><center>Update Book</center></h1>
    <form method = "get" action ="manageupbk.php">
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
                   <td><input type="radio" name="status">Available <input type="radio" name="status">Not Available</td>
                   
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
                   <td align="center"><input type ="submit" value="Delete Book" ></td>
               </tr>
           </table>
       
    </form>
</body>
</html>