<?php 
require 'db_connect_reviews.php';
// retrieve all variables
$reviewID = @$_POST["reviewID"];
$revDate = @$_POST["revDate"];
$score = @$_POST["score"];
$depID = @$_POST["depID"];


// insert information to database
$sql="insert into $tblname values('$reviewID','$revDate','$score','$depID')";
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
  
  h1, h2, h3, h4, td, p {
    color: #5c7a52;
  }
  
  </style>

<BODY>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote>
  <p>
  <h3>Your information is added to database. </h3>
  <body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
