<?php  
	include 'databasecon.php';
	$conn = Opencon();

	if (isset($_POST['Login'])) {
		$email = $_POST['klant_email'];
		$pass = $_POST['klant_wachtwoord'];

		$QUERY = "SELECT * FROM klanten WHERE klant_email = '$email' AND klant_wachtwoord = '$pass'";
		$result = mysqli_query($conn, $QUERY);

		$row = mysqli_fetch_assoc($result);
		 
		 if ( count($row) > 0) {

		 	if ( isset($_POST['remember']) ) {
		 		setcookie('klant_email', $email, time()+60*60*7);

		 	}
		 	session_start();
		 	$_SESSION['klant_email'] = $email;
		 	header("location: profilepage.php");
		 } else {
		 	echo "Email of Wachtwoord is niet goed.<br> durk <a href='login.php'> hier </a> om opnieuw te proberen";
		 }
	} else{
		header("location: login.php");
	}

?>