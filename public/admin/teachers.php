<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Teachers User List</title>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
<link rel="stylesheet" href="../css/view.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/users.css">
</head>
<body>
	<div id="nav"></div>
		
		<div class="content">
		
		<h1>Teachers User List</h1>
		<form class="search" action="register_stu.html">
		<input type="text" placeholder="Search.." name="search">
		<button type="submit">Search</button>
		</form>
		
		
		<br>
		<br>
		<br>
		

			
			  <div class="card">
			  <form>
					<button type="submit" formaction="register_user.php">Add Teacher</button>
				</form>
				<br>
				<br>
				
				<hr>
				<table>
					<tr>
						<th>Teacher number</th>
						<th>Student name</th>
						<th>Click to edit</th>
						
					</tr>
					<tr>
						<td>AAA</td>
						<td>BBB</td>
						<td><a class='btn editbtn' href = Tcr_profile.php > update </a> </td>
						
					</tr>
				</table>
				</div>
				
		</div>
		
</body>
</html>
