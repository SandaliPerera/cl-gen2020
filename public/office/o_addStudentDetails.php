<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Student Details</title>
<link rel="stylesheet" href="../css/register.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../css/main.css">
<script src="../js/jquery-1.9.1.min.js"></script>
        <script src="../js/nav.js"></script>
</head>
<body>
<div id="nav"></div>

    <div class="content">
        <div class="container">
            <form action="../../src/o_addStudentDetails.php" method="POST">
                <h1>Add Student Details</h1>
                <hr>

				<label for="stuID"><b>ID</b></label>
				<input type="text" placeholder="Enter ID" value = "<?php if (isset ($_GET['userID'])){echo $_GET['userID'];}?>" name="stuID" required>
				
				<label for="stufName"><b>First Name</b></label>
				<input type="text" placeholder="Enter First Name" name="stufName" required>

                <label for="stumName"><b>Middle Name</b></label>
				<input type="text" placeholder="Enter Middle Name" name="stumName" required>

                <label for="stulName"><b>Last Name</b></label>
				<input type="text" placeholder="Enter Last Name" name="stulName" required>

                <label for="stuDob"><b>Date of Birth</b></label> <br>
                <input type="date" placeholder="Enter Date of Birth" name="stuDob" required>
                
                <br>

				<label for="stuAdStreet"><b>Residential Addresss - Street</b></label>
                <input type="text" placeholder="Enter Number and street" name="stuAdStreet" required>
                
                <label for="stuAdCity"><b>Residential Addresss - City</b></label>
                <input type="text" placeholder="Enter City" name="stuAdCity" required>
                
                <label for="stuAdDistrict"><b>Residential Addresss - District</b></label>
                <input type="text" placeholder="Enter District" name="stuAdDistrict" required>
                
                <label for="stuReligion"><b>Religion</b></label>
                <input type="text" placeholder="Enter current address" name="stuReligion" required>
                
                <label for="stuEnteredDate"><b>Date Entered</b></label>
				<input type="date" placeholder="Enter Date Entered" name="stuEnteredDate" required>

				<label for="stuEnteredGrade"><b>Entered Grade</b></label>
				<input type="text" placeholder="Enter Grade Entered" name="stuEnteredGrade" required>
                
                <label for="stuEmail"><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="stuEmail" required>

				<label for="stuContactNo"><b>Contact Number</b></label>
				<input type="text" placeholder="Enter Contact Number" name="stuContactNo" required>

				<label><b>Gender:</b></label>
			    <label> <input type="radio" name="stuGender" value="male"> Male</label>
			    <label> <input type="radio" name="stuGender" value="female"> Female</label>
			    <label><input type="radio" name="stuGender" value="other"> Other</label>

				<br>
				</br><br>
                </br>
                
                <hr>
			   
				<button type="submit" class="registerbtn" name="regbtn" >Save</button>

            </form>


        </div>

    </div>

		
</body>
</html>
