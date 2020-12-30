<?php
    include_once '../config/conn.php';

    if ($conn->connect_error){
        die("Connection failed : " . $conn->connect_error);
    }
    //echo "Connected Successfully";

    if(isset($_POST['savebtn'])){

        $read= "SELECT * FROM addScholExam where examID='".$_POST['examID']."'";
        $res= mysqli_query($conn,$sql);
        if($res != 0){
            $error = "Duplicate records";
                        header('Location: ../public/office/o_viewSchol.php?error='.$error);
        }else{

        $examYear = $_POST['scholExamYear'];
        $examName = $_POST['examName'];

        $prefix = "G5SE/";
        $examID = $prefix . $examYear ;

        $sql = "INSERT INTO addScholExam (examID, examYear, examName) VALUES ('$examID','$examYear','$examName');";
        
        if($conn->query($sql)===TRUE){
            echo '<script language = "javascript">';
            echo 'alert("Details Added");';
            header('Location: ../public/office/o_viewSchol.php');
        }else{
            
            echo "Error : " . $sql . "<br>" . $conn->error;
         }
        }
    }
    $conn->close();
?>
