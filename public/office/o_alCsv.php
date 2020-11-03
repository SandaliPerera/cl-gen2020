<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add G.C.E. A/L Examination Results</title>
<link rel="stylesheet" href="../css/register.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div id="nav"></div>

    </div>
    <div class="content">
        <div class="container">
            <form action="../php/register.php" method="POST">
                <h1>Add G.C.E. A/L Examination Results</h1>
                <hr>

				<label for="examID"><b>Exam ID</b></label>
				<input type="text" value="ALS123" name="examID" readonly>
                
				<label for="olExamYear"><b>Enter Exam Year</b></label>
				<input type="text" value="2016" name="olExamYear" readonly>

				<label for="olexamName"><b>Exam Name</b></label>
				<input type="text" value="G.C.E. A/L Examination - 2016" name="olexamName" readonly>


				<br>
                
                <p>Click on the "Choose File" button to upload a  CSV file :</p>
			
                <form>
                    
                    <input type="file" id="myFile" name="filename" class="nextpgbtn" required ></br>
                
                <hr>
			   
				<button type="submit" class="registerbtn">Save</button>

            </form>

        </div>

    </div>

		
</body>
</html>
