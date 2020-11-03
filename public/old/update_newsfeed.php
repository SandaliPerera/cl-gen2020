<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="../css/pop.css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/pop.js"></script>
<script src="../js/nav.js"></script>
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/view.css">
<link type="text/css" rel="stylesheet" href="../css/register.css">
</head>
<body>
    
<?php

require_once '../../config/conn.php';
if (isset($_GET['newsID'])){

    $newsID = $_GET['newsID'];

    $sql = "SELECT * FROM newsfeed WHERE newsID = $newsID";

    $res= mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);

    if($res){
    //echo "Sucessfull";
    }
    else{
    echo"failed";	
    }
}

?>
  <div id="nav"></div>
		
  <div class="content">
    <div class="card">
      <h1>Add News</h1>


      <div class="container">
    <br>


    <form action= "../../src/newsfeed_update.php" method="POST">
          <hr>

						<label for="NID"><b>News ID</b></label>
                        <input type="text" name="NID" placeholder="News ID" value="<?php echo $row['newsID']?>" readonly>
                        
                        <label for="title"><b>Title</b></label>
                        <input type="text"  name="title" placeholder="Title" value="<?php echo $row['title']?>" required>
			
						<label for="news"><b>News</b></label>
						<?php echo "<textarea  name=\"news\" rows=\"4\" cols=\"50\"  required>" .$row['news']." </textarea> "?>
                        <br>
						
            
            <button type="submit" class="registerbtn" id="add_news" name="add_news">Request</button>
						<hr>
        </form>
      </div>
    
    </div>
    
     
</div>


</body>
</html>
