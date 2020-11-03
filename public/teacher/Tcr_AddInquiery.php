<!DOCTYPE html>
<html>
<head>
  <title>Inquieries 1</title>
  	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/nav.js"></script>
  	<link type="text/css" rel="stylesheet" href="../css/main.css">
  	
	<link type="text/css" rel="stylesheet" href="../css/register2.css">
  
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body name = top>
<body>


<div id="nav"></div>

<div class= content>
	
		<h3>INQUIERY FORM</h3>
			<div class="container">
				<form action="/action_page.php" method="POST">
					<label for="fname"> Inquiry ID</label>
					<input type="text" id="iID" name="InquiryID" placeholder="Type Inquiry ID.." required>
	
					<label for="fname"> Inquier ID</label>
					<input type="text" id="iqID" name="InquierID" placeholder="Type Inquier ID.." required>

					<label for="subject">Subject</label>
					<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

					<input type="Submit" value="Send">
					<hr>
					
					
	
				</form>
			</div>

			<form class="search" action="Tcr_ReplyInquiery.php">
                                    <button type="submit" align="center">Reply Inquieries</button>
	</div>

</body>
</html>