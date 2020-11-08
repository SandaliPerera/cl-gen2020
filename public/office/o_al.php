
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
<link type="text/css" rel="stylesheet" href="../css/profile.css">
<link type="text/css" rel="stylesheet" href="../css/view.css">


</head>
<body name = top>
<body>


<div id="nav"></div>


		<div class="content">
		

	<div class="feed">
		<div class="btn-box">

			
			<button id="button1" onclick="MATHS()">Combined Maths</button>
			<button id="button2" onclick="BIO()">Biological Science</button>
			<button id="button3" onclick="COMMERCE()">Commerce</button>
		</div>

		
        <!-- General Page 1 -->
		<div id="page1" class="page">
			<div class="container">

            <h3>Combined Maths Stream</h3>
				<hr>
				<form class="search" action="o_addStudentDetails.html">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Search</button>
                    <br>
                    <br>
                 <div class="card">
                    <table>
                        <tr>
                          <th rowspan = "2" >Student Index Number</th>
                          <th rowspan = "2" >A/L Index Number</th>
                          <th rowspan="2">Student Name</th>
                          <th colspan = "6" >Subjects</th>
                        </tr>
                        
                        <tr>
                          <th>Combined Mathematics</th>
                          <th>Chemistry</th>
                          <th>Physics</th>
                          <th>ICT</th>
                          <th>General English</th>
                          <th>General Knowledge</th>
                        </tr>
                        <tr>
                          <td>S12345</td>
                          <td>65610</td>
                          <td>A.B.C. Student</td>
                          <td>A</td>
                          <td>C</td>
                          <td>B</td>
                          <td>A</td>
                          <td>A</td>
                          <td>86</td>
                        </tr>
   
                      </table>
                    	  
					</div>
					
			</div>
			
			</div>
        <!-- /General Page 1 -->
        
        <!-- General Page 2 -->
		<div id="page2" class="page">
			<div class="container">

            <h3>Biological Science Stream</h3>
				<hr>
				<form class="search" action="o_addStudentDetails.html">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Search</button>
                    <br>
                    <br>
                 <div class="card">
                 <table>
                        <tr>
                          <th rowspan = "2" >Student Index Number</th>
                          <th rowspan = "2" >A/L Index Number</th>
                          <th rowspan="2">Student Name</th>
                          <th colspan = "6" >Subjects</th>
                        </tr>
                        
                        <tr>
                          <th>Biological Science</th>
                          <th>Chemistry</th>
                          <th>Physics</th>
                          <th>Agriculture</th>
                          <th>General English</th>
                          <th>General Knowledge</th>
                        </tr>
                        <tr>
                          <td>S12345</td>
                          <td>65610</td>
                          <td>A.B.C. Student</td>
                          <td>A</td>
                          <td>C</td>
                          <td>B</td>
                          <td>A</td>
                          <td>A</td>
                          <td>86</td>
                        </tr>                       
                      </table>
                    	  
					</div>
					
			</div>
			
			</div>
        <!-- /General Page 2 -->

        <!-- General Page 3 -->
		<div id="page3" class="page">
			<div class="container">

            <h3>Commerce Stream</h3>
				<hr>
				<form class="search" action="o_addStudentDetails.html">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Search</button>
                    <br>
                    <br>
                 <div class="card">
                 <table>
                        <tr>
                          <th rowspan = "2" >Student Index Number</th>
                          <th rowspan = "2" >A/L Index Number</th>
                          <th rowspan="2">Student Name</th>
                          <th colspan = "6" >Subjects</th>
                        </tr>
                        
                        <tr>
                          <th>Business Studies</th>
                          <th>Accounting and Finance</th>
                          <th>Economics</th>
                          <th>ICT</th>
                          <th>General English</th>
                          <th>General Knowledge</th>
                        </tr>
                        <tr>
                          <td>S12345</td>
                          <td>65610</td>
                          <td>A.B.C. Student</td>
                          <td>A</td>
                          <td>C</td>
                          <td>B</td>
                          <td>A</td>
                          <td>A</td>
                          <td>86</td>
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
		if(url == "http://localhost/cl-gen2020/public/office/o_al.php"){
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

		function MATHS(){
			page1.style.display = "block";
			page2.style.display = "none";
			page3.style.display = "none";
			button1.style.color= "#000";
			button2.style.color= "#008080";
			button3.style.color= "#008080";
			
			
		}

		function BIO(){
			page1.style.display = "none";
			page2.style.display = "block";
			page3.style.display = "none";
			button1.style.color= "#008080";
			button2.style.color= "#000";
			button3.style.color= "#008080";
		}
		
	
		function COMMERCE(){
			page1.style.display = "none";
			page2.style.display = "none";
			page3.style.display = "block";
			button1.style.color= "#008080";
			button2.style.color= "#008080";
			button3.style.color= "#000";
		}
	</script>	
			

			

		
</body>
</html>