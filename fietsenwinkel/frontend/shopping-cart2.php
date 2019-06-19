<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/bike.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ChainGang</title>

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

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body> 
        
    <?php

    
    session_start();
    include 'header.php';


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
                echo '<script>alert("Product has been added to the cart!")</script>';
                echo '<script>window.location="shopping-cart2.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
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
                    echo '<script>window.location="shopping-cart2.php"</script>';
                }
            }
        }
    }

    include 'databasecon.php';
    $conn = Opencon();
    $QUERY = "SELECT * FROM producten WHERE product_id = " . (empty($_GET['id']) ? 0 : $_GET['id']);
    $result = mysqli_query($conn, $QUERY);
    $row = mysqli_fetch_assoc($result);
    CloseCon($conn);
    ?>
        
        <!--================Shopping Cart Area =================-->
        
        <section class="shopping_cart_area p_100">
        <?php 
                                    
            $total= 0;
            foreach ($_SESSION["cart"] as $key => $value) { ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" style="padding-bottom: 20px;">
                         <h3>Uw artikelen</h3>
                    </div>
                    <div class="col-lg-8">
                        <div class="cart_items">
                            <div class="table-responsive-md">
                                <table class="table">
                                    <tbody>
                                    <?php
                                    if(!empty($_SESSION["cart"])){
                                        ?>
                                        <tr>
                                            <th scope="row">
                                            <a href="shopping-cart2.php?action=delete&id=<?php echo $value["product_id"]; ?>">
                                                <img src="img/icon/close-icon.png" alt=""></a>
                                            </th>
                                            <td><?php echo $value["item_name"]; ?></td>
                                            <td>&euro; <?php echo number_format($value["product_prijs"], 2); ?></td>
                                        </tr>
                                        <?php
                                        }
                                        else {
                                            echo '<script>window.location="empty-cart.php"</script>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart_totals_area">
                            <h4>Checkout</h4>
                            <div class="total_amount row m0 row_disable">
                                <div class="float-left">
                                    Totaal
                                </div>
                                <div class="float-right">
                                <?php
                                $total = $total += $value['product_prijs'];
                                ?>
                                <th align="right">&euro; <?php echo number_format($total, 2); ?></th>
                            </div>
                        </div>
                        <a type="submit" value="submit" href="register.php" class="btn subs_btn form-control">Afrekenen</a>
                    </div>
                </div>
            <?php }  
            ?>
            </div>
        </section>
        <!--================End Shopping Cart Area =================-->
        
        <?php include 'footer.php' ?>
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
        <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>