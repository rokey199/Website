<?php include('connection.php');
      
      session_start();
      if(!isset($_SESSION['user']))
      {
        header("location: index.php");
      }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Casino Games</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/001cfce490.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
    <link rel="stylesheet" type="text/css" href="css/register_style.css">
    <link rel="stylesheet" type="text/css" href="css/user_info.css">
    <link rel="stylesheet" type="text/css" href="css/animation.css">
    <link rel="stylesheet" type="text/css" href="css/setting.css">
    
    <style>
      body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
      .w3-row-padding img {
        margin-bottom: 12px
      }
      /* Set the width of the sidebar to 120px */
      .w3-sidebar {
        width: 120px;background: #222;
      }
      /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
      #main {
        margin-left: 120px
      }
      /* Remove margins from "page content" on small screens */
      @media only screen and (max-width: 600px) {
        #main {
          margin-left: 0
        }
      }
      @media only screen and (max-width: 300px) {
        .logo {
          font-size: 15px
        }
        
      }
     


    </style>

  </head>

  <body class="w3-black">

      <!-- Animation -->

	<div class="animation-area">
		<ul class="box-area">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>

  <div class="w3-head w3-left">
    <h1 class="logo" style="font-size: 40px; font-family: Copperplate, Papyrus, fantasy; padding-left: 50px; padding-top: 20px;" >Casino Games</h1>
  </div>
    

    <!-- user info -->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" style="padding-left: 130px;" onclick="closeNav()">&times;</a>
        <div class="w3-center">
          <i class="fas fa-user-tie" style="font-size:48px;color:white;"></i>
          <p style="padding-bottom: 20px; text-transform: capitalize;" ><?php  echo $_SESSION['user']; ?></p>
        </div>
      <a href="dashboard.php" >Home</a>
      <a href="setting.php" >Settings</a>
      <a href="deposit.php" >Deposit</a>
      <a href="withdraw.php" >Withdraw</a>
      <a href="user_contact.php" >Contact</a>
      <a href="logout.php">Logout</a>
    </div>
    <div style="padding-top: 25px;">
      <span style="font-size:35px;cursor:pointer; color: white;" onclick="openNav()" ><i class="far fa-user w3-right" style="padding-right: 30px;"></i></span>
    </div>

      <?php
      
      $currentUser = $_SESSION['user'];
      $sql = "SELECT * FROM registered_user WHERE username = '$currentUser'";

      ?>


    <div class="wrapper bg-black mt-sm-5" style="margin-top: 100px;">
        <h4 class="pb-4 border-bottom w3-center">Account settings</h4>
        <div class="d-flex align-items-start py-3 mx-auto" style="width: 68px;"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
        </div>
        <div class="w3-center border-bottom">
            <b>Profile Photo</b>
            <button class="btn button border" style="background-color: black; color: #0779e4; margin-bottom: 20px;"><b>Upload</b></button>
        </div>
        
        <div class="py-2">
            <div class="row py-2">
                <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" class="bg-light form-control" placeholder="Steve"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text" class="bg-light form-control" placeholder="Smith"> </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6"> <label for="email">Email Address</label> <input type="text" class="bg-light form-control" placeholder="steve_@email.com"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="phone" style="padding-bottom: 0.5rem; height:">Phone Number</label> <input type="tel" class="bg-light form-control" style="height: 3.3rem;" placeholder="+1 213-548-6015"> </div>
            </div>
            <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3">Save Changes</button> <button class="btn border button" style="background-color: white;">Cancel</button> </div>
            <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                <div> 
                    <b>Deactivate your account</b>
                    <p>Details about your company account and password</p>
                </div>
                <div class="ml-auto"> <button class="btn danger">Deactivate</button> </div>
            </div>
        </div>
    </div>

    

<script>
    function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
    }
    function myFunction2() {
    var x = document.getElementById("demo2");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
    }
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    }
</script>

</body>

</html>
