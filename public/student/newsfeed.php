
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>News Feed</title>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
<link type="text/css" rel="stylesheet" href="../css/main_stu.css">
<link type="text/css" rel="stylesheet" href="../css/news.css">
</head>
<?php
require_once '../../config/conn.php';


    $sql = "SELECT * FROM newsfeed ORDER BY newsID DESC";

	$res= mysqli_query($conn,$sql);
	$res1= mysqli_query($conn,$sql);

    if($res){
    //echo "Sucessfull";
    }
    else{
    echo"failed";	
    }


?>

<div id="nav"></div>


		<div class="content">
			


	<div class="feed">
	
		
		<div class="btn-box">

		<button id="button2" onclick="NEWS()">News and Events</button>
		<button id="button1" onclick="ABOUT()">Notifications</button>
		</div>
		<div id="page2" class="page">
		<div class="banner">
			</div>

	
		<?php
		while($row=mysqli_fetch_assoc($res)){
			?>
			<div class="container">
				<table>
					<tr>
						<th width="60%">
			<h2><b><?php echo  $row['title'] ?></b></h2>
			<hr>
		</th></tr>
				<tr>
		<td width="70%">
			<p> <?php echo $row['news'] ?></p>
		</td>
		<?php if($row['image']==TRUE){ ?>
		<td>	
			<div class="image">
				<?php echo "<img src='../../images/".$row['image']."'>"; ?>
			
			</div>
		</td>
		<?php } ?>
		</tr>
		</table>
		</div>
		<?php
		}
		?>
	
		
	</div>


		<div id="page1" class="page">
		<table>
			<tr>
				<td>
				<table class="inner">
					<tr>
						<th>
							<h2>FIRST NOTIFICATION</h2>
						</th>
					</tr>
					<tr>
						<td>
							<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
						</td>
					</tr>
					<tr>
						<td>
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
						</td>
					</tr>

				</table>
				</td>
				<td>
				<table class="inner">
					<tr>
						<th>
							<h2>FIRST NOTIFICATION</h2>
						</th>
					</tr>
					<tr>
						<td>
							<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
						</td>
					</tr>
					<tr>
						<td>
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
						</td>
					</tr>

				</table>
				</td>
				<td>
					
				<table class="inner">
				<tr>
						<th>
							<h2>FIRST NOTIFICATION</h2>
						</th>
					</tr>
					<tr>
						<td>
							<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
						</td>
					</tr>
					<tr>
						<td>
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
						</td>
					</tr>

				</table>
				</td>
	</tr>
	<tr>
				<td>
				<table class="inner">
					<tr>
						<th>
							<h2>FIRST NOTIFICATION</h2>
						</th>
					</tr>
					<tr>
						<td>
							<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
						</td>
					</tr>
					<tr>
						<td>
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
						</td>
					</tr>


				</table>
				</td>
				<td>
				<table class="inner">
					<tr>
						<th>
							<h2>FOURTH NOTIFICATION</h2>
						</th>
						</tr>
					<tr>
						<td>
							<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
						</td>
					</tr>
					<tr>
						<td>
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
						</td>
					</tr>

				</table>
				</td>
				<td>
				<table class="inner">
					<tr>
						<th>
							<h2>FOURTH NOTIFICATION</h2>
						</th>
						</tr>
					<tr>
						<td>
							<p>From October 31 through December 31, we invite you to Do Something for CancerCare: Tell your family and friends about CancerCare over your Zoom turkey dinners. Bake holiday cookies.</p>
						</td>
					</tr>
					<tr>
						<td>
						<button class="view-btn"><span><a href= "notification.php"><b>View Message</b></a></span></button>
						</td>
					</tr>

				</table>
				</td>
			</tr>

		</table>
	</div>
</div>
		 
	
	</div>	
	<script>
		var page1 = document.getElementById("page1");
		var page2 = document.getElementById("page2");
		var button1 = document.getElementById("button1");
		var button2 = document.getElementById("button2");
		
		let url = window.location.href;
		if(url == "http://localhost/CL-GEN/public/student/newsfeed.php"){
			page1.style.display = "none";
			page2.style.display = "block";
			button1.style.color= "#008080";
			button2.style.color= "#000";
			
		}else if(url == "http://localhost/CL-GEN/public/admin/newsfeed.php?loggedin"){
			page1.style.display = "none";
			page2.style.display = "block";
			button1.style.color= "#008080";
			button2.style.color= "#000";
		}

		function ABOUT(){
			page1.style.display = "block";
			page2.style.display = "none";
			button1.style.color= "#000";
			button2.style.color= "#008080";
			
		}

		function NEWS(){
			page1.style.display = "none";
			page2.style.display = "block";
			button1.style.color= "#008080";
			button2.style.color= "#000";
		}
	</script>	
			

		
</body>
</html>