<?php 

include 'databasecon.php';

$conn = Opencon();

echo "Connected Successfully";

$QUERY = "SELECT * FROM producten";
$result = mysqli_query($conn, $QUERY);

echo  "<pre>";
while ($row = mysqli_fetch_assoc($result)){
   echo "<b>id:</b> ". $row["product_id"] ."<br>";
   echo "<b>foto:</b> ". $row["product_fotos"] ."<br>";
   echo "<b>Naam:</b> ". $row["product_naam"] ." <br>"."<br>";
}

CloseCon($conn);

 ?>