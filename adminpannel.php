
<!-- ................................................CHOOSE NOMINEE Page........................................................................ -->
<?php include 'preloader.php';
?>



<?php  
// INSERT INTO `notes` (`sno`, `name`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
$insert = false;
$update = false;
$delete = false;
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "vote";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `nominees` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset( $_POST['snoEdit'])){
  // Update the record
    $sno = $_POST["snoEdit"];
    $name = $_POST["nameEdit"];
    $batch = $_POST["batchEdit"];
    $course = $_POST["courseEdit"];
    $section = $_POST["sectionEdit"];
    $mobile = $_POST["mobileEdit"];
    $designation = $_POST["designationEdit"];
    $club=$_POST["clubEdit"];

  // Sql query to be executed
  // $sql = "UPDATE `nominees` SET `name` = '$name' , `batch` = '$batch',`course` = '$course',`section` ='$section' ,`designation`='$designation' `club`='$club' WHERE `nominees`.`sno` = $sno";
  $sql = "UPDATE `nominees` SET `name` = '$name' , `batch` = '$batch',`course` = '$course',`section` ='$section' ,`designation`='$designation' `club`='$club' WHERE `sno` = $sno";

  $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
}
else{
    echo "We could not update the record successfully";
}
}
else{

    $name = $_POST["name"];
    $batch = $_POST["batch"];
    $course = $_POST["course"];
    $section = $_POST["section"];
    $mobile = $_POST["mobile"];
    $designation = $_POST["designation"];
    $club = $_POST["club"];


  // Sql query to be executed
  $sql = "INSERT INTO `nominees` (`name`, `batch`,`course`,`section`,`mobile`,`designation`,`club`) VALUES ('$name', '$batch','$course','$section','$mobile','$designation','$club' )";
  
  $result = mysqli_query($conn, $sql);

   
  if($result){ 
      $insert = true;
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  } 
}
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

  <title>Nominee Registration</title>
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
        <div class="container"style="display:inline;">
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
                <ul class="nav navbar-nav navbar-right" style=" float: right !important;  display: flex; margin-right:15px; flex-direction: row;">
                    <li><a href="index.php">HOME</a></li>
                  
                    <!-- <li><a href="result.php">RESULT</a></li> -->
                    <li><a href="adminlogout.php">LOGOUT</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- NAVBAR END  -->

   <!-- Edit Modal -->
   <div class="modal fade" id="editModal" tabadminpannel="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <!-- ...........form start........... -->
        <form action="adminpannel.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="nameEdit" name="nameEdit" required  aria-describedby="emailHelp">
            </div>

            Choose Batch <br>
         <select class="form-select" name="batch" aria-label="Default select example">
  <option selected>Select Batch</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
  <option value="2024">2024</option>
</select>
<br>

            Choose Cource <br>
         <select class="form-select" name="course" aria-label="Default select example">
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
<br>


Choose Section <br>
         <select class="form-select" name="section" aria-label="Default select example">
  <option selected>Select Batch</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
 

</select>
<br>

            
            <div class="form-group">
              <label for="desc">Mobile</label>
              <input type="number" class="form-control" required id="mobileEdit" name="mobileEdit" >
            </div> 
          </div>
      select post <br>
         <select class="form-select" name="designation" aria-label="Default select example">
  <option selected>Select Post</option>
  <option value="President">President</option>
  <option value="Vice President">Vice President</option>
  <option value="General Secretary">General Secretary</option>
  <option value="Secretary">Secretary</option>
  <option value="Treasurer">Treasurer</option>
</select>
<br>
select club <br>
<select class="form-select" name="club" aria-label="Default select example">
<option selected>Select Club</option>
        <option value="Cricket">Cricket</option>
        <option value="Volleyball">Volleyball</option>
        <option value="Soccer">Soccer</option>
        <option value="Basketball">Basketball</option>
        <option value="Badminton">Badminton</option>
        <option value="Pool">Pool</option>
        <option value="Investment">Investment</option>
        <option value="Chess">Chess</option>
        <option value="Dance">Dance</option>
        <option value="CSR">CSR</option>
        <option value="EOA">EOA</option>
        <option value="E Cell">E Cell</option>
        <option value="Fashion">Fashion</option>
        <option value="Literary">Literary</option>
        <option value="Music">Music</option>
        <option value="Photography">Photography</option>
        <option value="PhysicalFitness">Physical Fitness</option>
        <option value="Theatre">Theatre</option>
        <option value="Travel">Travel</option>
        <option value="Table tennis">Table tennis</option>

