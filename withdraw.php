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



    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
      <h1 class="w3-jumbo">Welcome.</h1>
      <p>Best Of luck friends.</p>
    </header>

    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about" style="max-width: 1600px;">
      <h2 class="w3-text-light-grey">My Name</h2>
      <hr style="width:200px" class="w3-opacity">
      <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>


      <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">1000+</span><br>
          Partners
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">500+</span><br>
          Projects Done
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">950+</span><br>
          Happy Clients
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">15000+</span><br>
          Daily Ads
        </div>
      </div>

      <!-- Footer -->
      <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p class="w3-medium">Powered by <p class="w3-hover-text-green">Rokey</p></p>
        <!-- End footer -->
      
     

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
