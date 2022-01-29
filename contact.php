<?php 
session_start();
include('connection.php');

  if(!isset($_SESSION['user'])){
    echo "
    <script> 
		alert('You are not Logged In.');
    window.location.href='index.php';
		</script>
    ";
    
    $con->close();

  }

  $ueq="INSERT INTO `contact`(`Name`, `Email`, `Subject`, `Massage`) VALUES ('$_POST[Name]','$_POST[Email]','$_POST[Subject]','$_POST[Message]')";

    $success = $con->query($ueq);

    if (!$success) {
        die("Couldn't enter data: ".$con->error);
    }
    
    
    echo "
    <script> 
		alert('Massage Sent Succsessfully');
    window.location.href='dashboard.php';
		</script>
    ";
    
    $con->close();
    
?>