</select>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          
        </form>
      </div>
    </div>
  </div>

  <?php
  if($insert){
   
  echo '<script>
                    alert("Registration successfull!");
                    window.location = "adminpannel.php";
                </script>';
  }
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <div class="container my-4">
   <center style="margin-top: 120px;margin-bottom:40px;"> <h2 >Register Nominees</h2></center>  
    <form action="adminpannel.php" method="POST">

      <div class="container">
        <div class="row "style="margin-bottom: 5px;">
          <div class="col-6 form-group"<label for="Name"><b> Name</b></label>
            <input type="text" class="form-control" id="title" name="name" required aria-describedby="emailHelp"></div>
          <div class="col-6 form-group"> <label for="mobile">Mobile </label>
            <input type="number" class="form-control" id="description" required name="mobile" ></div>
        </div>
      </div>
    

<div class="container-fluid" >
  <div class="row ">
   
      <div class="col-sm-4 col-12">   <b>Choose Batch</b> <br>
         <select class="form-select" name="batch" aria-label="Default select example">
  <option selected>Select Batch</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
  <option value="2024">2024</option>
  <option value="2025">2025</option>
  <option value="2026">2026</option>
</select></div>
      <div class="col-sm-4 col-12">  <b>Choose Cource</b> <br>
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
                   
</select></div>
      <div class="col-sm-4 col-12"><b>Choose Sections</b> <br>
         <select class="form-select" name="section" aria-label="Default select example">
  <option selected>Select Batch</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
 

</select></div>
     
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-4"><b>Select Post</b><br>
      <select class="form-select" name="designation" aria-label="Default select example">
  <option selected>Select Post</option>
  <option value="President">President</option>
  <option value="Vice President">Vice President</option>
  <option value="General Secretary">General Secretary</option>
  <option value="Secretary">Secretary</option>
  <option value="Treasurer">Treasurer</option>
</select></div>
    <div class="col-4"><b>Select Club </b><br>
      <select class="form-select" name="club" aria-label="Default select example">
      <option selected>Select Club</option>
        <option value="Cricket">Cricket</option>
        <option value="Volleyball">Volleyball</option>
        <option value="Soccer">Soccer</option>
        <option value="Basketball">Basketball</option>
        <option value="Badminton">Badminton</option>
        <option value="Pool">Pool</option>
        <option value="Investment">Investment</option>
        <option value="Chess">Chess</option>
        <option value="Dance">Dance</option>
        <option value="CSR">CSR</option>
        <option value="EOA">EOA</option>
        <option value="E Cell">E Cell</option>
        <option value="Fashion">Fashion</option>
        <option value="Literary">Literary</option>
        <option value="Music">Music</option>
        <option value="Photography">Photography</option>
        <option value="PhysicalFitness">Physical Fitness</option>
        <option value="Theatre">Theatre</option>
        <option value="Travel">Travel</option>
        <option value="Table tennis">Table tennis</option>
      </select></div>
      <div class="col-4"></div>

    
</div>
      
      <br>


      <div class="container-fluid">
        <div class="row">
          <button type="submit" class="btn btn-primary col-2 ">Submit</button>
        </div>
      </div>
      <br><br>
    </form>
  </div>



  <table class="table" id="myTable">
  <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Nominee Name</th>
          <th scope="col">Batch</th>
          <th scope="col">Mobile</th>
          <th scope="col">Designation</th>
          <th scope="col">Club</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
      <?php 
          $sql = "SELECT * FROM `nominees`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['name'] . "</td>
            <td>". $row['batch'] . "</td>
            <td>". $row['mobile'] . "</td>
            <td>". $row['designation'] . "</td>
            <td>". $row['club'] . "</td>
            

            <td> 
            
            <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button>  </td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>


  </div>
  <hr>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        name = tr.getElementsByTagName("td")[0].innerText;
        batch = tr.getElementsByTagName("td")[1].innerText;
        course = tr.getElementsByTagName("td")[2].innerText;
        section = tr.getElementsByTagName("td")[3].innerText;
        mobile = tr.getElementsByTagName("td")[4].innerText;
        designation = tr.getElementsByTagName("td")[5].innerText;
        // club = tr.getElementsByTagName("td")[6].innerText;
        console.log(name, batch,course,section,mobile,designation,club);
        nameEdit.value = name;
        batchEdit.value = batch;
        mobileEdit.value = mobile;
        designationEdit.value = designation;
        clubEdit.value = club;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);
        // alert(sno);
        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `adminpannel.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
</div>
</body>

</html>



