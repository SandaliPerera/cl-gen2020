<?php
if ( isset( $_POST['logout'] ) ){
    session_start();
    session_destroy();
    unset($_SESSION["username"]);

    header('Location: ../../html/common/login.html');
}
?>