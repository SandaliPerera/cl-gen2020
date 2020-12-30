<html>

<head>
    <title>Change Password</title>

    <link rel="stylesheet" href="../css/login.css " type="text/css">
    <link rel="stylesheet" href="../css/messages.css " type="text/css">
    <script src="../js/errors.js"></script>

</head>

<body>
    <?php if (isset($_GET['error'])) { ?>
        <div id="error"><?php echo $_GET['error']; ?></div>
    <?php } ?>

    <div id="msg"></div>


    <div class="login">
        <br>
        <br>
        <h2>Change your Password </h2>
        <br>


        <form id="login" action="../../src/change_password.php" method="post" onsubmit="return CheckPassword(password.value,confirm_password.value)">
            <p>Password</p>
            <input type="password" id="password" name="password" placeholder="Enter Password" onblur="validatePassword(password.value)" required>
            <div class="text" id="pwd"></div>
            <p>Confirm Password</p>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter Confirm Password" onblur="validateConPassword(confirm_password.value)" required>
            <div class="text" id="psd"></div>
            <input type='hidden' name='token' value=<?php if (isset($_GET['token'])) {
                                                        echo $_GET['token'];
                                                    } ?>>
            <br><br><br>
            <input type="submit" value="Change Password" name="change_password">

        </form>

    </div>
</body>


</html>