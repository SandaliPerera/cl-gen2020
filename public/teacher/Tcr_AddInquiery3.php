<?php
     session_start();

     if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
         $error = "Please Login!";
         header('Location: ../common/loginFile.php?error='.$error);
     }else if(($_SESSION['userType'] == 'teacher') && ($_SESSION['teacherType'] == 'both')){

         $userID = $_SESSION['userID'];
?> 

<!DOCTYPE html>
<html>

<head>
    <title>Inquieries 3</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/register.css">
    <link type="text/css" rel="stylesheet" href="../css/register2.css">
    <link type="text/css" rel="stylesheet" href="../css/view.css">
    <link type="text/css" rel="stylesheet" href="../css/register.css">
    <link type="text/css" rel="stylesheet" href="../css/messages.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>


    <div id="nav3"></div>

    <div class=content>

        <h1>INQUIRY FORM</h1>
        <div class="container">
            <hr>
            <form action="../../src/add_inquiry.php" method="POST">
                <label for="title"><b> Inquiry Title</b></label>
                <input type="text" id="title" name="title" placeholder="Type Inquiry ID.." required>

                <label for="reciever"><b>Reciever's ID</b></label>
                <input type="text" id="reciever" name="reciever" placeholder="Type Reciever's ID.." required>

                <label for="sender"><b>Sender's ID</b></label>
                <input type="text" id="sender" name="sender" placeholder="Type Sender's ID.." required>

                <label for="inq"><b> Message </b></label>
                <textarea id="inq" name="inq" placeholder="Write something.." style="height:200px" required></textarea>

                <button type="submit" class="registerbtn" id="add_inq" name="add_news">Submit</button>
                <hr>
            </form>
        </div>
    </div>

</body>

</html>

<?php 
	 }
?>