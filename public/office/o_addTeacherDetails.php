
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="../css/pop.css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/register.css">
</head>

<body>
<div id="nav"></div>
    

    <div class="content">
        <div class="container">
            <form action="../php/register.php" method="POST">
                <h1>Add Teacher Details</h1>
                <hr>

				<label for="name"><b>ID</b></label>
				<input type="text" placeholder="Enter ID" name="id" required>
				
				<label for="name"><b>Name</b></label>
				<input type="text" placeholder="Enter Name" name="name" required>

				<label for="nic"><b>NIC</b></label>
				<input type="text" placeholder="Enter NIC" name="nic" required>

				<label for="email"><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>

				<label for="dob"><b>Date of Birth</b></label>
				<input type="text" placeholder="Enter Date of Birth" name="dob" required>

				<label for="position"><b>Position</b></label>
				<input type="text" placeholder="Enter Position" name="position" required>

				<label><b>Gender:</b></label>
			 	<label> <input type="radio" name="gender" value="male"> Male</label>
			 	<label> <input type="radio" name="gender" value="female"> Female</label>
			  	<label><input type="radio" name="gender" value="other"> Other</label>

				<br></br>
				<br></br>
				<br>
                
                <label for="stuAddress"><b>Residential Addresss</b></label>
                <input type="text" placeholder="Enter current address" name="address" required>

                <label for="stuContactNo"><b>Contact Number</b></label>
                <input type="text" placeholder="Enter Contact Number" name="stuContactNo">

				<label for="psw"><b>Change Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
                
                <label for="repsw"><b>Re-Enter Password</b></label>
                <input type="password" placeholder="Re-Enter Password" name="re-enter password" required>
                
                <hr>
			   
				<button type="submit" class="registerbtn">Save</button>

            </form>

        </div>

    </div>

		
</body>
</html>
