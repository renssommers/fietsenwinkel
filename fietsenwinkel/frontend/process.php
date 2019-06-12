<?php 
session_start();
include 'databasecon.php';
$conn = OpenCon();
$klant ="" 


$error=''; 

 if(empty($_POST['klant_email']) || empty($_POST['klant_wachtwoord'])){
 $error = "Username or Password is leeg";
 }  else

 {


	 $email=$_POST['klant_email'];
	 $wachtwoord=$_POST['klant_wachtwoord'];
	 
 }

 

 $result = "SELECT * FROM klanten WHERE klant_wachtwoord='$wachtwoord' AND klant_email='$email'";
 $result = $conn->query()

 if ($result !="") {
 	$_SESSION['klant_email'] = $klant['klant_id'];
 }




 if ($sel->query($select)) {
	 
	 
	 $_SESSION['klant_email'] = $klant['klant_id'];
	  
 }  else

 {
 	echo "email of wachtwoord is niet goed";
 }
   
 


?>