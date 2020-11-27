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

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sports</title>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
<link rel="stylesheet" href="../css/view.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/cat_form.css">
</head>
<body>
	<div id="nav"></div>
		
		<div class="content">
		
			
			
		
			<div class="card">
  
				<div class="container">
					<h2><b>SPORTS</b></h2>
					
					<form action="../../src/A_addsports.php" method="POST">
					
						<hr>
						<!-- <label for="name"><b>Sport ID</b></label>
						<input type="text" name="Spid" required> -->
						
						<label for="name"><b>Sport</b></label>
						<input type="text"  name="Sname" required>

						<label for="TID"><b>Teacher in charge ID</b></label>
						<input type="text"  name="TID" required>
						
						<label for="TID"><b>Number of Students</b></label>
						<input type="text"  name="NOS" required>
						
						<hr>
					
						<button type="submit" class="registerbtn" name="regbtn">Add</button>
					</form>
					<div class="cancel">
				<h2 align="center" ><a href="sports.php" >Cancel</a></h2>
			</div>
				</div>
				
			</div>
		</div>
		
</body>
</html>

	 <?php } ?>