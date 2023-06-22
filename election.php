<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
<!-- fav-icon -->
<link rel="icon" type="image/x-icon" href="assets/img/pcte.png">

    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Election</title>
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
    <style>
    
      
        
      
    </style>
</head>
<?php
$clubname=$_GET['cid'];
$tjclub = $_GET['cid'];

?>
<body data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- NAVBAR SATART -->
<?php
  include('header.php');
  

session_start();
$a=$_SESSION['sid'];

$tjsid = $_GET['sid'];

?>
    <!-- NAVBAR END  -->
    <input type="text" name="clubname"  value ="<?php echo $clubname;?>" hidden>
<div class="container mb-30">

    <h2 class="bg-primary" style="margin-top:93px;margin-bottom:20px; padding:10px; width=100%; text-align: center;">Vote your respective leaders of <?php echo  $clubname; ?> club... </h2>
  <form name="f1" action="" method="post">
    <div class="container text-center bg-danger text-light " >

     <h1>President</h1>
  </div>


    <?php
    $con=new mysqli("localhost","root","","vote");
    if($con==true)
    {
$cmd="select * from nominees where designation = 'President' and club='$clubname'";
      if($y=$con->query($cmd))
      {
        
        if($y->num_rows>0)
        {
         ?>
         <table class="table table-striped ">
         <thead>          
         <tr>  
           <th scope="col">Name</th>
           <th scope="col">Batch</th>
           <th scope="col">course</th>
           <th scope="col">section</th>
           <th scope="col">Vote</th>
         </tr>
       </thead>
       <tbody>
         <?php 
         while($t=$y->fetch_array()){
          ?>
        
    <tr>  
            <td><?php
        echo $t[1];
      ?>
      </td>
      <td>
        <?php
        echo $t[2];
      ?>
      </td>
      <td>
        <?php
        echo $t[3];
      ?>
      </td>
      <td>
        <?php
        echo $t[4];
      ?>
      </td>
     
      <td><input type="radio" required
       value="<?php
        echo $t[0]?> " name="p"></td>
    </tr>
   


    <?php
  }
        }else{
          echo "no record found";
        }
      }
      else{
        echo "query problem";
      }
    }
    else{
      echo "connection problem";
    }
    ?>
    </tbody>
  </table>
<!-- ---------------------------------------------------------vice President-------------------------------------------- -->

<div class="container-fluid text-center bg-danger text-light " >
     <h1>Vice President</h1>
  </div>


    <?php
    include_once "config.php";
    $con = $conn;
    // $con=new mysqli("localhost","root","","vote");
    if($con==true)
    {
$cmd="select * from nominees where designation = 'Vice President' and club='$clubname'";
      if($y=$con->query($cmd))
      {
        
        if($y->num_rows>0)
        {
         ?>
         <table class="table table-striped">
         <thead>          
         <tr>  
           <th scope="col">Name</th>
           <th scope="col">Batch</th>
           <th scope="col">course</th>
           <th scope="col">section</th>
           <th scope="col">Vote</th>
         </tr>
       </thead>
       <tbody>
         <?php 
         while($t=$y->fetch_array()){
          ?>
         
         <tr>  
            <td><?php
        echo $t[1];
      ?>
      </td>
      <td>
        <?php
        echo $t[2];
      ?>
      </td>
      <td>
        <?php
        echo $t[3];
      ?>
      </td>
      <td>
        <?php
        echo $t[4];
      ?>
      </td>
     
      <td><input type="radio" required value="<?php
      echo $t[0]?> " name="vp" ></td>
    </tr>


    <?php
  }
        }else{
          echo "no record found";
        }
      }
      else{
        echo "query problem";
      }
    }
    else{
      echo "connection problem";
    }
    ?>
    </tbody>
  </table>

<!-- ----------------------------------------------------------gen secretay------------------------- -->

<div class="container-fluid text-center bg-danger text-light " >
     <h1>General Secratary Nominees</h1>
  </div>


    <?php

include_once "config.php";
$con = $conn;

    // $con=new mysqli("localhost","root","","vote");
    if($con==true)
    {
$cmd="select * from nominees where designation = 'General Secretary' and club='$clubname'";
      if($y=$con->query($cmd))
      {
        
        if($y->num_rows>0)
        {
         ?>
         <table class="table table-striped">
         <thead>          
         <tr>  
           <th scope="col">Name</th>
           <th scope="col">Batch</th>
           <th scope="col">course</th>
           <th scope="col">section</th>
           <th scope="col">Vote</th>
         </tr>
       </thead>
       <tbody>
         <?php 
         while($t=$y->fetch_array()){
          ?>
         
         <tr>  
            <td><?php
        echo $t[1];
      ?>
      </td>
      <td>
        <?php
        echo $t[2];
      ?>
      </td>
      <td>
        <?php
        echo $t[3];
      ?>
      </td>
      <td>
        <?php
        echo $t[4];
      ?>
      </td>
     
      <td><input type="radio" required  value="<?php
      echo $t[0]?> " name="gs"></td>
    </tr>


    <?php
  }
        }else{
          echo "no record found";
        }
      }
      else{
        echo "query problem";
      }
    }
    else{
      echo "connection problem";
    }
    ?>
    </tbody>
  </table>
    


    <!-- ...............................sec........................................ -->
    
 <div class="container-fluid text-center bg-danger text-light " >
     <h1>Secretary Nominees</h1>
  </div>


    <?php

