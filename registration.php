<?php
$sehran = array();
$tj = 0;
include_once "config.php";
// $con = $conn;
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>PCTE Voting System</title>
    <!-- favicon image on title -->
    <link rel="icon" type="image/x-icon" href="assets/img/pcte.png">

    <!-- BOOTSTRAP CORE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- IONICON STYLE SHEET FOR BEAUTIFUL ICONS -->
    <link href="assets/css/ionicons.css" rel="stylesheet" />
    <!-- STYLE FOR OPENING IMAGE IN POPUP USING FANCYBOX-->
    <link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
    <!-- CUSTOM CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <a href="https://icons8.com/icon/P1VBH8DnRvMt/up-arrow">Up Arrow icon by Icons8</a>
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #myBtn {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Fixed/sticky position */
            bottom: 20px;
            /* Place the button at the bottom of the page */
            right: 30px;
            /* Place the button 30px from the right */
            z-index: 99;
            /* Make sure it does not overlap */
            border: none;
            /* Remove borders */
            outline: none;
            /* Remove outline */
            background-color: #990000;
            /* Set a background color */
            color: white;
            /* Text color */
            cursor: pointer;
            /* Add a mouse pointer on hover */
            padding: 1px;
            /* Some padding */
            border-radius: 5px;
            /* Rounded corners */
            font-size: 18px;
            /* Increase font size */
        }

        .wrapper {
            margin-top: 100px;
            margin-bottom: 100px;
            display: block;
            padding: 0 40px;
        }

        .row {
            display: flex;
            padding-right: 5px;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
        }

        .row2 {
            margin: 0% 30%;
        }

        .hidden {
            display: none;
        }

        .button {
            float: right;

        }

        h1 {
            color: #990000;
            text-decoration: underline;
            text-align: center;
            font-size: 25px;
        }

        @media screen and (max-width:550px) {
            .row {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }

            .btn-block {
                display: block;
                width: 40%;
                font-size: 18px;
            }

            .row2 {
                margin: 0% 0%;
            }
            bt{
                border: none;
            }
        }
    </style>

</head>


