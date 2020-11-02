

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Students User List</title>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
<link rel="stylesheet" href="../css/view.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/users.css">
<link type="text/css" rel="stylesheet" href="../css/tabs.css">
</head>
<body>

<?php

				require_once '../../config/conn.php';

				$sql1 = "SELECT * FROM user WHERE isActivated = 0";
				$sql2 = "SELECT * FROM user WHERE isActivated = 1";

				$res1= mysqli_query($conn,$sql1);
				$res2= mysqli_query($conn,$sql2);

				if($res1){
				//echo "Sucessfull";
				}
				else{
				echo"failed";	
				}

?>
	<div id="nav"></div>
		
		<div class="content">
		<div class="view">
		<h1> User List</h1>
		<hr>
		<br>
		<form class="search" action="register_stu.html">
		<input type="text" placeholder="Search.." name="search">
		<button type="submit">Search</button>
		</form>
		
		
		<br>
		<div class="btn-box">

			
			<button id="button2" onclick="activated()">Added Users</button>
			<button id="button1" onclick="notActivated()">Activated Users</button>
		</div>
		
		<br>
			<br>
		<div id="page1" class="page">
			
			
			  <div class="card">
			  <form>
					<button type="submit" formaction="register_user.php">Add User</button>
				</form>
				<br>
				<br>
                
                
                <hr>
                
                <table>
                <tr>
                    <th>User ID</th>
                    <th>UserName</th>
                    <th>User Type</th>
                    
                </tr>
                <?php
		while($row=mysqli_fetch_assoc($res1)){
			?>
                <tr>
                    <td><?php echo $row['userID'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['userType'] ?></td>
                
                </tr>
                <?php
			}
		?>
				</table>
				</div>
		</div>
		<div id="page2" class="page">
			
			  <div class="card">
			
				<br>
				<br>
                
                
                <hr>
                
                <table>
                <tr>
                    <th>User ID</th>
                    <th>UserName</th>
                    <th>User Type</th>
                    
                </tr>
                <?php
		while($row=mysqli_fetch_assoc($res2)){
			?>
                <tr>
                    <td><?php echo $row['userID'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['userType'] ?></td>
                
                </tr>
                <?php
			}
		?>
				</table>
				</div>
		</div>
				
		</div>
		</div>

		<script>
		var page1 = document.getElementById("page1");
		var page2 = document.getElementById("page2");
		var button1 = document.getElementById("button1");
		var button2 = document.getElementById("button2");
		
		let url = window.location.href;
		if(url == "http://localhost/CL-GEN/public/admin/userlist.php"){
			page1.style.display = "block";
			page2.style.display = "none";
			button1.style.color= "#008080";
			button2.style.color= "#000";
			
		}else if(url == "http://localhost/CL-GEN/public/admin/userlist.php?loggedin"){
			page1.style.display = "block";
			page2.style.display = "none";
			button1.style.color= "#008080";
			button2.style.color= "#000";
		}

		function activated(){
			page1.style.display = "block";
			page2.style.display = "none";
			button1.style.color= "#008080";
			button2.style.color= "#000";
			
		}

		function notActivated(){
			page1.style.display = "none";
			page2.style.display = "block";
			button1.style.color= "#000";
			button2.style.color= "#008080";
		}
	</script>
		
</body>
</html>
