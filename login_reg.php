<?php

include('connection.php');

session_start(); ?>


<?php

if(isset($_POST['register']))
{
	$ueq="SELECT * FROM `registered_user` WHERE username ='$_POST[username]' OR email = '$_POST[email]'";
	$result=mysqli_query($con, $ueq);


	if($result)
	{
		if(mysqli_num_rows($result)>0)
		{
			$result_fetch=mysqli_fetch_assoc($result);
			if($result_fetch['username']==$_POST['username'] && $result_fetch['email']==$_POST['email'])
			{
				echo"
					<script> 
					alert('Email And Username Already Taken');
					window.location.href='index.php';
					</script>
					";
			}
			else{
				if ($result_fetch['username']==$_POST['username'])
				{
					echo"
					<script> 
					alert('Username Already Taken');
					window.location.href='index.php';
					</script>
					";
				}
				else
				{
					echo"
					<script> 
					alert('Email Already Taken');
					window.location.href='index.php';
					</script>
					";
				}
			}
		}
		else
		{
			$query="INSERT INTO `registered_user`(`username`, `email`, `password`) VALUES ('$_POST[username]','$_POST[email]','$_POST[password]')";
			if(mysqli_query($con,$query)){
				echo"
				<script> 
				alert('Registration Successful');
				window.location.href='index.php';
				</script>
				";
			}
			else{
				echo"
				<script> 
				alert('Cannot Run Queryy');
				window.location.href='index.php';
				</script>
				";
			}
		}
	}
	else
	{
		echo"
		<script> 
		alert('Cannot Run Query');
		window.location.href='index.php';
		</script>
		";
	}
}

// login code
if (isset($_POST['login']))
{
	$myusername = mysqli_real_escape_string($con,$_POST['username']);
	$mypassword = mysqli_real_escape_string($con,$_POST['password']); 
	
	$sql = "SELECT * FROM registered_user WHERE username = '$myusername' and password = '$mypassword'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	$count = mysqli_num_rows($result);
	
	// If result matched $myusername and $mypassword, table row must be 1 row
	  
	if($count == 1) {
		$_SESSION['user'] = $myusername;
		echo"
		<script> 
		alert('Login Successfully.');
		window.location.href='dashboard.php';
		</script>
		";
	}else {
	  
		echo"
		<script> 
		alert('Username And Password Are Invalid');
		window.location.href='index.php';
		</script>
		";
	}
 }


?>


