

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>News list</title>
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

				$sql = "SELECT * FROM newsfeed";

				$res= mysqli_query($conn,$sql);

				if($res){
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

		
		<br>
			<br>
			
			
			  <div class="card">
			  <form>
					<button type="submit" formaction="register_user.php">Add User</button>
				</form>
				<br>
				<br>
                
                
                <hr>
                
                <table>
                <tr>
                    <th>News ID</th>
                    <th>News Title</th>
                    <th>News</th>
                    
                </tr>
                <?php
		while($row=mysqli_fetch_assoc($res)){
			?>
                <tr>
                    <td><?php echo $row['newsID'] ?></td>
                    <td><?php echo $row['title'] ?></td>
					<td><?php echo $row['news'] ?></td>
					<?php echo "<td><a href = update_newsfeed.php?newsID='".$row['newsID']."' > Update </a> </td>"?>
					<?php echo "<td><a href = ../../src/delete_news.php?newsID='".$row['newsID']."' > Delete </a> </td>"?>
                
                </tr>
                <?php
			}
		?>
				</table>
				</div>
	

				
		</div>
		</div>

	
</body>
</html>
