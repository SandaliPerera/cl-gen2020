<?php
//require_once('cl_gen.php');
require_once '../config/conn.php';

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

    $pID = $_POST['pID'];
    $pName = $_POST['parentName'];
    $pNIC = $_POST['pNIC'];
    $pOcc = $_POST['occ'];
    $pContact = $_POST['Pcontact'];
    $pEmail = $_POST['pEmail'];

$sql = "INSERT INTO student (admissionNo, fName, mName, lName, dob, adStreet, adCity, adDistrict, religion, enteredDate, enteredGrade, email, contactNo, gender) VALUES
 ('$admissionNo', '$fName', '$mName', '$lName', '$dob', '$adStreet', '$adCity', '$adDistrict', '$religion', '$enteredDate', '$enteredGrade', '$email', '$contactNo', '$gender')";

 $sql1 = "INSERT INTO parent (parentID, name,  nic, occupation, contactNo, admissionNo, email) VALUES
 ('$pID', '$pName', '$pNIC', '$pOcc', '$pContact', '$admissionNo', '$pEmail')";

 $update_query1 = "UPDATE user SET isActivated = '1' WHERE userID = '$admissionNo'";
 $update_query2 = "UPDATE user SET isActivated = '1' WHERE userID = '$pID'";
 

if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE && $conn->query($update_query1) && $conn->query($update_query2) ) {
    echo '<script language="javascript">';
    echo 'alert("Details Added");';
    echo '</script>';
	header('Location: ../public/office/o_studentsList.php');


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>
