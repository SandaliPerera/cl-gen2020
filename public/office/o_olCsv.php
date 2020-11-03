<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="../css/pop.css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/pop.js"></script>
<script src="../js/nav.js"></script>
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/register.css">
</head>
    <body>
        <div id="nav"></div>
        
    <div class="content">
        <div class="container">
            <form action="../php/register.php" method="POST">
                <h1>Add G.C.E. O/L Examination Results</h1>
                <hr>

				<label for="examID"><b>Exam ID</b></label>
				<input type="text" value="G5S123" name="examID" readonly>
                
				<label for="olExamYear"><b>Enter Exam Year</b></label>
				<input type="text" value="2016" name="olExamYear" readonly>

				<label for="olexamName"><b>Exam Name</b></label>
				<input type="text" value="G.C.E. O/L Examination - 2016" name="olexamName" readonly>


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
