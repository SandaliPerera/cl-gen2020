<?php
    session_start();

    if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
        $error = "Please Login!";
        header('Location: ../common/loginFile.php?error='.$error);
    }else{
		

?>
<html>

<head>
    <title>Login</title>

    <link rel="stylesheet" href="../css/login.css " type="text/css">
    <link rel="stylesheet" href="../css/messages.css " type="text/css">
    <link rel="stylesheet" href="../css/main.css " type="text/css">
    <script src="../js/errors.js"></script>
    <script src="../js/nav.js"></script>


</head>

<body>
   
<br>
<br>
    <div class="log">
        <br>
        <form id="login" action="../../src/logout.php" method="post">
            <p>You are already logged in, logout to login as a new user</p>

            <br>
            
            <input type="submit" value="Logout" name="logout" style="float:left;width:100px;background-color: #1e8dd6;border-radius: 100px;margin-left:420px;">
            
    
        </form>
        <button onclick="goBack()" class="backbtn" style="float:left;margin-left:442px;height:40px;margin-top:10px;width:100px;">Cancel</button>

    </div>
</body>

</html>
    <?php } ?>