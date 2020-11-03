<?php
//require_once('cl_gen.php');
include_once '../../php/includes/conn.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

if (isset($_POST['regbtn'])) {
        
    $admissionNo = $_POST['stuID'];
    $fName = $_POST['stufName'];
    $mName = $_POST['stumName'];
    $lName = $_POST['stulName'];
    $dob = $_POST['stuDob'];
    $adStreet = $_POST['stuAdStreet'];
    $adCity = $_POST['stuAdCity'];
    $adDistrict = $_POST['stuAdDistrict'];
    $religion = $_POST['stuReligion'];
    $enteredDate = $_POST['stuEnteredDate'];
    $enteredGrade = $_POST['stuEnteredGrade'];
    $email = $_POST['stuEmail'];
    $contactNo = $_POST['stuContactNo'];
    $gender = $_POST['stuGender'];

$sql = "INSERT INTO student (admissionNo, fName, mName, lName, dob, adStreet, adCity, adDistrict, religion, enteredDate, enteredGrade, email, contactNo, gender) VALUES
 ($admissionNo, '$fName', '$mName', '$lName', '$dob', '$adStreet', '$adCity', '$adDistrict', '$religion', '$enteredDate', '$enteredGrade' '$email', '$contactNo', '$gender');";
echo $admissionNo;
echo $sql;
$sql2="INSERT INTO `student` (`admissionNo`, `fName`, `mName`, `lName`, `dob`, `adStreet`, `adCity`, `adDistrict`, `religion`, `enteredDate`, `enteredGrade`, `email`, `contactNo`, `gender`) 
VALUES ('ST2000002', 'a', 'aa', 'a', '2020-10-13', 'ddddddddddd', 'daaaaaaaaaaaaaaaaaas', 'aaaaaaaaaa', 'aaaaaaaaaa', '2020-10-13', 'www', 'wwwwww', 'sssssss', 'cccc')";
if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
	echo 'alert("Details Added");';
	//echo 'window.location.href="../driver.php";';
    echo '</script>';
    echo "dd";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>
