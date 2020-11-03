<!DOCTYPE html>
<html>
<head>
<title>Marks</title>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
  <link type="text/css" rel="stylesheet" href="../css/main.css">
  
  <link rel="stylesheet" href="../css/register2.css " type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body name = top>
<body>


<div id="nav"></div>
  
	<div class= content>
		<div class="container">
			  <form action="../php/register.php" method="POST">
				<h3 align="center">Upload the marks File.</h3>
		<div class="container">
			<label for="fname"> Subject Name</label>
			<input type="text" id="SName" name="SubjectName" placeholder="Type the Subject Name.." required>
        
			<label for="fname"> Subject ID</label>
			<input type="text" id="SID" name="SubjectID" placeholder="Type the Subject ID.." required>
        
			<label for="fname">Teacher ID</label>
			<input type="text" id="TID" name="TeacherID" placeholder="Type Teacher ID.." required>
    </div>
    
    
		<p>Click on the "Choose File" button to upload a  CSV file:</p>
			<input type="file" id="myFile" name="filename" required></br>
				</br>
					</br>
						<button type="submit" class="registerbtn">SUBMIT</button>
    </form>
</div>
</div>
</body>
</html>