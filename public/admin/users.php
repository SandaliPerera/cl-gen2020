<?php
     session_start();

     if(!isset($_SESSION['userType']) && ($_SESSION['userType'] != 'admin')){
         $error = "Please Login!";
         header('Location: ../common/loginFile.php?error='.$error);
     }else if(($_SESSION['userType'] == 'admin')){

         $userID = $_SESSION['userID'];
?> 
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Users</title>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
<link rel="stylesheet" href="../css/view.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/users.css">


</head>
<body>
	<div id="nav2"></div>
		
		<div class="content">
		
		<h1>ADD USERS</h1>
			
		<div class="view">

			<table class="usertable">
        <tr>
          <td class="usertd">
		  <a href="register_user.php">
				  <div class="container user">

				<br>
				<img src = "../../images/user.png" width="110" height="100">
					<h2><b>Add User</b></h2>
				
					
				
				  </div>
				  </a>
      </td>
      <td class="usertd">
	  <a href="create_multiple_user.php">
				  <div class="container user">
	
				<br>
				<img src = "../../images/users.png" width="110" height="100">
					<h2><b>Add Multiple Users</b></h2>
				
				  </div>
				  </a>
  </td>
</table>
			
			</div>	
			
		</div>
		
</body>
		
</html>

	 <?php } ?>