
    <html>
        <head>
        <title>Login</title>
        
        <link rel="stylesheet" href="../../css/login.css " type="text/css">
        <link rel="stylesheet" href="../../css/messages.css " type="text/css">
        <script defer src="../../js/errors.js"></script>
        
        </head>
        
        <body>
        <?php if (isset($_GET['error'])){?>
        <div id="error"><?php echo $_GET['error']; ?></div>
        <?php } ?>
        
        <?php if (isset($_GET['message'])){?>
        <div id="message"><?php echo $_GET['message']; ?></div>
        <?php } ?>
   
        <div class="login">
        
                <h1>Login </h1>
                
                
                <form id="login" action="../includes/login.php" method="post">
                    <p>Username</p>
                    <input type="text" id="username" name="username" placeholder="Enter Username" required  >
                    <p>Password</p>
                    <input type="text" id="password" name="password" placeholder="Enter Password" required>
                    <br><br><br>
                    <input type="submit" value="LOGIN" name="login" >
                
                </form>
        
                <a href="forgotPass.html"><h3>Forgot password?</h3></a>
                
            </div>
        </body>
        </html>