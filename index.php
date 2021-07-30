<!DOCTYPE html>
<html>
<head>
<style>
#employees {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#employees td, #employees th {
  border: 1px solid #ddd;
  padding: 8px;
}

#employees tr:nth-child(even){background-color: #f2f2f2;}

#employees tr:hover {background-color: #ddd;}

#employees th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.button {
  background-color: #4CAF50; /* Green */
  border: 10px;
  border-color: black;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {border-radius: 2px;}
</style>

</head>
<body>
<div class="col-md-10" style="size: 80%">
	<div class="col-md-8" align="right">
		<button class=" button button" style="align-items: right;"><a href="register.php">Add Employees</a></button>
	</div>

<table id="employees">
  <tr>
    <th>Empl.ID</th>
    <th>Employee Name</th>
    <th>Employee Department</th>
    <th>Action</th>
  </tr>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_emp";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT emp_id, emp_name, emp_dept FROM table_emp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
		
?>
  <tr>
    <td><?php echo $row["emp_id"] ?></td>
    <td><?php echo $row["emp_name"] ?></td>
    <td><?php echo $row["emp_dept"] ?></td>
    <td><a href="edit.php?id=<?php echo $row["emp_id"] ?>">Update</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="delete.php?id=<?php echo $row["emp_id"] ?>">Delete</a></td>
  </tr>
  <?php } }
  else {
echo "0 results";
  }

  $conn->close(); ?>
</table>
</div>
</body>
</html>
