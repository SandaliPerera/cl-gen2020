<?php
    session_start();

    if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
        $error = "Please Login!";
        header('Location: ../common/loginFile.php?error='.$error);
    }elseif($_SESSION['userType'] == 'officer'){
      
      $dutyID = array();
      $dutyID = $_SESSION['dutyID'];

      if (in_array("d4", $dutyID)) {
	?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Requests</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link rel="stylesheet" href="../css/register.css " type="text/css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/profile.css">
    <link type="text/css" rel="stylesheet" href="../css/view.css">
    <link type="text/css" rel="stylesheet" href="../css/pop.css">
</head>
<body>
    <div id="officeNav"></div>

    </div>
    <div class="content">

        <h1 style="color:#6a7480;">Requests List</h1>
        <form class="search" action="of_addStudentDetails.html">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Search</button>
        </form>

        <br>
        <br>
        <br>
        <div class="card">

            <br>
            <br>

            <hr>
            <table>
                <tr>
                    <th>Request ID</th>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Student email</th>
                    <th>View Request</th>
                    <th>Delete Request</th>


                </tr>
                <tr>
                    <td>Req1234</td>
                    <td>S1234</td>
                    <td>A.B.C. Student</td>
                    <td>Student@gmail.com</td>
                    <td>

                        <button id="character-btn" class="btn editbtn">View Request</button>
                        <div id="character-form" class="model">
                            <div class="modal-content">
                                <span class="close1">&times;</span>
                                <h2>Request Form</h2>
                                <form>
                                    <hr>
                                    <label for="userID"><b>Student Admission Number</b></label>
                                    <input type="text" value="ST2000001" name="id">

                                    <label for="reason"><b>Reason for request</b></label>
                                    <textarea id="w3review" name="w3review" rows="4" cols="50">March. Districts of Colombo, Gampaha and Kalutara - which have been identified as high risk areas - were given an eight-hour break on 24 March. Since then, Kandy and Jaffna Districts have been added to the high risk area list. And, last week, the authorities identified the Ratnapura and Pelmadulla areas as high risk as well. Authorities are working hard to control the situation, but the curfew will remain in place, at least for the time being. Until this year, nothing prevented Avurudu celebrations and festivities from going ahead - floods, droughts, other pandemics, disasters, tsunami, a 30-year war, and the list goes on.</textarea>
                                    <br>

                                    <button type="submit" class="registerbtn">Back</button>
                                    <hr>
                                </form>
                            </div>
                        </div>

                    </td>
                    <td><button class="btn dltbtn" type="submit">Delete</button></td>
                </tr>
            </table>
        </div>
    </div>

    <script>
    var form1 = document.getElementById("character-form");

    var characterbtn = document.getElementById("character-btn");

    var close1 = document.getElementsByClassName("close1")[0];
    var close2 = document.getElementsByClassName("close2")[0];

    characterbtn.onclick = function() {
        form1.style.display = "block";
    }

    close1.onclick = function() {
        form1.style.display = "none";
    }
    close2.onclick = function() {
        form2.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
</body>

</html>

<?php }} ?>