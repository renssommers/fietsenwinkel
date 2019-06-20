<?php 

session_start();
include 'databasecon.php';
$conn = Opencon();

echo "Connected Successfully";

$QUERY = "SELECT * FROM klanten";
$result = mysqli_query($conn, $QUERY);


$error=""; 

if(empty($_POST['klant_email']) || empty($_POST['klant_wachtwoord'])){
$error = "Username or Password is leeg";
} else {
		 $email=$_POST['klant_email'];
		 $wachtwoord=$_POST['klant_wachtwoord'];
	 }

if ($result !="") {
	$_SESSION['klant_email'] = $klant['klant_id'];
} else
	{
	 	echo "email of wachtwoord is niet goed";
	}

while ($row = mysqli_fetch_assoc($result)){
   echo $row["klant_email"] ."<br>";
}
CloseCon($conn);
?>
