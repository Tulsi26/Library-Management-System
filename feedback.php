<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <formmethod="get" action="feedinsert.php">
        <h1><center>Feedback</center></h1>
        <table align="center" border="0" width="50%" style="border-collapse:collapse">
            <tr>
                <td> 1. How often do you visit the Library </td>
            </tr>
            <tr>
                <tr>
                <td><input type = "radio" name="time">Daily</td>
                </tr>
                <tr>
                <td><input type = "radio" name="time">Weekly</td>
                </tr>
                <tr>
                <td><input type = "radio" name="time">Monthly</td>
                </tr>
                <tr>
                <td><input type = "radio" name="time">Rarely</td>
                </tr>
            </tr>
            <tr>
                <td> Purpose of visit: <td>
            </tr>
            
            <tr>
                <td><input type="radio" name="visit">Borrow Books</td>
           </tr>   
           <tr>
                <td><input type="radio" name="visit">Return Books</td>
            </tr>   
           
            <tr>
                <td>How would you rate your overall experience at the library ?</td>
            </tr>   
            <tr>
                <td><input type="radio" name="rate">Excellent</td>
                </tr>
                <tr>   
                <td><input type="radio" name="rate">Good</td>
                </tr>
                <tr>
                <td><input type="radio" name="rate">Average</td>
                </tr>
                <tr>
                <td><input type="radio" name="rate">Poor</td>
                </tr>
                </tr>
                <td><input type="radio" name="rate">Very Poor</td>
            </tr>
            <tr>
                <td>Did you find the book/material you were looking for?</td>
            </tr>
            <tr>
                <td><input type ="radio" name="find">Yes</td>
            </tr>   
            <tr>
                <td><input type ="radio" name="find">No</td>
            </tr>    
            <tr>
                <td><input type = "text" >if no, please specify what you were looking for:</td>
            </tr>
            <tr>
                <td>If you have any suggestion than write in the box: </td>
            </tr>
            <tr>
                <td><input type = "text" name="suggestion"></td>
            </tr>
            <
        </table>
    </form>
    <h4><b><center>Thank You for providing your Feedback .</center></b></h4>
    <h4><center>Your input is valuable in helping us enhance our library services.</center></h4>
</body>
</html> 