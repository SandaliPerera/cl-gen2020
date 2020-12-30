<?php
    session_start();

    if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
        $error = "Please Login!";
        header('Location: ../common/loginFile.php?error='.$error);
    }elseif($_SESSION['userType'] == 'officer'){
      
      $dutyID = array();
      $dutyID = $_SESSION['dutyID'];

      if (in_array("d2", $dutyID)) {
	?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>G.C.E. O/L Examination Results - 2016</title>
    <link rel="stylesheet" href="../css/view.css " type="text/css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/users.css">
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/pop.js"></script>
    <script src="../js/nav.js"></script>
</head>

<body>
    <div id="officeNav"></div>
    <div class="content">
        <br>
        <h1 style="color:#6a7480;">G.C.E. O/L Examination Results - 2016</h1>
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


            <table>
                <hr>
                <tr>
                    <th rowspan="2">Student Index Number</th>
                    <th rowspan="2">O/L Index Number</th>
                    <th rowspan="2">Student Name</th>
                    <th colspan="10">Subjects</th>
                </tr>

                <tr>
                    <th>Mathematics</th>
                    <th>Sinhala</th>
                    <th>History</th>
                    <th>English</th>
                    <th>Buddhism</th>
                    <th>Science</th>
                    <th>Commerce</th>
                    <th>ICT</th>
                    <th>Dancing</th>
                    <th>Music</th>
                </tr>
                <tr>
                    <td>S12345</td>
                    <td>65610</td>
                    <td>A.B.C. Student</td>
                    <td>A</td>
                    <td>C</td>
                    <td>B</td>
                    <td>A</td>
                    <td>A</td>
                    <td>A</td>
                    <td>A</td>
                    <td>B</td>
                    <td>A</td>
                    <td>C</td>
                </tr>


            </table>

        </div>


    </div>

</body>

</html>

<?php }} ?>