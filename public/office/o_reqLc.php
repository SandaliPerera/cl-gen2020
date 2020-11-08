
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>A/L Results - 2016</title>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
<link rel="stylesheet" href="../css/register.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/tabs.css">
<link type="text/css" rel="stylesheet" href="../css/view.css">
<link type="text/css" rel="stylesheet" href="../css/pop.css">

</head>
<body name = top>
<body>


<div id="nav"></div>


		<div class="content">
		

	<div class="feed">
		<div class="btn-box">

			
			<button id="button1" onclick="REQUESTS()">Requests</button>
			<button id="button2" onclick="ISSUES()">Issues</button>
			<button id="button3" onclick="ACCEPTED()">Accepted</button>
		</div>

		
        <!-- General Page 1 -->
		<div id="page1" class="page">
			<div class="container">

            <h3>Requested Leaving Certificates</h3>
				<hr>
				<form class="search" action="o_addStudentDetails.html">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Search</button>
                    <br>
                    <br>
                 <div class="card">
                 <table>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Student NIC</th>
                            <th>Student email</th>
                            <th>View Request</th>
                            <th>Generate Leaving Certificate</th>
                            <th>Reject Request</th>
                            <th>Send to Student</th>
                            
                            
                        </tr>
                        <tr>
                            <td>S1234</td>
                            <td>A.B.C. Student</td> 
                            <td>123456789V</td>
                            <td>Student@gmail.com</td>
                            <td>
                            <button id="character-btn" class="btn editbtn">View Request</button>
                                <div id="character-form" class="model">
                                    <div class="modal-content">
                                        <span class="close1">&times;</span>
                                        <h2>Leaving Certificate Request Form</h2>
                                        <form>
                                        <hr>
                                            <label for="userID"><b>Student Admission Number</b></label>
                                            <input type="text" value="ST2000001" name="id">
                                            
                                            <label for="reason"><b>Reason for Requesting Leaving Certificate </b></label>
                                            <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
                                            <br>
                                            <label for="TID"><b>Danna namak?</b></label>
                                            <input type="text"  name="TID" required>
                                            
                                            <button type="submit" class="registerbtn">Request</button>
                                            <hr>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td><form><button class="btn editbtn" type="submit" >Generate Leaving Certificate</button></form></td>
                            <td><button class="btn dltbtn" type="button">Reject</button></td>
                            <td>
                            
                        </tr>
                    </table>
                    	  
					</div>
					
			</div>
			
			</div>
        <!-- /General Page 1 -->
        
        <!-- General Page 2 -->
		<div id="page2" class="page">
			<div class="container">

            <h3> Certificates with Issues</h3>
				<hr>
				<form class="search" action="o_addStudentDetails.html">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Search</button>
                    <br>
                    <br>
                 <div class="card">
                 <table>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Student NIC</th>
                            <th>Student email</th>
                            <th>View Request</th>
                            <th>Generate Leaving Certificate</th>
                            <th>Reject Request</th>
                            <th>Send to Student</th>
                            
                            
                        </tr>
                        <tr>
                            <td>S1234</td>
                            <td>A.B.C. Student</td> 
                            <td>123456789V</td>
                            <td>Student@gmail.com</td>
                            <td>
                            <button id="character-btn" class="btn editbtn">View Issue</button>
                                <div id="character-form" class="model">
                                    <div class="modal-content">
                                        <span class="close1">&times;</span>
                                        <h2>Issues of the Leaving Certificate</h2>
                                        <form>
                                        <hr>
                                            <label for="userID"><b>Student Admission Number</b></label>
                                            <input type="text" value="ST2000001" name="id">
                                            
                                            <label for="reason"><b>Issues</b></label>
                                            <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
                                            <br>
                                            <label for="TID"><b>Name?</b></label>
                                            <input type="text"  name="TID" required>
                                            
                                            <button type="submit" class="registerbtn">Request</button>
                                            <hr>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td><form><button class="btn editbtn" type="submit" >Generate New Leaving Certificate</button></form></td>
                            <td><button class="btn dltbtn" type="button">Reject</button></td>
                            <td>
                            
                        </tr>
                    </table>
                </div>
					
			</div>
			
			</div>
        <!-- /General Page 2 -->

        <!-- General Page 3 -->
		<div id="page3" class="page">
			<div class="container">

            <h3>Accepted Leaving Certificates</h3>
				<hr>
				<form class="search" action="o_addStudentDetails.html">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Search</button>
                    <br>
                    <br>
                 <div class="card">
                 <table>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Student NIC</th>
                            <th>Student email</th>
                            <th>Download</th>                          
                        </tr>
                        <tr>
                            <td>S1234</td>
                            <td>A.B.C. Student</td> 
                            <td>123456789V</td>
                            <td>Student@gmail.com</td>
                            <td><button class="btn dltbtn" type="button">Download</button></td>
                        </tr>
                    </table>
                    
					</div>
            </div>
			
			</div>
        <!-- /General Page 3 -->
        
        


		</div>
		 
	
	</div>	
	<script>
		var page1 = document.getElementById("page1");
		var page2 = document.getElementById("page2");
		var page3 = document.getElementById("page3");
		var button1 = document.getElementById("button1");
		var button2 = document.getElementById("button2");
		var button3 = document.getElementById("button3");

		let url = window.location.href;
		if(url == "localhost/cl-gen2020/public/office/o_reqLc.php"){
			page1.style.display = "block";
			page2.style.display = "none";
			page3.style.display = "none";
			button1.style.color= "#000";
			button2.style.color= "#008080";
			button3.style.color= "#008080";
		}else if(url == "http://localhost/CL-GEN/html/admin/newsfeedphp?loggedin"){
			page1.style.display = "none";
			page2.style.display = "block";
			page3.style.display = "block";
			button1.style.color= "#000";
			button2.style.color= "#008080";
			button3.style.color= "#008080";
		}

		function REQUESTS(){
			page1.style.display = "block";
			page2.style.display = "none";
			page3.style.display = "none";
			button1.style.color= "#000";
			button2.style.color= "#008080";
			button3.style.color= "#008080";
			
			
		}

		function ISSUES(){
			page1.style.display = "none";
			page2.style.display = "block";
			page3.style.display = "none";
			button1.style.color= "#008080";
			button2.style.color= "#000";
			button3.style.color= "#008080";
		}
		
	
		function ACCEPTED(){
			page1.style.display = "none";
			page2.style.display = "none";
			page3.style.display = "block";
			button1.style.color= "#008080";
			button2.style.color= "#008080";
			button3.style.color= "#000";
		}
	</script>

<script>
var form1 = document.getElementById("character-form");

var characterbtn = document.getElementById("character-btn");

var close1 = document.getElementsByClassName("close1")[0];
var close2 = document.getElementsByClassName("close2")[0];

characterbtn.onclick = function() {
  form1.style.display = "block";
}

close1.onclick = function() {
  form1.style.display = "none";
}
close2.onclick = function() {
  form2.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
						

			

		
</body>
</html>