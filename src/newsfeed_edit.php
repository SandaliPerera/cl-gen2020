<?php

require_once '../config/conn.php';

if (isset($_POST['add_news'])){

        $newsID = $_POST['NID'];
        $title = $_POST['title'];
        $news = $_POST['news'];
 
        $sql = "INSERT INTO newsfeed(newsID,title,news)VALUES ('".$newsID."','".$title."','".$news."')";

            if ($conn->query($sql) == TRUE) {
                header('Location: ../public/office/edit_newsfeed.php');
            } else {
            header('Location: ../public/office/edit_newsfeed.php?error');
            }
    }else{
        header('Location: ../public/office/edit_newsfeed.php?error');
    }

$conn->close();


?>