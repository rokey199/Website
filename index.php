<?php include('connection.php'); 
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
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
    <link rel="stylesheet" type="text/css" href="css/register_style.css">
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
      @media only screen and (max-width: 600px) {
        #l_r{
          text-align: center;
          padding-top: 45px;
        }
      }
      @media only screen and (max-width: 560px) {
        .cancelbtn{
          margin-right: 0px;
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

    

    <!-- Icon Bar (Sidebar - hidden on small screens) -->
    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
      <!-- Name in top left corner -->
      <h1 style="font-size: 20px;">Casino Games</h1>
      <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
        <i class="fa fa-home w3-xxlarge"></i>
        <p>HOME</p>
      </a>
      <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-user w3-xxlarge"></i>
        <p>ABOUT</p>
      </a>
      <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-envelope w3-xxlarge"></i>
        <p>CONTACT</p>
      </a>
    </nav>

    <!-- Navbar on small screens (Hidden on medium and large screens) -->
    <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
      <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
        <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
        <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
        <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
      </div>
    </div>

    <!-- Page Content -->
    
    <div class="w3-padding-large" id="main">
      <div style="text-align: right;" id="l_r">

        <a href="#"  onclick="document.getElementById('id01').style.display='block'" style="text-decoration: none; width:auto;" class="w3-hover-text-green"><h3 style=" display: inline; padding-right: 40px;">Login</h3></a>

        <!-- Login Form -->

        <div id="id01" class="modal" >

           <form class="modal-content animate" action="login_reg.php" method="POST">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <h2>Login</h2>
            </div>

            <div class="container" style="text-align: left;" >
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="username" > 

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password">

              <button type="submit" name="login">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>

            <div class="container" style="background-color:black;">

              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>

            </div>
           </form>
          </div>

        



        <a href="#" onclick="document.getElementById('id02').style.display='block'" style="text-decoration: none; width: auto;" class="w3-hover-text-green"><h3 style="padding-right: 40px; display: inline;">Register</h3></a>

        <div id="id02" class="modal">
          <form class="modal-content animate" action="login_reg.php" method="POST">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal" style="position: relative;">&times;</span>
            <div class="imgcontainer">
              <h2>Register</h2>
              <p>Please fill in this form to create an account.</p>
            </div>
              <div class="container" style="text-align: left;">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
                
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username"  required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                
                <label for="password"><b>Confirm Password</b></label>
                <input type="password" placeholder="Enter Password" name="passwordc" required>
                
                <label>
                  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
              </div>

              <div class="container">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn" name="register">Register</button>
              </div>
            </div>
          </form>
        </div>

      </div>




    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
      <h1 class="w3-jumbo" style="font-family: Copperplate, Papyrus, fantasy;">Casino Games.</h1>
      <p>Do you want to earn money!!.</p>
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

      
      <!-- Contact Section -->
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

      <!-- END PAGE CONTENT -->
    </div>
        <script>
          // Get the modal
          var modal = document.getElementById('id01');

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
          // Get the modal
          var modal = document.getElementById('id02');

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
        </script>
</body>

</html>