<body data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- ........................Nav start................... -->
    <div class="navbar navbar-default navbar-fixed-top scroll-me">
        <!-- pass scroll-me class above a tags to starts scrolling -->
        <div class="container" style="display: block;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#">
                    <img src="assets/img/pcte.png"> </a>

            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right" style="display: inline-block;">
                    <li><a href="#header">HOME</a></li>
                    </li>

                    <!-- <li><a href="logout.php">LOGOUT</a></li> -->
                </ul>
            </div>

        </div>
    </div>
    <!-- NAVBAR END  -->

    <div class="wrapper container">
        <form action="" method="post">

            <div class="row">

                <div>
                    Select Batch
                    <select class="form-select" name="batch" aria-label="Default select example">
                        <option selected>Select Batch</option>
                      
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <!-- <option value="2027">2027</option>
                        <option value="2028">2028</option> -->
                    </select>

                </div>
                <div>
                    Select Cource
                    <select class="form-select" name="course" aria-label="Default select example">
                        <option selected>Select Cource</option>
                        <!-- <option value="MBAIB">MBA International Business</option> -->
                        <option value="MBA">MBA </option>
                        <option value="MCA">MCA</option>
                        <option value="CSE">Computer Science Engineering</option>
                        <option value="MECH">Mechanical Engineering</option>
                        <option value="CIVIL">Civil Engineering</option>
                        <option value="BCA">BCA</option>
                        <option value="BPharma">B-Pharma.</option>
                        <option value="DPharma">D-Pharma.</option>
                        <option value="MLS">MLS</option>
                        <option value="BJMC">BJMC</option>
                        <option value="BBA">BBA</option>
                        <option value="BCOM">B.Com</option>
                        <option value="BT">B.Sc Biotech</option>
                        <option value="Agriculture">B.Sc Agriculture</option>
                        <option value="BTTM">BTTM</option>
                        <option value="BHMCT">BHMCT</option>
                        <option value="FD">Fashion Designing</option>
                   
                    </select>
                </div>

                <div>

                    Select Section
                    <select class="form-select" name="section" aria-label="Default select example">
                        <option  >Select Section</option>
                        <option selected value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="Physics">Physics</option>
                        <option value="Chemistry">Chemistry</option>
                       
                     
                    </select> <br>
                </div>
            </div>
            <div class="row2">
                <button type="submit" name="b1" class="btn btn-primary btn-sm btn-block">Submit</button>
            </div>
        </form>
        <!-- ..................End form................... -->




        <h1>
            Student Membership Registration
        </h1>
        <div id="table1">

            <table class="table table-hover" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Student Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Club 1</th>
                        <th scope="col">Club 2</th>
                        <th scope="col">Club 3</th>
                        <th scope="col">Club 4</th>
                        <th scope="col">Club 5</th>




                    </tr>
                </thead>
                <tbody>


                    <form action="" method="post">
                        <?php
                        if (isset($_POST['b1'])) {
                            $section = $_POST['section'];
                            $course = $_POST['course'];
                            $batch = $_POST['batch'];

                            // $servername = "localhost";
                            // $username = "root";
                            // $password = "";
                            // $databasename = "vote";

                            // // CREATE CONNECTION
                            // $conn = mysqli_connect($servername, $username, $password, $databasename);

                            // // GET CONNECTION ERRORS
                            // if (!$conn) {
                            //     die("Connection failed: " . mysqli_connect_error());
                            // }

                            $query = "SELECT sid, name ,batch , section ,course FROM std_data where section='$section' and course='$course' and batch='$batch'";
                            // $query="SELECT * FROM (SELECT sid, name ,batch , section FROM std_data where sid not in (SELECT sid FROM orders)) ";




                            // FETCHING DATA FROM DATABASE
                            $result = mysqli_query($conn, $query);
                            if (mysqli_num_rows($result) > 0) {
                                // OUTPUT DATA OF EACH ROW
                                $sno = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $sehran[$tj] = $row['sid'];
                                    $tj++;

                                    $sno = $sno + 1;
                                    echo "<tr>
                <th scope='row'>" . $sno . "</th>
                <td>" . $row['sid'] . "</td>
                <td>" . $row['name'] . "</td>
                
              
                <td>
                    <select class='form-select' name='club1".$row['sid']."' aria-label='Default select example'>";
                        echo "<option value='null'>Select Club</option>";
                        // <option value='Cricket' >Cricket</option>
                        // <option value='Volleyball'>Volleyball</option>
                        // <option value='Soccer'>Soccer</option>
                        // <option value='Basketball'>Basketball</option>
                        // <option value='Badminton'>Badminton</option>
                        // <option value='Pool'>Pool</option>
                        // <option value='Athletics'>Athletics</option>
                        // <option value='Chess'>Chess</option>
                        // <option value='Dance'>Dance</option>
                        // <option value='CSR'>CSR</option>
                        // <option value='EOA'>EOA</option>
                        // <option value='Fashion'>Fashion</option>
                        // <option value='Literary'>Literary</option>
                        // <option value='Music'>Music</option>
                        // <option value='Photography'>Photography</option>
                        // <option value='Physical Fitness'>Physical Fitness</option>
                        // <option value='Theatre'>Theatre</option>
                        // <option value='Travel'>Travel</option>

                        $sqlclubs = "SELECT * FROM `tbl_club`";
                        $resultclubs = $conn->query($sqlclubs);
                        
                        if ($resultclubs->num_rows > 0) {
                          // output data of each row
                          while($rowclubs = $resultclubs->fetch_assoc()) {
                            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

                            $sqltjcheck = "SELECT * FROM `std_data` WHERE `sid` = '{$row['sid']}' AND `club1` = '{$rowclubs['clubname']}'";
                            $resulttjcheck = $conn->query($sqltjcheck);
                            
                            if ($resulttjcheck->num_rows > 0) {
                                echo "<option value='".$rowclubs['clubname']."' selected>".$rowclubs['clubname']."</option>";
                            }else{
                                echo "<option value='".$rowclubs['clubname']."'>".$rowclubs['clubname']."</option>";
                            }

                            
                          }
                        }


                     echo "
                      </select>
                </td>

                
                <td>
                    <select class='form-select' name='club2".$row['sid']."' aria-label='Default select example'>
                        <option value='null' >Select Club</option>";

                        $sqlclubs = "SELECT * FROM `tbl_club`";
                        $resultclubs = $conn->query($sqlclubs);
                        
                        if ($resultclubs->num_rows > 0) {
                          // output data of each row
                          while($rowclubs = $resultclubs->fetch_assoc()) {
                            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

                            $sqltjcheck = "SELECT * FROM `std_data` WHERE `sid` = '{$row['sid']}' AND `club2` = '{$rowclubs['clubname']}'";
                            $resulttjcheck = $conn->query($sqltjcheck);
                            
                            if ($resulttjcheck->num_rows > 0) {
                                echo "<option value='".$rowclubs['clubname']."' selected>".$rowclubs['clubname']."</option>";
                            }else{
                                echo "<option value='".$rowclubs['clubname']."'>".$rowclubs['clubname']."</option>";
                            }

                            
                          }
                        }

                        echo "
                      </select>
                </td>


                <td>
                    <select class='form-select' name='club3".$row['sid']."' aria-label='Default select example'>
                        <option value='null'>Select Club</option>";

                        $sqlclubs = "SELECT * FROM `tbl_club`";
                        $resultclubs = $conn->query($sqlclubs);
                        
                        if ($resultclubs->num_rows > 0) {
                          // output data of each row
                          while($rowclubs = $resultclubs->fetch_assoc()) {
                            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

                            $sqltjcheck = "SELECT * FROM `std_data` WHERE `sid` = '{$row['sid']}' AND `club3` = '{$rowclubs['clubname']}'";
                            $resulttjcheck = $conn->query($sqltjcheck);
                            
                            if ($resulttjcheck->num_rows > 0) {
                                echo "<option value='".$rowclubs['clubname']."' selected>".$rowclubs['clubname']."</option>";
                            }else{
                                echo "<option value='".$rowclubs['clubname']."'>".$rowclubs['clubname']."</option>";
                            }

                            
                          }
                        }

                        echo "
                      
                      </select>
                </td>


                <td>
                    <select class='form-select' name='club4".$row['sid']."' aria-label='Default select example'>
                        <option  value='null'>Select Club</option>
                        ";


                        $sqlclubs = "SELECT * FROM `tbl_club`";
                        $resultclubs = $conn->query($sqlclubs);
                        
                        if ($resultclubs->num_rows > 0) {
                          // output data of each row
                          while($rowclubs = $resultclubs->fetch_assoc()) {
                            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

                            $sqltjcheck = "SELECT * FROM `std_data` WHERE `sid` = '{$row['sid']}' AND `club4` = '{$rowclubs['clubname']}'";
                            $resulttjcheck = $conn->query($sqltjcheck);
                            
                            if ($resulttjcheck->num_rows > 0) {
                                echo "<option value='".$rowclubs['clubname']."' selected>".$rowclubs['clubname']."</option>";
                            }else{
                                echo "<option value='".$rowclubs['clubname']."'>".$rowclubs['clubname']."</option>";
                            }

                            
                          }
                        }


                        echo "
                      
                      </select>
                </td>


                <td>
                    <select class='form-select' name='club5".$row['sid']."' aria-label='Default select example'>
                        <option value='null'>Select Club</option>";

                        $sqlclubs = "SELECT * FROM `tbl_club`";
                        $resultclubs = $conn->query($sqlclubs);
                        
                        if ($resultclubs->num_rows > 0) {
                          // output data of each row
                          while($rowclubs = $resultclubs->fetch_assoc()) {
                            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

                            $sqltjcheck = "SELECT * FROM `std_data` WHERE `sid` = '{$row['sid']}' AND `club5` = '{$rowclubs['clubname']}'";
                            $resulttjcheck = $conn->query($sqltjcheck);
                            
                            if ($resulttjcheck->num_rows > 0) {
                                echo "<option value='".$rowclubs['clubname']."' selected>".$rowclubs['clubname']."</option>";
                            }else{
                                echo "<option value='".$rowclubs['clubname']."'>".$rowclubs['clubname']."</option>";
                            }

                            
                          }
                        }

                        echo "
                      
                      
                      </select>
                </td>


                
                </tr>";


                
                                }

//                                echo "<script>
//     localStorage.setItem('sehran', '".implode(',', $sehran)."');  
//     localStorage.setItem('tj', '".$tj."');
// </script>";

// $_SESSION['tjj'] = $tj;4

// echo $tj;

                            } else {
                                echo "0 results";
                            }

                            $conn->close();
                        }

                       

                        ?>
                </tbody>
            </table>

        </div>

        <div class="button">
            <input type="text" name="tjj" value="<?php echo $tj?>" id="" readonly hidden>
            <input type="text" name="sehrann" value="<?php echo implode(',', $sehran)?>" id="" readonly hidden>
            <input type="submit" class="bg-primary bt " name="updateall" value="Update All">
        </div>

        </form>
        <!-- ---end table 1--- -->




        <!-- --print button 1 start-- -->
        <script type="text/javascript">
            function printbtn1() {
                var divElementContents = document.getElementById("table1").innerHTML;
                var windows = window.open('', '', 'height=800, width=900');
                windows.document.write('<html>');
                windows.document.write('<body > <h1>Students Not taken Membership </h1><br>');
                windows.document.write(divElementContents);
                windows.document.write('</body></html>');
                windows.document.close();
                windows.print();
            }
        </script>

        <!-- --print button 1 end-- -->

        <!-- --print button 2 start-- -->
        <script type="text/javascript">
            function printbtn2() {
                var divElementContents = document.getElementById("table2").innerHTML;
                var windows = window.open('', '', 'height=800, width=900');
                windows.document.write('<html>');
                windows.document.write('<body > <h1>Membership Table </h1><br>');
                windows.document.write(divElementContents);
                windows.document.write('</body></html>');
                windows.document.close();
                windows.print();
            }
        </script>

        <?php
        if (isset($_POST['updateall']))
         {

            $tjflag = 0;

    // echo "Clicked";


            // $servername = "localhost";
            // $username = "root";
            // $password = "";
            // $dbname = "vote";

            // // Create connection
            // $conn = new mysqli($servername, $username, $password, $dbname);
            // // Check connection
            // if ($conn->connect_error)
            //  {
            //     die("Connection failed: " . $conn->connect_error);
            //  }


            $tj = $_POST['tjj'];
            $sehran = explode(',', $_POST['sehrann']);

            
            // echo $sehran[$tj-1];

            for($hk=0;$hk<$tj;$hk++){
                $tjrollid = $sehran[$hk];

                $tjclub1 = "club1".$tjrollid;
                $tjclub2 = "club2".$tjrollid;
                $tjclub3 = "club3".$tjrollid;
                $tjclub4 = "club4".$tjrollid;
                $tjclub5 = "club5".$tjrollid;
    
                $club1 = $_POST[$tjclub1];
                $club2 = $_POST[$tjclub2];
                $club3 = $_POST[$tjclub3];
                $club4 = $_POST[$tjclub4];
                $club5 = $_POST[$tjclub5];


                // echo $club1.$club2.$club3.$club4.$club5."<br>";

                $sql = "UPDATE `std_data` SET `club1`='{$club1}',`club2`='{$club2}',`club3`='{$club3}',`club4`='{$club4}',`club5`='{$club5}' WHERE `sid` = '{$tjrollid}'";

if ($conn->query($sql) === TRUE) {
//   echo "Record updated successfully !";
$tjflag = 1;
} else {
  echo "Error updating record: " . $conn->error;
}
            }


            if($tjflag == 1){
                echo "Record updated successfully !";
            }else{
                echo "Not Able to update  !";
            }

        }
        ?>

</body>

</html>