
<?php
    session_start();

    if(!isset($_SESSION['userType'])){
        $error = "Please Login!";
        header('Location: ../common/loginFile.php?error='.$error);
    }elseif($_SESSION['userType'] == 'parent'){

        $userID = $_SESSION['userID'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Inquieries 1</title>
  	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/nav.js"></script>
  	<link type="text/css" rel="stylesheet" href="../css/main.css">
  	<link type="text/css" rel="stylesheet" href="../css/register.css">
	<link type="text/css" rel="stylesheet" href="../css/register2.css">
	<link type="text/css" rel="stylesheet" href="../css/view.css">
	<link type="text/css" rel="stylesheet" href="../css/register.css">
	<link type="text/css" rel="stylesheet" href="../css/messages.css">
	
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body name = top>
<body>


<div id="nav"></div>

<div class= content>
	
		<h1>INQUIERY FORM</h1>
			<div class="container">
				<hr>
				<form action="../../src/add_inquiry.php" method="POST">
					<label for="fname"><b> Inquiry Title</b></label>
					<input type="text" id="iID" name="InquiryID" placeholder="Type Inquiry ID.." required>
	
					<label for="fname"><b>Reciever's ID</b></label>
					<input type="text" id="iqID" name="InquierID" placeholder="Type Inquier ID.." required>

					<label for="subject"><b> Message </b></label>
					<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

					<button type="submit" class="registerbtn" id="add_inq" name="add_news">Submit</button>
					<hr>
					
					
	
				</form>
			</div>

			<form class="search" action="ReplyInquiery.php">
                                    <button type="submit" align="center">Reply Inquieries</button>
	</div>

</body>
</html>

<?php } ?>