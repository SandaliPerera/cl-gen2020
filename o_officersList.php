<?php
    session_start();

    if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
        $error = "Please Login!";
        header('Location: ../common/loginFile.php?error='.$error);
    }
    else if($_SESSION['userType'] != 'officer'){
        header('Location: ../common/error.html');
    }
    else{      
      $dutyID = array();
      $dutyID = $_SESSION['dutyID'];

      if (!in_array("d1", $dutyID)) {
         header('Location: o_dashboard.php');
        }
	?>

<!DOCTYPE html>
<head>
   <?php
      include_once '../../config/conn.php';
      ?>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Grade Scholarship Results</title>
   <link rel="stylesheet" href="../css/view.css " type="text/css">
   <link type="text/css" rel="stylesheet" href="../css/main.css">
   <link type="text/css" rel="stylesheet" href="../css/tabs.css">
   <link type="text/css" rel="stylesheet" href="../css/users.css">
   <script src="../js/jquery-1.9.1.min.js"></script>
   <script src="../js/pop.js"></script>
   <script src="../js/nav.js"></script>
</head>
   <body>
      <div id="officeNav"></div>
      <div class="content">
      <h1>Officers List</h1>
      <?php
            //echo "test";
            
            
            $sql = "SELECT COUNT(isActivated) FROM user where userType='officer' AND isActivated=0"; 
            $sql3 = "SELECT COUNT(isActivated) FROM user where userType='officer' AND isActivated=1";
            $sql1 = "SELECT * FROM user where isActivated=0 and userType='officer' ";
            $sql2 = "SELECT * FROM user where isActivated=1 and userType='officer' ";
            
            $result = $conn->query($sql);
            $result3 = $conn->query($sql3);
            $result1 = $conn->query($sql1);
            $result2 = $conn->query($sql2);
            
            
      ?>
            
              <div class="btn-box">
               <button id="button2" onclick="activated()">Added Users</button>
               <button id="button1" onclick="notActivated()">Activated Users</button>
            </div>

      <br>
      <br>
      <div id="page1" class="page">
               <div class ="card">
                  <div class="count">
                     <?php
                     while($row = $result->fetch_assoc()) {
                     echo "Officer Count: " . $row["COUNT(isActivated)"]. "<br>";
                     }?>
                  </div>
                 <hr>
                  <table>
                     <tr>
                        <th>User ID</th>
                        <th>UserName</th>
                        <th>User Type</th>
                        <th>Add Details</th>
                     </tr>
                     <?php
                        while($row=mysqli_fetch_assoc($result1)){
                        ?>
                     <tr>
                        <td><?php echo $row['userID'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['userType'] ?></td>
                        <?php echo "<td><a class='btn editbtn' href = o_addOfficerDetails.php?userID=".$row['userID']." > Add </a> </td>"?>
                     </tr>
                     <?php
                        }
                        ?>
                  </table>
               </div>
            </div>
            <div id="page2" class="page">
               <div class ="card">
               <div class="count">
                     <?php
                     while($row = $result3->fetch_assoc()) {
                     echo "Activated Officer Count: " . $row["COUNT(isActivated)"]. "<br>";
                     }?>
                  </div>
                 <hr>
                  <table>
                     <tr>
                        <th>User ID</th>
                        <th>UserName</th>
                        <th>User Type</th>
                        <th>Edit Details</th>
                     </tr>
                     <?php
                        while($row=mysqli_fetch_assoc($result2)){
                        ?>
                     <tr>
                        <td><?php echo $row['userID'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['userType'] ?></td>
                        <?php echo "<td><a class='btn editbtn' href = officerProfile.php?userID=".$row['userID']." > update </a> </td>"?>
                     </tr>
                     <?php
                        }
                        ?>
                  </table>
               </div>
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
   </body>
</html>

<?php } ?>
  