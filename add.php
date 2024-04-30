<?php 
require 'db_connect.php';
// retrieve all variables
$empID = @$_POST["empID"];
$fname = @$_POST["fname"];
$lname = @$_POST["lname"];
$position = @$_POST["position"];
$email = @$_POST["email"];
$depID = @$_POST["depID"];
$hireDate = @$_POST["hireDate"];

// insert information to database
$sql="insert into $tblname values('$empID','$fname','$lname','$position','$email','$depID','$hireDate')";
$result=mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<html>
<head>
<title>Add processed</title>

<style>
  body {
    background-color: #f1fced;
    font-family: Verdana;
  }
  
  h1, h2, h4, td, p, blockquote {
    color: #5c7a52;
  }
  
  </style>

<BODY>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote>
  <h3>Your information is added to database. </h3>
</blockquote>
  <body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
