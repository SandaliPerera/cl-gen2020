<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Requested Character Certificates</title>
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
		
            <h1>Requested Character Certificates</h1>
            <form class="search" action="of_addStudentDetails.html">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Search</button>
            </form>
            
            
            <br>
            <br>
            <br>
            
    
                
                  <div class="card">
            
                    <br>
                    <br>
                    
                    <hr>
                    <table>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Student NIC</th>
                            <th>Student email</th>
                            <th>View Request</th>
                            <th>Generate Character Certificate</th>
                            <th>Reject Request</th>
                            <th>Send to Student</th>
                            
                            
                        </tr>
                        <tr>
                            <td>S1234</td>
                            <td>A.B.C. Student</td> 
                            <td>123456789V</td>
                            <td>Student@gmail.com</td>
                            <td><form><button class="btn editbtn" formaction="">View Request</button></form></td>
                            <td><form><button class="btn editbtn" onclick="myFunction()" type="submit" >Generate Character Certificate</button></form></td>
                            <td><button class="btn dltbtn" type="button">Reject</button></td>
                            <td>
                                <script>
                                    function myFunction() {
                                    var btn = document.createElement("BUTTON");
                                    btn.innerHTML = "Send";
                                document.body.appendChild(btn);
                                    }
                                    </script></td>
                            
                        </tr>
                    </table>
                    </div>
            
				
		</div>
		
</body>
</html>
