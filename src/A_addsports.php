
<?php
include ('../public/admin/add_sport.php');
//require_once('cl_gen.php');
include_once '../config/conn.php';
/*
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/
if (isset($_POST['regbtn'])) {

    //$sportID = $_POST['Spid'];
    $sportName = $_POST['Sname'];
    $tcrID = $_POST['TID'];
    $numStu = $_POST['NOS'];

$sql = "INSERT INTO csports (SportName, tcrID, numStu) VALUES
 ('$sportName', '$tcrID', '$numStu');";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
	echo 'alert("Details Added");';
	//echo 'window.location.href="../driver.php";';
    echo '</script>';
    echo "Succesfully Added Record";
    header('Location: ../public/admin/sports.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>
