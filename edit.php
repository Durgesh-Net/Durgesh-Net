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

$id = $_REQUEST['id'];


 ?>

 <!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<body>
  <div align="middle"></div>
<div class="col-sm-6">
  <form action="update.php">
  <?php 
          $sql = "SELECT emp_id, emp_name, emp_dept FROM table_emp
                                WHERE emp_id=$id";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
              
          ?>
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
                <label>Employee Name</label>
                <input type="text" name="txt_name" value="<?php echo $row["emp_name"] ?>">

                <label>Department</label>
                <select id="Department" name="txt_dept" >

            <?php

//dept ids
              $sql = "SELECT dept_id, dept_name FROM table_dept";
              $result = $conn->query($sql);

              if ($result->num_rows > 0)
              {

                while($rowrs = $result->fetch_assoc())
                {
                  
            ?>
                    <option value="<?php echo $rowrs["dept_name"] ?>"
                      <?php if($rowrs["dept_name"]==$row['emp_dept'])
                      {
                        echo "Selected";
                      }?>><?php echo $rowrs["dept_name"] ?></option>
      <?php 
                } 
              }
                else {
              echo "0 results";
                }

                $conn->close();

      ?>
    </select>
 <?php } } ?>
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
