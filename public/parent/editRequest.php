
<?php
    session_start();

    if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
        $error = "Please Login!";
        header('Location: ../common/loginFile.php?error='.$error);
    }elseif($_SESSION['userType'] != 'parent'){
		header('Location: ../common/error.html');
    }else{

		$userID = $_SESSION['userID'];
		

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="../css/pop.css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/pop.js"></script>
<script src="../js/nav.js"></script>
<link type="text/css" rel="stylesheet" href="../css/main_stu.css">
<link type="text/css" rel="stylesheet" href="../css/view.css">
<link type="text/css" rel="stylesheet" href="../css/register.css">
</head>
<body>
  <div id="nav"></div>
		
  <div class="content">
      <h1>Edit Request Form</h1>


      <div class="container stu">
    <br>


        <form>
          <hr>

          <label for="reason"><b>Reason for request</b></label>
          <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
          <br>
          <label for="prrof"><b>Proof Document</b></label>
          <input type="file"  name="proof" required>
            
            <button type="submit" class="registerbtn">Request</button>
						<hr>
        </form>
      </div>
    
    
     
</div>

</body>
</html>

    <?php } ?>