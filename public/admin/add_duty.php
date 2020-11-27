<?php
     session_start();

     if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
         $error = "Please Login!";
         header('Location: ../common/loginFile.php?error='.$error);
     }else if(($_SESSION['userType'] == 'admin')){

         $userID = $_SESSION['userID'];
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Add Officer Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="../css/pop.css">
	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/pop.js"></script>
	<script src="../js/nav.js"></script>
	<link type="text/css" rel="stylesheet" href="../css/main.css">
	<link type="text/css" rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div id="nav2"></div>
    
    
    <div class="content">
        <div class="container">
            <form action="../../src/add_duty.php" method="POST">
                <h1>Add Duties</h1>
                <hr>

					<label for="dutyID"><b>ID</b></label>
					<input type="text" placeholder="Enter ID" name="dutyID" required>
					
					<label for="duty"><b>Name</b></label>
					<input type="text" placeholder="Enter Name" name="duty" required>

					
					<hr>
				
					<button type="submit" class="registerbtn" name="regbtn">Save</button>

                </form>
                <div class="cancel">
				<h2  ><a href="duty.php" >Cancel</a></h2>
			</div>

        	</div>

    	</div>

		
	</body>
</html>

	 <?php } ?>