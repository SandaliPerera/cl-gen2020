<?php
    include_once '../config/conn.php';

    if ($conn->connect_error){
        die("Connection failed : " . $conn->connect_error);
    }
    echo "Connected Successfully";

    if(isset($_POST['savebtn'])){

        $read= "SELECT * FROM addAlExam where examID='".$_POST['examID']."'";
        $res= mysqli_query($conn,$sql);
        if($res != 0){
            $error = "Duplicate records";
                        header('Location: ../public/office/o_viewAl.php?error='.$error);
        }else{

        $examYear = $_POST['alExamYear'];
        $examName = $_POST['alExamName'];

        $prefix = "GCEAL/";
        $examID = $prefix . $examYear ;

        $sql = "INSERT INTO addAlExam (examID, examYear, examName) VALUES ('$examID','$examYear','$examName');";
        
        if($conn->query($sql)===TRUE){
            echo '<script language = "javascript">';
            echo 'alert("Details Added");';
            header('Location: ../public/office/o_viewAl.php');
        }else{
            
            echo "Error : " . $sql . "<br>" . $conn->error;
         }
        }
    }
    $conn->close();
?>
