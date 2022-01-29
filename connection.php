<?php 


	$con=mysqli_connect("localhost","root","","login");

	if(mysqli_connect_error()){
		echo"<script>alert('Can not Connect to database');</script>";
		exit();
	}

 ?>