<?php

require_once '../config/conn.php';

if (isset($_POST['add_news'])){

        $newsID = $_POST['NID'];
        $title = $_POST['title'];
        $news = $_POST['news'];
 
        $sql = "UPDATE  newsfeed SET  title = '$title', news = '$news' WHERE newsID = '$newsID'";

            if ($conn->query($sql) == TRUE) {
                header('Location: ../public/office/news_list.php');
            } else {
            header('Location: ../public/office/update_newsfeed.php?error');
            }
    }else{
        header('Location: ../public/office/edit_newsfeed.php?error');
    }

$conn->close();


?>