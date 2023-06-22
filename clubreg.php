<?php include 'preloader.php';
// Connect to the Database 
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "vote";

// // Create a connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// // Die if connection was not successful
// if (!$conn){
//     die("Sorry we failed to connect: ". mysqli_connect_error());
// }

include_once "config.php";

session_start();

$tjclubname = $_SESSION['clubname'];

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- IONICON STYLE SHEET FOR BEAUTIFUL ICONS -->
  <link href="assets/css/ionicons.css" rel="stylesheet" />
  <!-- STYLE FOR OPENING IMAGE IN POPUP USING FANCYBOX-->
  <link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
  <!-- CUSTOM CSS -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <title>let's Vote</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->

  <!-- BOOTSTRAP CORE CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- IONICON STYLE SHEET FOR BEAUTIFUL ICONS -->
  <link href="assets/css/ionicons.css" rel="stylesheet" />
  <!-- STYLE FOR OPENING IMAGE IN POPUP USING FANCYBOX-->
  <link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
  <!-- CUSTOM CSS -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        
    <![endif]-->
<!-- fav-icon -->
<link rel="icon" type="image/x-icon" href="assets/img/pcte.png">

</head>

<body>


  <div data-spy="scroll" data-target=".navbar-fixed-top">

    <div class="navbar navbar-default navbar-fixed-top scroll-me">
      <!-- pass scroll-me class above a tags to starts scrolling -->
      <div class="container" style="display:inline;">
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
          <ul class="nav navbar-nav navbar-right" style="    float: right !important;  display: flex; margin-right:15px; flex-direction: row;">
            <li><a href="clubreg.php">HOME</a></li>

            <li><a href="logout.php">LOGOUT</a></li>
          </ul>
        </div>

      </div>
    </div>
    <!-- NAVBAR END  -->

    <div class="container my-6">
      <center style="margin-top: 120px;margin-bottom:20px;">
        <h2>Select Member to Vote </h2>
      </center>
      <center style="margin-bottom:0;color:#990000;text-decoration:underline">
        <h2><?php echo $tjclubname ?> Club </h2>
      </center>

      <br>
      <div class="measures" style="
         display: flex;
    justify-content: start;
    margin: 0;
    font-weight: 700;
    flex-direction: column;
      
      ">



        <p style="color:black;margin-right:30px;margin-bottom:0;">Total Voters: <span id="tjvoters">Loading...</span></p>
        <p style="color:red;margin-right:30px;margin-bottom:0;">Pending Voters: <span id="tjpendingvoters">Loading...</span></p>
        <p style="color:green;margin-right:30px;margin-bottom:0;">Already Voted: <span id="tjvoted">Loading...</span></p>
      </div>
      <br>



      <table class="table" id="myTable">
        <thead>
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Student ID</th>
            <th scope="col">Student Name</th>
            <th scope="col">Batch</th>
            <th scope="col">Course</th>
            <th scope="col">Section</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $tjtotalvoters = 0;
          $tjalreadyvoted = 0;


          // $sql = "SELECT sid,name,batch,course,section FROM `std_data` where section='A'";
          $sql = "SELECT * FROM `std_data`  where club1 ='{$tjclubname}' or club2 ='{$tjclubname}' or club3 ='{$tjclubname}' or club4 ='{$tjclubname}' or club5 ='{$tjclubname}'";
          // $sql = "SELECT sid,name,batch,course,section FROM `std_data` where club1 or club2 or  club3 or  club4 or club5=='Cricket'";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            $tjtotalvoters++;


            $tjcheckcount = 0;

            if ($row['club1'] == $tjclubname) {
              $tjcheckcount = 1;
            } else if ($row['club2'] == $tjclubname) {
              $tjcheckcount = 2;
            } else if ($row['club3'] == $tjclubname) {
              $tjcheckcount = 3;
            } else if ($row['club4'] == $tjclubname) {
              $tjcheckcount = 4;
            } else if ($row['club5'] == $tjclubname) {
              $tjcheckcount = 5;
            } else {
              $tjcheckcount = 0;
            }



            if ($row['c' . $tjcheckcount . '_vote'] == 0) {


              $sno = $sno + 1;
              $sid = $row['sid'];
              echo "<tr>
            <th scope='row'>" . $sno . "</th>
            <td>" . $row['sid'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['batch'] . "</td>
            <td>" . $row['course'] . "</td>
            <td>" . $row['section'] . "</td>
           
            <td>
            <a href='election.php?cid=".$tjclubname."&sid=" . $sid . "&clubstatus=" . $tjcheckcount . "'>
            <button class='vote btn btn-sm btn-primary'>Vote</button> </a> </td>

          </tr>";
            } else {
              $tjalreadyvoted++;
              $sno = $sno + 1;
              $sid = $row['sid'];
              echo "<tr>
                <th scope='row'>" . $sno . "</th>
                <td>" . $row['sid'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['batch'] . "</td>
                <td>" . $row['course'] . "</td>
                <td>" . $row['section'] . "</td>
               
                <td>
                <a href='#'>
                <button class='vote btn btn-sm btn-success'>Voted</button> </a> </td>
    
              </tr>";
            }
          }
          // $sid=$row['sid'];

          ?>


        </tbody>
      </table>

      <hr>

      <?php
      echo "<input type='text' id='totalvoters' value=" . $tjtotalvoters . " hidden>";
      echo "<input type='text' id='alreadyvoted' value=" . $tjalreadyvoted . " hidden>";

      ?>

      <script>
        setInterval(() => {
          let totalVoters = document.getElementById("totalvoters").value;
          let alreadyVoted = document.getElementById("alreadyvoted").value;

          document.getElementById("tjvoters").innerHTML = totalVoters;
          document.getElementById("tjpendingvoters").innerHTML = (totalVoters - alreadyVoted);

          document.getElementById("tjvoted").innerHTML = alreadyVoted;


        }, 2000);
      </script>



    </div>
    <hr>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
      </script> <script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity = "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin = "anonymous" >
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
     let vote = document.getElementsByClassName('vote');

      Array.from(vote).forEach((element) => {
        sid = e.target.id.substr(1);

        element.addEventListener("click", (e) => {

          location.href = 'election.php?cid=Cricket&sid=';
          // TODO: Create a form and use post request to submit a form
        });
      });

      $(document).ready(function() {
        $('#myTable').DataTable();

      });
    </script>

  </div>
  
</body>

</html>