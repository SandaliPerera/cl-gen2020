<?php

if (isset($_POST['change_password'])){
    
    require_once '../config/conn.php';

    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $token = $_POST['token'];

    $sql ="SELECT * FROM tokens WHERE token ='$token'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $userID = $row['userID'];
    $email = $row['email'];

    if($token != $row['token']){
        $error = "Invalid change of password, Re-enter details to send another email";
        header('Location: ../../php/common/resetPass.php?error='.$error);
    }else{
        $sql ="SELECT * FROM user WHERE userID ='$userID'";
        $result1 = mysqli_query($conn,$sql);
        $row1 = mysqli_fetch_assoc($result1);

        $userid = $row1['userID'];

        if($userID != $userid){
            $error = "Invalid change of password ";
            header('Location: ../../php/common/password_change.php?error='.$error);
        }else{

            $pass = md5($password);
            $confirmPass = md5($confirmPassword);

            $query = "UPDATE user SET password = '$pass' WHERE userID = '$userid'";
            $resultInsert = mysqli_query($conn,$query);

            $query1 = "DELETE FROM tokens WHERE userID = '$userid'";
            $resultInsert = mysqli_query($conn,$query1);

            if($resultInsert == TRUE){
                $message = "Password Updated. Login to Continue";
                header('Location: ../../php/common/loginFile.php?message='.$message);
            }else{
                $error = "Invalid change of password";
                header('Location: ../../php/common/password_change.php?error='.$error);
            }

        }

    }

}



?>