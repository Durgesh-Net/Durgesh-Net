<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_emp";

$id = $_REQUEST['id'];
$ename=$_REQUEST['txt_name'];
$edept= $_REQUEST['txt_dept'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE table_emp SET emp_name='$ename', emp_dept='$edept'
					WHERE emp_id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>