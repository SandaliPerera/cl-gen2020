
<?php
     session_start();

     if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
         $error = "Please Login!";
         header('Location: ../common/loginFile.php?error='.$error);
     }else if(($_SESSION['userType'] == 'admin')){

		 $userID = $_SESSION['userID'];
		 include ('../../src/view_users.php');
?> 

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Parents User List</title>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
<link rel="stylesheet" href="../css/view.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/users.css">
<link type="text/css" rel="stylesheet" href="../css/button.css">
</head>
<body>
	<div id="nav2"></div>
		
		<div class="content">
		<?php if (isset($_GET['error'])){?>
        <div id="error"><?php echo $_GET['error']; ?></div>
        <?php } ?>
		
		<h1>Parents User List</h1>

	
		<form class="search" action="register_stu.html">
		<input type="text" placeholder="Search.." name="search">
		<button type="submit">Search</button>
		</form>
		
		
		<br>
		<br>
		<br>
		

			
			  <div class="card">
			  <div class="count">
                     <?php
                     while($row = $parent_result->fetch_assoc()) {
                     echo "Parent Count: " . $row["COUNT(isActivated)"]. "<br>";
                     }?>
                  </div>
			
				
				<hr>
				<table>
					<tr>
						<th>User ID</th>
						<th>User name</th>
						<th>Status</th>
						<th>Update Profile</th>
						<th>Delete Profile</th>
						
					</tr>
					<?php
                        while($row=mysqli_fetch_assoc($parent_result2)){
                        ?>
                     <tr>
						<td><?php echo $row['userID'] ?></td>
						<td><?php echo $row['username'] ?></td>
						<td><?php if($row['isActivated'] == 1){
							echo "Activated";
						}else{
							echo "Not Activated";
						} ?></td>
						<td><a class='btn editbtn' href = SProfile.php > Update </a> </td>
						<td><a class='btn dltbtn' href = # > Delete </a> </td>
                     </tr>
                     <?php
                        }
                        ?>
				</table>
				</div>
				
		</div>
		
</body>
</html>

<?php } ?>