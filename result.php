<?php

if(empty($_GET['c'])){
  $club = "Cricket";
}else{
  $club = $_GET['c'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- IONICON STYLE SHEET FOR BEAUTIFUL ICONS -->
<link href="assets/css/ionicons.css" rel="stylesheet" />
<!-- STYLE FOR OPENING IMAGE IN POPUP USING FANCYBOX-->
<link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
<!-- CUSTOM CSS -->
<link href="assets/css/style.css" rel="stylesheet" />

<!-- fav-icon -->
<link rel="icon" type="image/x-icon" href="assets/img/pcte.png">
  <title>Document</title>
  <style>
    .parentdiv{
      width:100%;background-color: rgb(106, 202, 50);margin-top: 83px;padding: 10px;
    }.flex{
      display: flex;justify-content: center;align-items: center;
    }.flex a{
      padding: 2px 10px;text-transform: uppercase;text-decoration: none;color: white;font-weight: 700px;
    }.flex a:hover{
      text-decoration: underline;
    }
  </style>
</head>
<body>
  
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
               
            </div>

        </div>
    </div>

<div class="container-fluid parentdiv">
  <div class="flex">
    <a href="result.php?c=Cricket">Cricket</a>
    <a href="result.php?c=Volleyball">Volleyball</a>
    <a href="result.php?c=Basketball">Basketball</a>
    <a href="result.php?c=Soccer">Soccer</a>
    <a href="result.php?c=Chess">Chess</a>
    <a href="result.php?c=Badminton">Badminton</a>
    <a href="result.php?c=Pool">Pool</a>
    <a href="result.php?c=Athletics">Athletics</a>

  </div>
  <div class="flex">
    <a href="result.php?c=Dance">Dance</a>
    <a href="result.php?c=">Music</a>
    <a href="result.php?c=">CSR</a>
    <a href="result.php?c=">EOA</a>
    <a href="result.php?c=">Fashion</a>
    <a href="result.php?c=">Literary</a>
    <a href="result.php?c=">Photography</a>
    <a href="result.php?c=">Theatre</a>
    <a href="result.php?c=">Travel</a>
  </div>
</div>
 
<!-- ............................................. -->

<div class="container">
<h1><center> <u> Result of (Cricket)  Club Elections 2021-2022 </center></u></h1>
<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "vote";



// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// 

include_once "config.php";


// .................president grah......................

$name_president = array();
$vote_president = array();

$sql_president = "SELECT * FROM `nominees` WHERE `designation` = 'President' and `club` = '$club'";
$result_president = mysqli_query($conn, $sql_president);

$tj_president = 1;

if (mysqli_num_rows($result_president) > 0) {
  while($row_president = mysqli_fetch_assoc($result_president)) {
        $tmp_president = $row_president['sno'];
         $sql_count_president = "SELECT * FROM `tbl_vote` WHERE `president` = '{$tmp_president}'";
            $result_count_president = mysqli_query($conn, $sql_count_president);
            $tmp_count_president = mysqli_num_rows($result_count_president);
            
            $name_president[$tj_president] = $row_president['name'];
            $vote_president[$tj_president] = $tmp_count_president;
            $tj_president++;
} 
}else{
  echo "0 results";
}

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<!-- <canvas id="myChart_president" style="width:100%;max-width:600px"></canvas> -->
<div class="col-sm-12 col-md-6 col-lg-4"><canvas id="myChart_president" style="width:100%;max-width:600px"></canvas></div>


<?php
echo '<script>
var xValues = [';


for($i=1;$i<$tj_president;$i++)
{
    echo '"'.$name_president[$i].'",';
}

echo '""];
var yValues = [';

for($i=1;$i<$tj_president;$i++)
{
    echo '"'.$vote_president[$i].'",';
}

echo '0];
var barColors = [';


for($i=1;$i<$tj_president;$i++)
{
    echo '"red",';
}

echo '"white"];

new Chart("myChart_president", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "President"
    }
  }
});
</script>';

?>
<!-- .................Vice president Grahph ...................... -->


<?php
$name_vice_president = array();
$vote_vice_president = array();

$sql_vice_president = "SELECT * FROM `nominees` WHERE `designation` = 'Vice President'  and `club` = '$club'";
$result_vice_president = mysqli_query($conn, $sql_vice_president);

$tj_vice_president = 1;

if (mysqli_num_rows($result_vice_president) > 0) {
  while($row_vice_president = mysqli_fetch_assoc($result_vice_president)) {
        $tmp_vice_president = $row_vice_president['sno'];
         $sql_count_vice_president = "SELECT * FROM `tbl_vote` WHERE `vice_president` = '{$tmp_vice_president}'";
            $result_count_vice_president = mysqli_query($conn, $sql_count_vice_president);
            $tmp_count_vice_president = mysqli_num_rows($result_count_vice_president);
            
            $name_vice_president[$tj_vice_president] = $row_vice_president['name'];
            $vote_vice_president[$tj_vice_president] = $tmp_count_vice_president;
            $tj_vice_president++;
} 
}else{
  echo "0 results";
}


?>



<div class="col-sm-12 col-md-6 col-lg-4"><canvas id="myChart_vice_president" style="width:100%;max-width:600px"></canvas></div>



<?php
echo '<script>
var xValues = [';

for($i=1;$i<$tj_vice_president;$i++)
{
    echo '"'.$name_vice_president[$i].'",';
}

echo '""];
var yValues = [';

for($i=1;$i<$tj_vice_president;$i++)
{
    echo '"'.$vote_vice_president[$i].'",';
}

echo '0];
var barColors = [';


for($i=1;$i<$tj_vice_president;$i++)
{
    echo '"red",';
}

echo '"white"];

new Chart("myChart_vice_president", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Vice President"
    }
  }
});
</script>';

?>

<!-- ...................................Gen Secretary Graph................................................ -->


<?php
$name_general_secretary = array();
$vote_general_secretary = array();

$sql_general_secretary = "SELECT * FROM `nominees` WHERE `designation` = 'General Secretary'  and `club` = '$club'";
$result_general_secretary = mysqli_query($conn, $sql_general_secretary);

$tj_general_secretary = 1;

if (mysqli_num_rows($result_general_secretary) > 0) {
  while($row_general_secretary = mysqli_fetch_assoc($result_general_secretary)) {
        $tmp_general_secretary = $row_general_secretary['sno'];
         $sql_count_general_secretary = "SELECT * FROM `tbl_vote` WHERE `gen_secretary` = '{$tmp_general_secretary}'";
            $result_count_general_secretary = mysqli_query($conn, $sql_count_general_secretary);
            $tmp_count_general_secretary = mysqli_num_rows($result_count_general_secretary);
            
            $name_general_secretary[$tj_general_secretary] = $row_general_secretary['name'];
            $vote_general_secretary[$tj_general_secretary] = $tmp_count_general_secretary;
            $tj_general_secretary++;
} 
}else{
  echo "0 results";
}


?>


<!-- <canvas id="myChart_general_secretary" style="width:100%;max-width:600px"></canvas> -->
<div class="col-sm-12 col-md-6 col-lg-4"><canvas id="myChart_general_secretary" style="width:100%;max-width:600px"></canvas></div>



<?php
echo '<script>
var xValues = [';

for($i=1;$i<$tj_general_secretary;$i++)
{
    echo '"'.$name_general_secretary[$i].'",';
}

echo '""];
var yValues = [';

for($i=1;$i<$tj_general_secretary;$i++)
{
    echo '"'.$vote_general_secretary[$i].'",';
}

echo '0];
var barColors = [';


for($i=1;$i<$tj_general_secretary;$i++)
{
    echo '"red",';
}

echo '"white"];

new Chart("myChart_general_secretary", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "General Secretary"
    }
  }
});
</script>';

?>


<!-- ....................................Secretary............................................... -->


<?php
$name_secretary = array();
$vote_secretary = array();

$sql_secretary = "SELECT * FROM `nominees` WHERE `designation` = 'Secretary'  and `club` = '$club'";
$result_secretary = mysqli_query($conn, $sql_secretary);

$tj_secretary = 1;

if (mysqli_num_rows($result_secretary) > 0) {
  while($row_secretary = mysqli_fetch_assoc($result_secretary)) {
        $tmp_secretary = $row_secretary['sno'];
         $sql_count_secretary = "SELECT * FROM `tbl_vote` WHERE `secretary` = '{$tmp_secretary}'";
            $result_count_secretary = mysqli_query($conn, $sql_count_secretary);
            $tmp_count_secretary = mysqli_num_rows($result_count_secretary);
            
            $name_secretary[$tj_secretary] = $row_secretary['name'];
            $vote_secretary[$tj_secretary] = $tmp_count_secretary;
            $tj_secretary++;
} 
}else{
  echo "0 results";
}


?>


<!-- <canvas id="myChart_secretary" style="width:100%;max-width:600px"></canvas> -->

        <div class="col-sm-12 col-md-6 col-lg-4"><canvas id="myChart_secretary" style="width:100%;max-width:600px"></canvas></div>

<?php
echo '<script>
var xValues = [';

for($i=1;$i<$tj_secretary;$i++)
{
    echo '"'.$name_secretary[$i].'",';
}

echo '""];
var yValues = [';

for($i=1;$i<$tj_secretary;$i++)
{
    echo '"'.$vote_secretary[$i].'",';
}

echo '0];
var barColors = [';


for($i=1;$i<$tj_secretary;$i++)
{
    echo '"red",';
}

echo '"white"];

new Chart("myChart_secretary", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Secretary"
    }
  }
});
</script>';
?>

<!-- .................Treasurer Graph...................... -->


<?php
$name_treasurer = array();
$vote_treasurer = array();

$sql_treasurer = "SELECT * FROM `nominees` WHERE `designation` = 'treasurer'  and `club` = '$club'";
$result_treasurer = mysqli_query($conn, $sql_treasurer);

$tj_treasurer = 1;

if (mysqli_num_rows($result_treasurer) > 0) {
  while($row_treasurer = mysqli_fetch_assoc($result_treasurer)) {
        $tmp_treasurer = $row_treasurer['sno'];
         $sql_count_treasurer = "SELECT * FROM `tbl_vote` WHERE `treasurer` = '{$tmp_treasurer}'";
            $result_count_treasurer = mysqli_query($conn, $sql_count_treasurer);
            $tmp_count_treasurer = mysqli_num_rows($result_count_treasurer);
            
            $name_treasurer[$tj_treasurer] = $row_treasurer['name'];
            $vote_treasurer[$tj_treasurer] = $tmp_count_treasurer;
            $tj_treasurer++;
} 
}else{
  echo "0 results";
}


?>


<!-- <canvas id="myChart_treasurer" style="width:100%;max-width:600px"></canvas> -->
<div class="col-sm-12 col-md-6 col-lg-4"><canvas id="myChart_treasurer" style="width:100%;max-width:600px"></canvas></div>
    
</div>

<?php
echo '<script>
var xValues = [';

for($i=1;$i<$tj_treasurer;$i++)
{
    echo '"'.$name_treasurer[$i].'",';
}

echo '""];
var yValues = [';

for($i=1;$i<$tj_treasurer;$i++)
{
    echo '"'.$vote_treasurer[$i].'",';
}

echo '0];
var barColors = [';


for($i=1;$i<$tj_treasurer;$i++)
{
    echo '"red",';
}

echo '"white"];

new Chart("myChart_treasurer", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Treasurer"
    }
  }
});
</script>';


?>

</div>
<footer style="background-color:white;">
        &copy 2022 designed & developed by | Er <a href="https://www.linkedin.com/in/sehran-rasool-jan-278b93211/">Sehran Rasool</a>  Er <a href="https://www.linkedin.com/in/mohd-shavez-2340b0213/">Mohd Shavez</a>  & Er <a href="#">Tejinder Singh</a>
    </footer>

</body>
</html>

