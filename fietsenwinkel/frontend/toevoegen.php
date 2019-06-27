<?php

include 'databasecon.php';
 $conn = Opencon();
	$QUERY = "SELECT * FROM klanten";

if (!empty($_POST)) {
    $voornaam = htmlspecialchars($_POST['klant_voornaam']);
    $achternaam = htmlspecialchars($_POST['klant_achternaam']);
    $email = htmlspecialchars($_POST['klant_email']);
    $telefoon = htmlspecialchars($_POST['klant_telefoon']);
    $wachtwoord = htmlspecialchars($_POST['klant_wachtwoord']);

    $sql= mysql_query("INSERT INTO klanten(klant_voornaam, klant_achternaam, klant_email, klant_telefoon, klant_wachtwoord) VALUES ('$voornaam','$achternaam','$email','$wachtwoord')";

if ($conn->query($insert) === TRUE) {
    //Later popup van maken.
    echo "<b>Uw bestelling is succesvol</b>";
    } else {
        echo "Error: " . $insert . "<br>" . $conn->error;
    }
}
?>