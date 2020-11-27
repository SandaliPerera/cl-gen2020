
<?php
    session_start();

    if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
        $error = "Please Login!";
        header('Location: ../common/loginFile.php?error='.$error);
    }elseif($_SESSION['userType'] == 'parent'){

		$userID = $_SESSION['userID'];
		

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inquieries</title>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
<link rel="stylesheet" href="../css/view.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../css/main_stu.css">
<link type="text/css" rel="stylesheet" href="../css/inquiry.css">
</head>
<body>
<div id="nav"></div>
		
		<div class="content">
		
			<h1>Inquiery List</h1>
			
		
			<div class="card">
				<form>
					<button type="submit" formaction="AddInquiery.php">Add Inquiery</button>
				</form>
				<br>
				<br>
			</div>
			  <div class="card stu">
				<hr>
				<table>
					<tr>
						<th>Inquiry</th>
						<th>Sender</th>
						<th>Date</th>
						<th>Reply</th>
						
					</tr>
					<tr>
						<td>ABC</td>
						<td>Perera</td>
						<td>02/03/2020</td>
						<td>
                         <button type="submit" class="search"><a href=AddInquiery.php>Reply</a></button>

						</td>
					</tr>
					<tr>
						<td>ABC</td>
						<td>Perera</td>
						<td>02/03/2020</td>
						<td>
                         <button type="submit" class="search"><a href=AddInquiery.php>Reply</a></button>

						</td>
					</tr>
					<tr>
						<td>ABC</td>
						<td>Perera</td>
						<td>02/03/2020</td>
						<td>
                         <button type="submit" class="search"><a href=AddInquiery.php>Reply</a></button>

						</td>
					</tr>
				</table>
				</div>
				
				
		</div>
</body>
</html>

	<?php } ?>