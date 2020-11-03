<html>
<head>
    <title>Class</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
		<link type="text/css" rel="stylesheet" href="../css/main.css">
		<link type="text/css" rel="stylesheet" href="../css/register2.css">
		<link type="text/css" rel="stylesheet" href="../css/class.css">
		<link rel="stylesheet" href="../css/view.css " type="text/css">
</head>
<body name = top>
<body>


<div id="nav1"></div>

        <div class="content">
			<h2>Class A</h2>
				<form class="search" action="Tcr_marks.php">
                <button type="submit">View Marks</button>
                </form>
                <form class="search" action="Tcr_csv_marks.php">
                <button type="submit">Upload Marks</button>
                </form>
				
		<div class = l-part>
					<label for="name"><b>Class Name</b></label>
					<input type="text" placeholder="12-A" name="id" required>                
        </div>

        <div class = r-part>
                <label for="name"><b>Class Teacher</b></label>
				<input type="text" placeholder="W.H.M.Gunathilaka" name="name" required> 
        </div>
                
		<div class="card">
			<br>
				<br>
                    <hr>
                        <table>
                            <tr>
                                <th>Admission number</th>
                                <th>Student name</th>
                                <th>View Profile</th>
                                </tr>
                            <tr>
                                <td>AAA</td>
                                <td>BBB</td>
                                <td><form class="search" action="Sprofile.php">
                                <button type="submit">View</button>
                                </form>
                            </td>
                                
                            </tr>
                            <tr>
                                <td>AAA</td>
                                <td>BBB</td>
                                <td><form class="search" action="SProfile.php">
                                <button type="submit" >View</button>
                                </form>
                            </td>
                            </tr>
                        </table>
                        </div>
		</div>
</body>
</php>