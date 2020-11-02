<?php 

require_once '../config/conn.php';

if (isset($_POST['register'])){

    if (empty($_POST['add_no']) ||  empty($_POST['fname']) ||  empty($_POST['mname']) ||  empty($_POST['lname']) ||  empty($_POST['dob']) || empty($_POST['adStreet']) || empty($_POST['adCity']) ||  empty($_POST['adDistrict']) ||  empty($_POST['religion']) ||  empty($_POST['enteredDate']) ||  empty($_POST['nic']) ||  empty($_POST['contactNO']) || empty($_POST['enteredDate'])){

    }else{
        header ("location: register.html?empty");
    }

}else{
    header ("location: register.html");

}

