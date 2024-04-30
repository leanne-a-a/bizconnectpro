<?php 
require 'db_connect.php';

// retrieve all variables
$fname = @$_GET["fname"];
$lname = @$_GET["lname"];

// show all contact information
$sql="select * from $tblname where fname='$fname' and lname='$lname'";
$result=mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result); 
mysqli_close($conn);
?>

<html>
<head>
<title>Detail</title>
</head>

<style>
  body {
    background-color: #f1fced;
    font-family: Verdana;
  }
  
  h1, h2, td, p, tr, td {
    color: #5c7a52;
  }
  
  </style>

<BODY>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote> 
    <table width="60%" border="0" cellpadding="5" cellspacing="15">
	<tr>
		<td colspan="2"><p><h2><?php echo "$lname, $fname"; ?></h2></td>
	  </tr>
    <tr>
      <td width="130">Employee ID :</td>
      <td><?php echo $row['empID']; ?></td>
    </tr>
    <tr>
      <td width="130">First Name :</td>
      <td><?php echo $row['fname']; ?></td>
    </tr>
    <tr>
      <td width="130">Last Name :</td>
      <td><?php echo $row['lname']; ?></td>
    </tr>
    <tr>
      <td width="130"><p>Position :<br />
      </p>        </td>
      <td><?php echo $row['position']; ?></td>
    </tr>
    <tr>
      <td width="130">E-Mail :</td>
      <td><?php echo $row['email']; ?></td>
    </tr>
    <tr>
      <td width="130">Department ID :</td>
      <td><?php echo $row['depID']; ?></td>
    </tr>
    <tr valign="top">
      <td width="130">Hire Date :</td>
      <td><?php echo $row['hiredate']; ?></td>
    </tr>
    
  </table>
   </p>
</blockquote>
</body>
</html>
