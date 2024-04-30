<?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bizconnectpro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from form
    $empID = $_POST['empID'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $depID = $_POST['depID'];
    $hiredate = $_POST['hiredate'];

    // Validate hire date format (YYYY-MM-DD)
    if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $hiredate)) {
        die("Invalid hire date format. Please use YYYY-MM-DD.");
    }

    // SQL to update employee information
    $sql = "UPDATE employee SET fname='$fname', lname='$lname', position='$position', email='$email', depID='$depID', hiredate='$hiredate' WHERE empID='$empID'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close connection
$conn->close();

?>


<style>
  body {
    background-color: #f1fced;
    font-family: Verdana;
  }
  
  h1, h2, h4, td, p {
    color: #5c7a52;
  }
  
  </style>

