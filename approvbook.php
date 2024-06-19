<?php
       $conn = mysqli_connect("localhost", "root", "");
       mysqli_select_db($conn, "lms");
       
$bid=$_GET["bid"];
$status= $_GET["status"];
// $name=$_GET["name"];
// $authors=$_GET["authors"]
// $edition=$_GET["edition"];
// $quantity=$_GET["quantity"];
// $department=$_GET["department"];

       $qry = "update book where bid='$bid'";
       
?>