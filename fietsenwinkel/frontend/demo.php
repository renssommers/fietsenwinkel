<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanks</title>
</head>
<body>

<?php
session_start();


if (isset($_POST["add"])){
    if (isset($_SESSION["cart"])){
        $item_array_id = array_column($_SESSION["cart"],"product_id");
        if (!in_array($_GET["id"],$item_array_id)){
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_prijs' => $_POST["hidden_price"],
            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script>window.location="categories-left-sidebar.php"</script>';
        }else{
            echo '<script>alert("Product is already Added to Cart")</script>';
            echo '<script>window.location="categories-left-sidebar.php"</script>';
        }
    }else{
        $item_array = array(
            'product_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'product_prijs' => $_POST["hidden_price"],
        );
        $_SESSION["cart"][0] = $item_array;
    }
}


include 'databasecon.php';
$conn = Opencon();
?>
    
<!-- <?php

$QUERY = "SELECT * FROM klanten";

if (!empty($_POST)) {
    $voornaam = htmlspecialchars($_POST['klant_voornaam']);
    $achternaam = htmlspecialchars($_POST['klant_achternaam']);
    $straat = htmlspecialchars($_POST['klant_straat']);
    $huisnr = htmlspecialchars($_POST['klant_huisnr']);
    $postcode = htmlspecialchars($_POST['klant_postcode']);
    $telefoon = htmlspecialchars($_POST['klant_telefoon']);

$insert = "INSERT INTO klanten (klant_voornaam,klant_achternaam,klant_email,klant_straat,klant_huisnr,klant_postcode,klant_telefoon)
VALUES('$voornaam','$achternaam','$email','$telefoon','$huisnr','$postcode','$telefoon')";

if ($conn->query($insert) === TRUE) {
    echo '<script>alert("Bestelling Geplaatst")</script>';
    echo '<script>window.location="empty-cart.php"</script>';
    session_destroy();
    } else {
        echo "Error: " . $insert . "<br>" . $conn->error;
    }
}
?> -->

<?php

$QUERY = "SELECT * FROM bestellingen";

if (!empty($_SESSION["cart"])) {
    $id = htmlspecialchars($_POST['bestelling_id']);
    $product_id = htmlspecialchars($_POST['product_id']);
    $klant_id = htmlspecialchars($_POST['klant_id']);
    $bestelling_bedr = htmlspecialchars($_POST['bestelling_bedrag']);
    $bestelling_stat = htmlspecialchars($_POST['bestelling_status']);

$insert = "INSERT INTO bestellingen (bestelling_id,product_id,klant_id,bestelling_bedrag,bestelling_status,klant_postcode,klant_telefoon)
VALUES('$id','$product_id','$klant_id','$bestelling_bedr','$bestelling_stat')";

if ($conn->query($insert) === TRUE) {
    //Later popup van maken.
    echo "<b>Uw bestelling is succesvol</b>";
    } else {
        echo "Error: " . $insert . "<br>" . $conn->error;
    }
}


?>
</body>
</html>