



        <!doctype html>
        <html lang="en">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- fav-icon -->
<link rel="icon" type="image/x-icon" href="assets/img/pcte.png">

            <title>Login</title>
        
            <style>
                .container{
                    align-items: center;
                    margin-left: 200px;
                    margin-right: 300px;
        
                }
                .heading {
                    text-align: center;
                    font-size: 30px;
                    text-decoration: underline;
                    margin-top: 5px;
                }
                .bg{background: #990000;}
        
        </style>
          </head>
          <body>
                <nav class="navbar navbar-expand-lg navbar-dark bg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="assets/img/pcte.png" height="60" width="50" style="margin-left:10px;"> </a>
                <marquee behavior="" direction="left" style="font-size: 20px;color: white;font-weight: 600;">WELCOME TO PCTE GROUP OF INSTITUTES</marquee>
            
            </div>
          </nav>
        
          <div class="heading">
                Admin Login
            </div>
            <div class="container">
                <div class="modal-body">
                  <form name="f2" action="adminlogin.php" method="Post">
        
                    <div class="mb-3">
                      <label for="exampleInputuser1" class="form-label">Email </label>
                      <input type="email" name="email" class="form-control" required placeholder="email here ">
                    </div>
        
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="Password" name="pass" class="form-control" required placeholder="Password here">
                   
                      <div class="d-grid gap-2 d-md-block mt-3">
        
          <button class="btn btn-primary" type="submit" name="loginbt">login</button>
        </div>
        
        
                  </form>
        
        
                  <?php
        
        if(isset($_POST['loginbt']))
        {
        session_start();
        $u=$_POST['email'];
        $p=$_POST['pass'];
        // $_SESSION['email']=$e;
        // $_SESSION['un']=$u;
        $con=new mysqli("localhost","root","","vote");
        if($con==true)
        {
        $cmd="select * from tbl_admin_login where email='$u'  and password='$p'";
        if($y=$con->query($cmd))
        {
        if($y->num_rows>0)
        {
        $_SESSION['em']=$e;
        header("location:adminpannel.php");
        }
        else
        {
        
         echo "<h4 > <center> Invailed Username or Password </center> </h4>";
        
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
        ?>
        
        
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