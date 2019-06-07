<?php 

include 'databasecon.php';
$conn = OpenCon();

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['klant_email']) || empty($_POST['klant_wachtwoord'])){
 $error = "Username or Password is leeg";
 }
 else
 {

	 $email=$_POST['klant_email'];
	 $wachtwoord=$_POST['klant_wachtwoord'];
	 
 }
 
 $select = "SELECT * FROM klanten WHERE klant_wachtwoord='$wachtwoord' AND klant_email='$email'";
 if ($conn->query($select)
 {
	 session_start
	 
	 $_SESSION['klant_email'] = $row['klant_id'];
	 //header("Location: welcome.php"); 
 }
 else
 {
 	echo "Username or Password is Invalid";
 }
 
 }
}

?>