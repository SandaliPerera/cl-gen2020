

<?php
     session_start();

     if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
         $error = "Please Login!";
         header('Location: ../common/loginFile.php?error='.$error);
     }else if(($_SESSION['userType'] == 'admin')){

         $userID = $_SESSION['userID'];
?> 
<!DOCTYPE html>
<head>
   <?php
      include_once '../../config/conn.php';
      ?>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Duty List</title>
   <link rel="stylesheet" href="../css/view.css " type="text/css">
   <link type="text/css" rel="stylesheet" href="../css/main.css">
   <link type="text/css" rel="stylesheet" href="../css/tabs.css">
   <link type="text/css" rel="stylesheet" href="../css/users.css">
   <link type="text/css" rel="stylesheet" href="../css/buttons.css">
   <link type="text/css" rel="stylesheet" href="../css/messages.css">
   <script src="../js/jquery-1.9.1.min.js"></script>
   <script src="../js/pop.js"></script>
   <script src="../js/nav.js"></script>
</head>
<body>
    <div id="nav2"></div>
    
      <div class="content">
     
      <h1>Duty List</h1>
      <?php if (isset($_GET['error'])){?>
    <div id="error"><?php echo $_GET['error']; ?></div>
    <?php } ?>
      <?php
            //echo "test";
            
            $sql = "SELECT * FROM duty";
            $sql1 = "SELECT * FROM officerduties";
            
            $result = $conn->query($sql);
            $result1 = $conn->query($sql1);
            
            
      ?>
            
              <div class="btn-box">
               <button id="button2" onclick="duties()">Duties</button>
               <button id="button1" onclick="Assigned()">Assigned Officers</button>
            </div>

      <br>
      <br>
      <div id="page1" class="page">
        
               <div class ="card">
               <form>
			<button class="editbtn" type="submit" formaction="add_duty.php">Add Duty</button>
		</form>
                 <hr>
                  <table>
                     <tr>
                        <th>Duty ID</th>
                        <th>Duty</th>
                     </tr>
                     <?php
                        while($row=mysqli_fetch_assoc($result)){
                        ?>
                     <tr>
                        <td><?php echo $row['dutyID'] ?></td>
                        <td><?php echo $row['duty'] ?></td>
                     </tr>
                     <?php
                        }
                        ?>
                  </table>
               </div>
            </div>
            <div id="page2" class="page">
               <div class ="card">
                 <hr>
                  <table>
                     <tr>
                        <th>User ID</th>
                        <th>Duty Assigned</th>
                        <th>Edit </th>
                     </tr>
                     <?php
                        while($row=mysqli_fetch_assoc($result1)){
                        ?>
                     <tr>
                        <td><?php echo $row['officerID'] ?></td>
                        <td><?php echo $row['dutyID'] ?></td>
                        <?php echo "<td><a class='btn editbtn' href = edit_duty.php?userID=".$row['officerID']." > update </a> </td>"?>
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
         if(url == "http://localhost/CL-GEN/public/admin/duty.php"){
         	page1.style.display = "block";
         	page2.style.display = "none";
         	button1.style.color= "#008080";
         	button2.style.color= "#000";
         	
         }
         else if(url == "http://localhost/CL-GEN/public/admin/duty.php?error=Error%20in%20entering%20data"){
         	page1.style.display = "block";
         	page2.style.display = "none";
         	button1.style.color= "#008080";
         	button2.style.color= "#000";
         	
         }else if(url == "http://localhost/CL-GEN/public/admin/duty.php?error=Duty%20already%20Assigned"){
         	page1.style.display = "block";
         	page2.style.display = "none";
         	button1.style.color= "#008080";
         	button2.style.color= "#000";
         	
         }
         
         function duties(){
         	page1.style.display = "block";
         	page2.style.display = "none";
         	button1.style.color= "#008080";
         	button2.style.color= "#000";
         	
         }
         
         function Assigned(){
         	page1.style.display = "none";
         	page2.style.display = "block";
         	button1.style.color= "#000";
         	button2.style.color= "#008080";
         }
      </script>
   </body>
</html>
  
      <?php } ?>