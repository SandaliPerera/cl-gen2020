<?php

require_once '../config/conn.php';

if (isset($_POST['add_news'])){

    
        $title = $_POST['title'];
        $news = $_POST['news'];
        $image = $_FILES['image']['name'];
        $target = "../images/" . basename($image);
        
 
        $sql = "INSERT INTO newsfeed(title,news,image)VALUES ('$title','$news','$image')";

        mysqli_query($conn,$sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $message = "Image uploaded successfully";
            header('Location: ../public/office/edit_newsfeed.php?message='.$message);
        }else{
            header('Location: ../public/office/edit_newsfeed.php');
        }
            
    }else{
        header('Location: ../public/office/edit_newsfeed.php?error='.$error);
    }

$conn->close();


?>