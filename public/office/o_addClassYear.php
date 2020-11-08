<!DOCTYPE html>
<html>
<head>

<?php
include_once '../../config/conn.php';
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Assign Classes</title>
<link rel="stylesheet" href="../css/view.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/users.css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/pop.js"></script>
<script src="../js/nav.js"></script>
</head>
<body>
		<div id="nav"></div>
		
		<div class="content">
		
		<h1>Add Year</h1>
		<form class="search" action="register_stu.html">
		<input type="text" placeholder="Search.." name="search">
		<button type="submit">Search</button>
		</form>

		<br>
		<br>
		<br>

			  <div class="card">
                <form>
					<button type="submit" formaction="">Add Year</button>
				</form>
				<br>
				<br>
			
				<hr>
				<table>
					<tr>
                        <th>Year </th>
						<th>View Grades</th>
						
					</tr>
                  
                     <tr>
                        <td>2020</td>
                        <td><form><button class="btn viewbtn" type="submit" formaction="o_addClassGrades.php">View Grades</button></form></td>
						
					</tr>
              
                </table>
				</div>
				
		</div>
		
</body>
</html>
