<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="login.css"> 
</head>
<body>
    <div class="main">
       <div class="container">
        <a href="details.php">Details</a>
        <a href="stlogin.php">Student login</a>
        <a href="adlogin.php">Admin Login</a>
        <a href="lms3.php">Student SignUp</a>
        <a href = "lms2.php">Admin SignUp</a>
       </div>
    </div>

    <?php
    
        $s=$_GET["abc"];
        if(strcmp($s, "")!=0)
        {
            if(strcmp($s, "inv")==0)
            {
                echo "<font color=red>Invalid login credentials!</font>";
            }
            if(strcmp($s, "bahar")==0)
            {
            }
        }
        ?>

    <form method="get" action="loginad2.php">
        <table border="0" width="40%" style="border-collapse: collapse;" align="center" class="page">
            <tr>
                <th height="100px" align="center">LOGIN FORM</th>
            </tr>
            <tr>
               <table align="center" width="25%"  height="50%" border="0"  style="border-collapse:collapse" class="abc">
                <tr height="5px"><td>Username:</td>
            </tr>
            <tr>
                <td><input type="text" name="user" ></td>
            </tr>
            <tr>
                <td>Password:</td>
            </tr>
            <tr>
                <td><input type="password" name="pass"></tr>
            </tr>   
            <tr>
                <td align="center">
                    <input type="submit"  value="Login">
                </td>
            </tr>  
         
               </table>
            </tr>
            
        </table>
    </form>
   

            
</body>
</html>