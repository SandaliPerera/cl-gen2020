

<?php
    session_start();

    if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
        $error = "Please Login!";
        header('Location: ../common/loginFile.php?error='.$error);
    }elseif($_SESSION['userType'] == 'parent'){

		$userID = $_SESSION['userID'];
		

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/pop.js"></script>
<script src="../js/nav.js"></script>

<link type="text/css" rel="stylesheet" href="../css/view.css">
<link type="text/css" rel="stylesheet" href="../css/register.css">
<link type="text/css" rel="stylesheet" href="../css/profile.css">
<link type="text/css" rel="stylesheet" href="../css/pop.css">
<link type="text/css" rel="stylesheet" href="../css/main_stu.css">
</head>
<body>
  <div id="nav"></div>
		
  <div class="content">
    <div class="card">
      <h1>Requests forms</h1>
    </div>

    <br>
			<table class="cert-table">
        <tr>
          <td class="cert-td">
      <div class="container modal">
    <h2>Request character certificate</h2>
    <br>
    <button id="character-btn">Open Form</button>


    <div id="character-form" class="model">
    

      <div class="modal-content">
        <span class="close1">&times;</span>
        <h2>Character Certificate Request Form</h2>
        <form>
          <hr>

						
			
						<label for="reason"><b>Reason for request</b></label>
						<textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
            <br>
						<label for="image"><b>Proof Document</b></label>
              <input type="hidden"  name="size" value="1000000" required>
              
              <div>
                <input type="file"  name="image" id="image"/>
              </div>
            
            <button type="submit" class="registerbtn">Request</button>
						<hr>
        </form>
      </div>
    
    </div>
     
    
      </div>
      </td>
      <td  class="cert-td">
        <div class="container modal">
      <h2>Request Leaving Document</h2>
      <br>
      <button id="leaving-btn">Open Form</button>
  

      <div id="leaving-form" class="model">
      

        <div class="modal-content">
          <span class="close2">&times;</span>
          <h2>Leaving Request Form</h2>
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
      
       
        </div>
     
  
    
  </div>
  </td>
</table>
      

</div>

<script>
var form1 = document.getElementById("character-form");

var characterbtn = document.getElementById("character-btn");

var close1 = document.getElementsByClassName("close1")[0];
var close2 = document.getElementsByClassName("close2")[0];
var form2 = document.getElementById("leaving-form");

var leavingbtn = document.getElementById("leaving-btn");


characterbtn.onclick = function() {
  form1.style.display = "block";
}

leavingbtn.onclick = function() {
  form2.style.display = "block";
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

<?php } ?>