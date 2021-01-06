<?php
include_once '../config/conn.php';


if (isset($_POST['addAchieve'])) {

    $sql = "SELECT * from achievement";
    $result = mysqli_query($conn,$sql);
    $maxID = 0;

    while($row=mysqli_fetch_array($result)){

        $lastId = $row['achievementID'];
        $charID = substr($lastId,1);
        $intID = intval($charID);

        if($intID > $maxID){
            $maxID = $intID;
        }

    }

    if(mysqli_num_rows($result) == 0){
            $date = date("y");
            $prefix = "A";
            $achievementID = $prefix . $date . "00001" ;
    }else{

            if(substr($maxID,0,2) != date("y")){
                $date = date("y");
                $prefix = "A";
                $achievementID = $prefix . $date . "00001";
            }else{
                $prefix = "A";
                $achievementID = $prefix . ($maxID+1) ;
            }


    }
    $cID = $_POST['cID'];
    $catID = substr($lastId,0,1);

    if($catID == "SP"){
        $sql2 = "SELECT * from csport WHERE SportID = '$cID'";
        $result2 = mysqli_query($conn,$sql2);
        $row2=mysqli_fetch_array($result2);
        $category = $row2['SportName'];
        $cType = "1";
    }else if($catID == "SO"){
        $sql3 = "SELECT * from csocieties  WHERE SocietyName = '$cID'";
        $result3 = mysqli_query($conn,$sql3);
        $row3=mysqli_fetch_array($result3);
        $category = $row3['SocietyName'];
        $cType = "2";
    }

    //$sportID = $_POST['Spid'];
    $Snumber = $_POST['Snumber'];
    $aDate = $_POST['aDate'];
    $aname = $_POST['aname'];
    $description = $_POST['description'];
    $position = $_POST['position'];
    $Ivalue = $_POST['Ivalue'];
    $rDate =  date("Y-m-d");

$sql1 = "INSERT INTO `achievement`(`achievementID`, `achievementName`, `stuID`, `date`, `categoryID`, `category`, `description`, `impValue`, `recordedDate`, `position`,`Ctype`) VALUES 
('$achievementID','$aname','$Snumber','$aDate','$cID','$category','$description','$Ivalue','$rDate','$position','$cType')";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
	echo 'alert("Details Added");';
	//echo 'window.location.href="../driver.php";';
    echo '</script>';
    echo "Succesfully Added Record";
    header('Location: ../public/teacher/Tcr_achievement.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>