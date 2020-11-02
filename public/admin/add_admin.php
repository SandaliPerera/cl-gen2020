<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register Office Staff</title>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>

<link type="text/css" rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/register.css " type="text/css">
<script  src="../js/user.js"></script>

</head>
<body>
	<div id="nav"></div>
		
		<div class="content">
	
			  <div class="container">

			  <h1>Register</h1>
				<hr>

				<form action= "../../src/add_user.php" method="POST">

		
				<input type="hidden" id="userType"  name="userType" value="admin" required >
		
				<label for="userid"><b>User ID</b></label>
                <input type="text" id="userid"  name="userid" required >
                
                <label for="email"><b>Email</b></label>
				<input type="text" id="email"  name="email" required >
				
				<label for="username"><b>Username</b></label>
				<input type="text"  id="username" name="username" required>

				<label for="pwd"><b>Password</b></label>
				<input type="text"  name="pwd" id="pwd" required>

				<hr>
			   
				<button type="submit" class="registerbtn" name="addUser" id="addUser" >Create Account</button>
			</form>
			  <hr>
			  <div class="cancel">
				<h2 align="center" ><a href="users.php" >Cancel</a></h2>
			</div>
			  <hr>
			</div>
		</div>

</body>

</html>
