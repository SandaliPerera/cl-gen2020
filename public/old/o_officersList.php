<!DOCTYPE html>
<html>
    <head>
        <?php
       require_once '../../config/conn.php';
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../css/pop.css">
        <script src="../js/jquery-1.9.1.min.js"></script>
        <script src="../js/nav.js"></script>
        <link type="text/css" rel="stylesheet" href="../css/main.css">
        <link type="text/css" rel="stylesheet" href="../css/register.css">
        <link rel="stylesheet" href="../css/dashboard.css" type="text/css">
        <link type="text/css" rel="stylesheet" href="../css/users.css">
        <link type="text/css" rel="stylesheet" href="../css/tabs.css">
    </head>

    <body>
    <div id="nav"></div>

        
        <div class="content">
            

                <?php
                //echo "test";
               
                
$sql = "SELECT COUNT(isActivated) FROM user where isActivated=0"; 
$sql_student = "SELECT COUNT(isActivated) FROM user where isActivated=0 and userType='student' ";
$sql_teacher = "SELECT COUNT(isActivated) FROM user where isActivated=0 and userType='teacher' ";
$sql_parent = "SELECT COUNT(isActivated) FROM user where isActivated=0 and userType='parent' ";

$result = $conn->query($sql);
$result_student = $conn->query($sql_student);
$result_teacher = $conn->query($sql_teacher);
$result_parent = $conn->query($sql_parent);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "All Users Count: " . $row["COUNT(isActivated)"]. "<br>";
	
  }

while($row = $result_student->fetch_assoc()) {
    echo "Student Count: " . $row["COUNT(isActivated)"]. "<br>";
     
  }

}else {
    echo "0 results";
  }

  $sql1 = "SELECT * FROM user WHERE isActivated = 0  AND userType='student'";
  $res1= mysqli_query($conn,$sql1);

  ?>
  <table>
  <tr>
      <th>User ID</th>
      <th>UserName</th>
      <th>User Type</th>
      <th>Edit Details</th>
      
  </tr>
  <?php
while($row=mysqli_fetch_assoc($res1)){
?>
  <tr>
      <td><?php echo $row['userID'] ?></td>
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['userType'] ?></td>
      <td><button type="submit" align="center">Edit</button></td>
  </tr>
  <?php
}
?>
  </table>

<?php
while($row = $result_teacher->fetch_assoc()) {
    echo "Teacher Count: " . $row["COUNT(isActivated)"]. "<br>";
    

   
  }

  $sql1 = "SELECT * FROM user WHERE isActivated = 0  AND userType='teacher'";
  $res1= mysqli_query($conn,$sql1);

  ?>

  <br>
  <table>
  <tr>
      <th>User ID</th>
      <th>UserName</th>
      <th>User Type</th>
      <th>Edit Details</th>
      
  </tr>
  <?php
while($row=mysqli_fetch_assoc($res1)){
?>
  <tr>
      <td><?php echo $row['userID'] ?></td>
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['userType'] ?></td>
      <td><button type="submit" align="center">Edit</button></td>
  </tr>
  <?php
}
?>
  </table>


<?php

  while($row = $result_parent->fetch_assoc()) {
    echo "Parent Count: " . $row["COUNT(isActivated)"]. "<br>";
  
  }

$conn->close();


                ?>

                
     
        </div>
    </body>
</html>