include_once "config.php";
$con = $conn;
    // $con=new mysqli("localhost","root","","vote");
    if($con==true)
    {
$cmd="select * from nominees where designation = 'Secretary' and club='$clubname'";
      if($y=$con->query($cmd))
      {
        
        if($y->num_rows>0)
        {
         ?>
         <table class="table table-striped">
         <thead>          
         <tr>  
           <th scope="col">Name</th>
           <th scope="col">Batch</th>
           <th scope="col">course</th>
           <th scope="col">section</th>
           <th scope="col">Vote</th>
         </tr>
       </thead>
       <tbody>
         <?php 
         while($t=$y->fetch_array()){
          ?>
         
         <tr>  
            <td><?php
        echo $t[1];
      ?>
      </td>
      <td>
        <?php
        echo $t[2];
      ?>
      </td>
      <td>
        <?php
        echo $t[3];
      ?>
      </td>
      <td>
        <?php
        echo $t[4];
      ?>
      </td>
     
      <td><input type="radio" required  value="<?php
      echo $t[0]?> " name="s"></td>
    </tr>


    <?php
  }
        }else{
          echo "no record found";
        }
      }
      else{
        echo "query problem";
      }
    }
    else{
      echo "connection problem";
    }
    ?>
    </tbody>
  </table>
 <!-- ----------------------------------------------------------tresr-------------------------------------- -->
 
<div class="container-fluid text-center bg-danger text-light " >
     <h1>Treasurer</h1>
  </div>


    <?php
      include_once "config.php";
      $con = $conn;
    // $con=new mysqli("localhost","root","","vote");
    if($con==true)
    {
$cmd="select * from nominees where designation = 'Treasurer' and club='$clubname'";
      if($y=$con->query($cmd))
      {
        
        if($y->num_rows>0)
        {
         ?>
        <table class="table table-striped">
         <thead>          
         <tr>  
           <th scope="col">Name</th>
           <th scope="col">Batch</th>
           <th scope="col">course</th>
           <th scope="col">section</th>
           <th scope="col">Vote</th>
         </tr>
       </thead>
       <tbody>
         <?php 
         while($t=$y->fetch_array()){
          ?>
         
         <tr>  
            <td><?php
        echo $t[1];
      ?>
      </td>
      <td>
        <?php
        echo $t[2];
      ?>
      </td>
      <td>
        <?php
        echo $t[3];
      ?>
      </td>
      <td>
        <?php
        echo $t[4];
      ?>
      </td>
     
      <td><input type="radio"  required value="<?php
        echo $t[0]?> " name="t"></td>
    </tr>


    <?php
  }
        }else{
          echo "no record found";
        }
      }
      else{
        echo "query problem";
      }
    }
    else{
      echo "connection problem";
    }
    ?>
    </tbody>
  </table>


  <div class="d-grid gap-2 button" >
  <button class="btn btn-primary " name="b1" type="submit">Submit</button>
  <button class="btn btn-primary" type="reset">Reset</button>
</div>

 
  </form>




  
  </div>



    <!-- CONTACT SECTION END -->
    <footer style="background-color:white;">
        &copy 2022 designed & developed by | Er <a href="https://www.linkedin.com/in/sehran-rasool-jan-278b93211/">Sehran Rasool</a>  Er <a href="https://www.linkedin.com/in/mohd-shavez-2340b0213/">Mohd Shavez</a>  & Er <a href="#">Tejinder Singh</a>
    </footer>
    <!--FOOTER SECTION END  -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- SCROLLING SCRIPTS PLUGIN  -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  FANCYBOX PLUGIN -->
    <script src="assets/js/source/jquery.fancybox.js"></script>
    <!-- ISOTOPE SCRIPTS -->
    <script src="assets/js/jquery.isotope.js"></script>
     <!-- SCROLL ANIMATIONS  -->
    <script src="assets/js/scrollReveal.js"></script>
    <!-- CUSTOM SCRIPTS   -->
    <script src="assets/js/custom.js"></script>

    <?php
if (isset($_POST['b1']))
{ 
  $p=$_POST['p'];
  
  $vp=$_POST['vp'];
  $gs=$_POST['gs'];
  $s=$_POST['s'];
  $t=$_POST['t'];
  // $conn=new mysqli ("localhost","root","","vote");
  include_once "config.php";
  // $con = $conn;
  if($conn==true)
  {
    $cmd="INSERT INTO `tbl_vote` (`vote_id`, `sid`, `president`, `vice_president`, `gen_secretary`, `secretary`, `treasurer`,`club`) VALUES ('', '$tjsid','$p','$vp', '$gs', '$s', '$t','{$tjclub}')";
    



    // INSERT INTO `tbl_vote` (`vote_id`, `sno`, `president`, `vice_president`, `gen_secretary`, `secretary`, `treasurer`) VALUES ('9', '32', '2', '4', '28', '30', '27');
    if ($conn->query ($cmd)==true)

    {

      $tjclubstatus = $_GET['clubstatus'];
      $tjrollid = $_GET['sid'];

      // echo $tjclubstatus;

      $tjcolumnname = "c".$tjclubstatus."_vote";

      $up="UPDATE `std_data` SET  `".$tjcolumnname."`= '1' WHERE `sid` = '{$tjrollid}'";
      if ($conn->query ($up)==true)

    {
      
      echo '
        <script>
          alert("Your Vote Has Been Sucessfully Submitted...");
          window.location="clubreg.php";
        </script>
        
        ';
    }else{
      echo '
      <script>
        alert("status not upadating ..");
 
      </script>
      
      ';
    }
    }
    else 
    {
      echo '
        <script>
          alert("query problem..");
          window.location="clubreg.php";
        </script>
        ';
    }
  }
  else
   {
    echo "connection problem";
  }
}
?>

</body>
</html>
