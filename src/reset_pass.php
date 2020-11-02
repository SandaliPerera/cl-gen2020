<?php

if (isset($_POST['reset_pass'])){
    
    require_once '../config/conn.php';

    $username = $_POST['username'];
    $emailEntered = $_POST['email'];

    if(!filter_var($emailEntered,FILTER_VALIDATE_EMAIL)){
        $error = "Invalid Email Format!";
        header('Location: ../../php/common/resetPass.php?error='.$error);
    }else{

    $query = "SELECT * FROM user WHERE username ='$username'";

    $result = mysqli_query($conn,$query);

         if(mysqli_num_rows($result) > 1){
            $error = "ERROR";
            header('Location: ../../php/common/resetPass.php?error='.$error);

         }else if(mysqli_num_rows($result) == 0){
            $error = "Incorrect Username!";
            header('Location: ../../php/common/resetPass.php?error='.$error);

         }else if (mysqli_num_rows($result) == 1){

            $row = mysqli_fetch_assoc($result);
            $userID = $row['userID'];
            $userType = $row['userType'];

            if($userType == 'student'){
                $sql = 'SELECT * FROM student WHERE admissionNo = "'.$row['userID'].'" ';
                $result1 = mysqli_query($conn,$sql);
                $row1 = mysqli_fetch_assoc($result1);

                $email = $row1['email'];

                if($emailEntered != $email){
                    $error = "Incorrect Email!";
                    header('Location: ../../php/common/resetPass.php?error='.$error);

                }else if($emailEntered == $email){
                    $token = uniqid(md5(time()));
                }

            }elseif($userType == 'parent'){
                $sql = 'SELECT * FROM parent WHERE parentID = "'.$row['userID'].'" ';
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);

                $email = $row['email'];

                if($emailEntered != $email){
                    $error = "Incorrect Email!";
                    header('Location: ../../php/common/resetPass.php?error='.$error);
                }else{
                    $token = uniqid(md5(time()));
                }

            }elseif($userType == 'teacher'){
                $sql = 'SELECT * FROM teacher WHERE teacherID = "'.$row['userID'].'" ';
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);

                $email = $row['email'];

                if($emailEntered != $email){
                    $error = "Incorrect Email!";
                    header('Location: ../../php/common/resetPass.php?error='.$error);
                }else{
                    $token = uniqid(md5(time()));
                }
            }elseif($userType == 'officer'){
                $sql = 'SELECT * FROM office WHERE officerID = "'.$row['userID'].'" ';
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);

                $email = $row['email'];

                if($emailEntered != $email){
                    $error = "Incorrect Email!";
                    header('Location: ../../php/common/resetPass.php?error='.$error);
                }else{
                    $token = uniqid(md5(time()));
                }
            }

            if(isset($token)){
                $sql = "INSERT INTO tokens(email,token,userID) VALUES ('$email','$token','$userID')";
                $resultInsert = mysqli_query($conn,$sql);

                $body = "
                    Password Reset

                    Follow the following link to reset your password
                    'http://localhost/CL-GEN1/php/common/password_change.php?token=$token";


                $to = $email;
                $from = "clgen2020@gmail.com";
                $subject = "CL-GEN : Reset your Password";
                $message = $body;
                $header = "From: {$from}";

                $sendResult = mail($to,$subject,$message,$header);

                if($sendResult){
                    $message = "Email has sent to your email address with the Reset link";
                    header('Location: ../../php/common/resetPass.php?message='.$message);
                }else{
                    $error = "Email Sending Fail";
                    header('Location: ../../php/common/resetPass.php?error='.$error);
                }
            }else{
                $error = "Failed to send the Email";
                //sheader('Location: ../../php/common/resetPass.php?error='.$error);
            }

        }

    }



}


?>