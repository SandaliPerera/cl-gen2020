<?php 
if (isset($_POST['login'])){
    
    require_once '../config/conn.php';

    $username = $_POST['username'];
    $pwd = $_POST['password'];

    $password = md5($pwd);

    if(empty($username) == true || empty($pwd)== true){
        
         $error = "Fill all the fields";
         header('Location: ../../php/common/loginFile.php?error='.$error);

    }else{
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password '";
        $result = mysqli_query($conn,$sql);

         if(mysqli_num_rows($result) == 1){

            $row = mysqli_fetch_assoc($result);
            
            if($pwd == $row['userID'] ){
                $message = "<a href='../common/resetPass.php'>First time login in? Click here to Change your Password to Login</a> "  ;

                header('Location: ../../php/common/loginFile.php?message='.$message);
            }else{

                if($row['userType'] == "student"){
                    $_SESSION['userID'] = $row['userID'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['userType'] = $row['userType'];
                    header('Location: ../../php/admin/dashboard.php');

                }else if($row['userType'] == "parent"){
                    $_SESSION['userID'] = $row['userID'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['userType'] = $row['userType'];
                    header('Location: ../../php/admin/newsfeed.php');

                }else if($row['userType'] == "teacher"){
                    $_SESSION['userID'] = $row['userID'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['userType'] = $row['userType'];
                    header('Location: ../../php/admin/newsfeed.php');

                }else if($row['userType'] == "office"){
                    $_SESSION['userID'] = $row['userID'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['userType'] = $row['userType'];
                    header('Location: ../../php/admin/dashboard.php');

                }else if($row['userType'] == "admin"){
                    $_SESSION['userID'] = $row['userID'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['userType'] = $row['userType'];
                    header('Location: ../../php/admin/dashboard.php');
                }

            }

    }else{
        $error="Invalid Username or Password";
        header('Location: ../../php/common/loginFile.php?error='.$error);
    }


}
}