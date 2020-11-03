<!DOCTYPE html>
<html>
<<<<<<< HEAD
    <head><title>Office List</title>
        <?php
        require_once '../../config/conn.php';
=======
    <head>
        <?php
       require_once '../../config/conn.php';
>>>>>>> a6df9a5c933a0a427d1e001f0a1acff0eeb20be8
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../css/pop.css">
        <script src="../js/jquery-1.9.1.min.js"></script>
        <script src="../js/nav.js"></script>
        <link type="text/css" rel="stylesheet" href="../css/main.css">
<<<<<<< HEAD
        <link type="text/css" rel="stylesheet" href="../css/tabs.css">
        <link type="text/css" rel="stylesheet" href="../css/view.css">
        <link type="text/css" rel="stylesheet" href="../css/users.css">
    
    </head>


    <body>
    <div id="nav"></div>

    
        <div class="content">
        
       <h1>Officers List</h1>
       <hr>
=======
        <link type="text/css" rel="stylesheet" href="../css/register.css">
        <link rel="stylesheet" href="../css/dashboard.css" type="text/css">
        <link type="text/css" rel="stylesheet" href="../css/users.css">
        <link type="text/css" rel="stylesheet" href="../css/tabs.css">
    </head>

    <body>
    <div id="nav"></div>

        
        <div class="content">
            
>>>>>>> a6df9a5c933a0a427d1e001f0a1acff0eeb20be8

                <?php
                //echo "test";
               
                
<<<<<<< HEAD
        $sql = "SELECT COUNT(isActivated) FROM user where userType='office'"; 
        $sql1 = "SELECT * FROM user where isActivated=0 and userType='office' ";
        $sql2 = "SELECT * FROM user where isActivated=1 and userType='office' ";

        $result = $conn->query($sql);
        $result1 = $conn->query($sql1);
        $result2 = $conn->query($sql2);

        if ($result->num_rows > 0) {
          // output data of each row
       
          while($row = $result->fetch_assoc()) {
            echo "Office Count: " . $row["COUNT(isActivated)"]. "<br>";
            
          }

        }else {
            echo "0 results";
          }


          echo "<br>"

          ?>
          
        <div class="view">
        <div class="btn-box">

			
<button id="button2" onclick="activated()">Added Users</button>
<button id="button1" onclick="notActivated()">Activated Users</button>
</div>

  <br>

  <div id="page1" class="page">
  <div class ="card">
=======
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
>>>>>>> a6df9a5c933a0a427d1e001f0a1acff0eeb20be8
  <table>
  <tr>
      <th>User ID</th>
      <th>UserName</th>
      <th>User Type</th>
      <th>Edit Details</th>
      
  </tr>
  <?php
<<<<<<< HEAD
while($row=mysqli_fetch_assoc($result1)){
=======
while($row=mysqli_fetch_assoc($res1)){
>>>>>>> a6df9a5c933a0a427d1e001f0a1acff0eeb20be8
?>
  <tr>
      <td><?php echo $row['userID'] ?></td>
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['userType'] ?></td>
<<<<<<< HEAD
      <?php echo "<td><a class='btn editbtn' href = o_addOfficerDetails.php?userID=".$row['userID']." > update </a> </td>"?>
=======
      <td><button type="submit" align="center">Edit</button></td>
>>>>>>> a6df9a5c933a0a427d1e001f0a1acff0eeb20be8
  </tr>
  <?php
}
?>
  </table>
<<<<<<< HEAD
</div>
</div>
<div id="page2" class="page">
			
<div class ="card">
=======

<?php
while($row = $result_teacher->fetch_assoc()) {
    echo "Teacher Count: " . $row["COUNT(isActivated)"]. "<br>";
    

   
  }

  $sql1 = "SELECT * FROM user WHERE isActivated = 0  AND userType='teacher'";
  $res1= mysqli_query($conn,$sql1);

  ?>

  <br>
>>>>>>> a6df9a5c933a0a427d1e001f0a1acff0eeb20be8
  <table>
  <tr>
      <th>User ID</th>
      <th>UserName</th>
      <th>User Type</th>
      <th>Edit Details</th>
      
  </tr>
  <?php
<<<<<<< HEAD
while($row=mysqli_fetch_assoc($result2)){
=======
while($row=mysqli_fetch_assoc($res1)){
>>>>>>> a6df9a5c933a0a427d1e001f0a1acff0eeb20be8
?>
  <tr>
      <td><?php echo $row['userID'] ?></td>
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['userType'] ?></td>
<<<<<<< HEAD
      <?php echo "<td><a class='btn editbtn' href = o_addOfficerDetails.php?userID=".$row['userID']." > update </a> </td>"?>
=======
      <td><button type="submit" align="center">Edit</button></td>
>>>>>>> a6df9a5c933a0a427d1e001f0a1acff0eeb20be8
  </tr>
  <?php
}
?>
  </table>
<<<<<<< HEAD
</div>
				</table>
				</div>
                
     
        </div>
</div>
        <script>
		var page1 = document.getElementById("page1");
		var page2 = document.getElementById("page2");
		var button1 = document.getElementById("button1");
		var button2 = document.getElementById("button2");
		
		let url = window.location.href;
		if(url == "http://localhost/CL-GEN/public/office/o_officersList.php"){
			page1.style.display = "block";
			page2.style.display = "none";
			button1.style.color= "#008080";
			button2.style.color= "#000";
			
		}else if(url == "http://localhost/CL-GEN/public/admin/userlist.php?loggedin"){
			page1.style.display = "block";
			page2.style.display = "none";
			button1.style.color= "#008080";
			button2.style.color= "#000";
		}

		function activated(){
			page1.style.display = "block";
			page2.style.display = "none";
			button1.style.color= "#008080";
			button2.style.color= "#000";
			
		}

		function notActivated(){
			page1.style.display = "none";
			page2.style.display = "block";
			button1.style.color= "#000";
			button2.style.color= "#008080";
		}
	</script>
=======


<?php

  while($row = $result_parent->fetch_assoc()) {
    echo "Parent Count: " . $row["COUNT(isActivated)"]. "<br>";
  
  }

$conn->close();


                ?>

                
     
        </div>
>>>>>>> a6df9a5c933a0a427d1e001f0a1acff0eeb20be8
    </body>
</html>