<?php

    session_start();

	function OpenCon()
	{
		$dbhost = "mgoossens.gcmediavormgeving.nl";
		$dbuser = "mgoossens_chaingang";
		$dbpass = 'vI$gz4~zlXtL';
		$db = "mgoossens_chaingang";

	$con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed:%s\n". $con-> error);

	return $con;
 	}
 
	function CloseCon($con)
	{
 	$con -> close();
     }
     
    $con = Opencon();



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
                echo '<script>window.location="Cart.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="Cart.php"</script>';
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

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="Cart.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <!-- Icon css link -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container" style="width: 65%">
        <h2>Shopping Cart</h2>
        

        <div class="categories_product_area">
            <div class="row">
                <?php 
                $query = "SELECT * FROM producten where product_id IN ('1', '2')";
                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0) {
    
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-lg-4 col-sm-6">
                    <form method="post" action="Cart.php?action=add&id=<?php echo $row["product_id"]; ?>">

                            <div class="l_product_item">
                                <a class="l_p_img" href="product-details.php?id=<?php echo $row["product_id"]; ?>">
                                    <img src=<?php echo $row["product_fotos"]; ?> alt="">
                                    <!-- <h5 class="new">Nieuw</h5> -->
                                </a>
                                <div class="l_p_text">
                                    <ul>
                                    <input type="submit" name="add" style="margin-top: 5px;" class="add_cart_btn"
                                       value="In winkelwagen">
                                    </ul>
                                    <h4><?php echo $row["product_naam"]; ?></h4>
                                    <h5><del></del>  €<?php echo $row["product_prijs"]; ?></h5>
                                    <input type="hidden" name="hidden_name" value="<?php echo $row["product_naam"]; ?>">
                                    <input type="hidden" name="hidden_price" value="<?php echo $row["product_prijs"]; ?>">
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                <?php
                    }
                }
                ?>

            </div>
        </div>

        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td>&euro; <?php echo $value["product_prijs"]; ?></td>
                            <td>
                                &euro; <?php echo number_format($value["product_prijs"], 2); ?></td>
                            <td><a href="Cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["product_prijs"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">&euro; <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>

    </div>
</body>
</html>