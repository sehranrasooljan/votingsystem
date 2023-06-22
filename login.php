


        <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- favicon image on title -->
<!-- fav-icon -->
<link rel="icon" type="image/x-icon" href="assets/img/pcte.png">
  

    <title>Login</title>

    <style>
        .container{
            align-items: center;
            width: 60%;
        }
        .heading {
            text-align: center;
            font-size: 30px;
            text-decoration: underline;
            margin-top: 15px;
        }
        .bg{background: #990000;}

</style>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="assets/img/pcte.png" height="60" width="50" style="margin-left:10px;"> </a>
        <marquee behavior="" direction="left" style="font-size: 20px;color: white;font-weight: 600;">WELCOME TO PCTE VOTING SYSTEM</marquee>
    
    </div>
  </nav>

  <div class="heading">
        Login for Voting
    </div>
    <div class="container">
        <div class="modal-body">
          <form action="" method="Post">
              <label for="exampleInputuser1" class="form-label">Choose Club</label>
              
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
        <option value="Fashion">Fashion</option>
        <option value="Literary">Literary</option>
        <option value="Music">Music</option>
        <option value="Photography">Photography</option>
        <option value="PhysicalFitness">Physical Fitness</option>
        <option value="Theatre">Theatre</option>
        <option value="Travel">Travel</option>
        <option value="E Cell">E Cell</option>
        <option value="Table tennis">Table Tennis</option>
      </select>
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
              
              style="margin-left:15px">Secret Key</label>
              <input style="width:97%;margin:auto" type="Password" name="pass" class="form-control" required placeholder="Password here">
           
              <div class="d-grid gap-2 d-md-block mt-3">

  <button class="btn btn-primary" type="submit" style="margin:15px;width:200px" name="loginbt">Login</button>
</div>


          </form>


<?php
if(isset($_POST['loginbt']))
{
$club = $_POST['club'];
$pass = $_POST['pass'];

session_start();
  $_SESSION['clubname'] = $club;

  include_once "config.php";
if($conn==true)
{
$cmd="select * from tbl_club where clubname='$club'  and secretkey='$pass'";
// $cmd ="SELECT  `clubname`, `secretkey` FROM `tbl_club` WHERE clubname==$club "
if($y=$conn->query($cmd))
{
if($y->num_rows>0)
{

// $_SESSION['em']=$e;
header("location:clubreg.php");
}
else
{
echo "ERROR: Not a valid  key";
}
}
else
{
echo "ERROR: Query Prob in Select";
}
}

else
{
echo "ERROR: Connection Problem";
}

}








// if($club == 'Cricket' && $pass == "12345"){
//   session_start();
//   $_SESSION['clubname'] = $club;
//   echo "<script>window.location.replace('clubreg.php')</script>";
// }else{
//   echo "<script>alert('Incorrect Key');</script>";
// }

// }
?>

<!-- <script>
  setTimeout(function(){
    document.getElementById("dummy").style="display:none";
  },200);
</script> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

