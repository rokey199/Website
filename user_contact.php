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
      <a href="#" >Settings</a>
      <a href="#" >Deposit</a>
      <a href="#" >Withdraw</a>
      <a href="user_contact.php" >Contact</a>
      <a href="logout.php">Logout</a>
    </div>
    <div style="padding-top: 25px;">
      <span style="font-size:35px;cursor:pointer; color: white;" onclick="openNav()" ><i class="far fa-user w3-right" style="padding-right: 30px;"></i></span>
    </div>



    <!-- Header/Home -->
    <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
        <h2 class="w3-text-light-grey">Contact Me</h2>
        <hr style="width:200px" class="w3-opacity">

        <div class="w3-section">
          <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Ahmedabad ,Gujrat</p>
          <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
          <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
        </div><br>
        <p>Let's get in touch. Send me a message:</p>

        <form action="contact.php" method="POST">
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
          <p>
            <button class="w3-button w3-light-grey w3-padding-large" type="submit">
              <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
          </p>
        </form>
        <!-- End Contact Section -->
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
      </footer>

    <!-- About Section -->
    

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
