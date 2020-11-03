<?php
    include_once '../../php/includes/conn.php';

    if ($conn->connect_error){
        die("Connection failed : " . $conn->connect_error);
    }
    echo "Connected Successfully";

    if(isset($_POST['savebtn'])){

        $examID = $_POST['alExamID'];
        $ExamYear = $_POST['alExamYear'];
        $alExamName = $_POST['alExamName'];
        
        $sql = "INSERT INTO addALexam (examID, examYear, examName) VALUES 
        ('$examID', '$ExamYear', '$alExamName');" ;

        if($conn->query($sql)===TRUE){
            echo '<script language="javascript">';
            echo 'alert("Details Added");';
            echo '</script>';
            echo "dd";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>