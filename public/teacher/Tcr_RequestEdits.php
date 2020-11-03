
<html>
<head>
  <title>Request Edits</title>
  <script src="../js/jquery-1.9.1.min.js"></script>
  <script src="../js/nav.js"></script>
  <link type="text/css" rel="stylesheet" href="../css/main.css">
  
  <link rel="stylesheet" href="../css/register2.css " type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body name = top>
<body>


<div id="nav"></div>	
    </div>

	<div class= content>
		<div class="container">
			  <form action="../php/register.php" method="POST">
				<h3 align="center">Request Edit Form</h3>
		<div class="container">
			<label for="fname">ID Number</label>
			<input type="text" id="iNumber" name="IDNumber" placeholder="Type the ID number here" required>
        
			<label for="fname">Name</label>
			<input type="text" id="name" name="Name" placeholder="Type the name here" required>
			
            <label for="Request"><b>Request</b></label>
            <textarea rows="5" cols="5" name="inquiery" placeholder="Enter the text" required></textarea>
			
			
    </div>
    
    
		<p>Upload a proof if available</p>
			<input type="file" id="myFile" name="filename" required></br>
				</br>
					</br>
						<button type="submit" class="registerbtn">SUBMIT</button>
    </form>
</div>
</div>
</body>
</html>