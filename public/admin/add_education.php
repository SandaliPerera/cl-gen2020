<?php
     session_start();

     if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
         $error = "Please Login!";
         header('Location: ../common/loginFile.php?error='.$error);
	 }else if($_SESSION['userType'] != 'admin'){
			header('Location: ../common/error.html');
		}
		else{

         $userID = $_SESSION['userID'];
?> 

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Education</title>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
<link rel="stylesheet" href="../css/view.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/cat_form.css">
<link type="text/css" rel="stylesheet" href="../css/buttons.css">
</head>
<body>
	<div id="nav2"></div>
		
		<div class="content">
		
			
			
		
			<div class="card">
  
				<div class="container">
					<h2><b>education A</b></h2>
					
					<form action="" method="POST">
					
						<hr>

						<label for="name"><b>Name</b></label>
						<input type="text" name="id" required>
						
						<label for="name"><b>Category ID</b></label>
						<input type="text"  name="name" required>

						<label for="TID"><b>Teacher in charge ID</b></label>
						<input type="text"  name="TID" required>
						<hr>
				
						<button type="submit" class="registerbtn">Add</button>
					</form>
					<div class="cancel">
				<h2 align="center" ><a href="educational.php" >Cancel</a></h2>
			</div>
				</div>
				
				
			</div>
		</div>
		
</body>
</html>


	 <?php } ?>