
<?php

require_once(realpath(dirname(__FILE__) . '/../config/conn.php'));

$staff_sql = "SELECT COUNT(isActivated) FROM user where userType='officer'";  
$staff_sql2 = "SELECT * FROM user where userType='officer' ";

$staff_result = $conn->query($staff_sql);
$staff_result2 = $conn->query($staff_sql2);

if(!$staff_result || !$staff_result2){
    $error = "Cannot Retrieve Data";
}
else{
    	
}

$teacher_sql = "SELECT COUNT(isActivated) FROM user where userType='teacher'"; 
$teacher_sql2 = "SELECT * FROM user where userType='teacher' ";
            
$teacher_result = $conn->query($teacher_sql);
$teacher_result2 = $conn->query($teacher_sql2);

if(!$staff_result || !$staff_result2){
    $error = "Cannot Retrieve Data";
}
else{
    	
}


$student_sql = "SELECT COUNT(isActivated) FROM user where userType='student' ";  
$student_sql2 = "SELECT * FROM user where userType='student' ";

$student_result = $conn->query($student_sql);
$student_result2 = $conn->query($student_sql2);

if(!$staff_result || !$staff_result2){
    $error="Invalid Username or Password";
}
else{
    	
}
$parent_sql = "SELECT COUNT(isActivated) FROM user where userType='parent'"; 
$parent_sql2 = "SELECT * FROM user where userType='parent' ";
            
$parent_result = $conn->query($parent_sql);
$parent_result2 = $conn->query($parent_sql2);

if(!$staff_result || !$staff_result2){
    $error = "Cannot Retrieve Data";
}
else{
    	
}


$user_sql1 = "SELECT * FROM user WHERE isActivated = 0  AND userType != 'superadmin'";
$user_sql2 = "SELECT * FROM user WHERE (isActivated = 1 AND userType != 'superadmin')";

$user_sql3 = "SELECT COUNT(isActivated) FROM user where userType != 'superadmin' AND isActivated = 0 "; 
$user_sql4 = "SELECT COUNT(isActivated) FROM user where userType != 'superadmin' AND isActivated = 1"; 
            
            	
$user_res1= mysqli_query($conn,$user_sql1);
$user_res2= mysqli_query($conn,$user_sql2);
$user_res3= mysqli_query($conn,$user_sql3);
$user_res4= mysqli_query($conn,$user_sql4);

if(!$user_res1 || !$user_res2 || !$user_res3 || !$user_res4){
    $error = "Error in Retrieving aaaa";
}
else{
    	
}

?>

