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
    $QUERY = "SELECT * FROM producten WHERE product_id = " . (empty($_GET['id']) ? 0 : $_GET['id']);
    $result = mysqli_query($conn, $QUERY);
    $row = mysqli_fetch_assoc($result);
    CloseCon($conn);
    ?>
        
        <!--================Register Area =================-->
        <section class="register_area p_100">
            <div class="container">
                <div class="register_inner">
                    <div class="row">
                        <form action="demo.php" method="post" class="billing_inner row">
                            <div class="col-lg-7">
                                <div class="billing_details">
                                    <h2 class="reg_title">Factuur gegevens</h2>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="name">Voornaam <span>*</span></label>
                                                <input name="klant_voornaam" type="text" class="form-control" id="name" aria-describedby="name" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="last">Achternaam <span>*</span></label>
                                                <input name="klant_achternaam" type="text" class="form-control" id="last" aria-describedby="last" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="email">E-mail <span>*</span></label>
                                                <input name="klant_email" type="email" class="form-control" id="email" aria-describedby="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="address">Straatnaam<span>*</span></label>
                                                <input name="klant_straat" type="text" class="form-control" id="address" aria-describedby="address" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="address">Huisnummer<span>*</span></label>
                                                    <input name="klant_huisnr" type="text" class="form-control" id="address" aria-describedby="address" required>
                                                </div>
                                            </div>
                                        <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="address">Postcode <span>*</span></label>
                                                    <input name="klant_postcode" type="text" class="form-control" id="address" aria-describedby="address" required>
                                                </div>
                                            </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="phone">Telefoonnummer <span>*</span></label>
                                                <input name="klant_telefoon" type="text" class="form-control" id="phone" aria-describedby="phone">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="order_box_price">
                                    <h2 class="reg_title">Uw bestelling</h2>
                                    <div class="payment_list">
                                        <div class="price_single_cost">


                                        <?php
                                        if(!empty($_SESSION["cart"])){
                                        $total = 0;
                                        foreach ($_SESSION["cart"] as $key => $value) {
                                        ?>
                                                <h5><?php echo $value["item_name"]; ?><span>&euro;<?php echo $value["product_prijs"]; ?></span></h5>
                                                <h4></h4>
                                                <input type="hidden" name="hidden_name" value="<?php echo $row["product_naam"]; ?>">
                                                <input type="hidden" name="hidden_price" value="<?php echo $row["product_prijs"]; ?>">
                                                
                                        <?php
                                        $total = $total += $value['product_prijs'];

                                        }
                                        ?><h3><span class="normal_text">Totaal bedrag</span> <span>&euro; <?php
                                        }else {
                                            echo '<script>window.location="empty-cart.php"</script>';
                                        } 

                                        echo number_format($total, 2); ?></span></h3>

                                        </div>
                                        <div id="accordion" role="tablist" class="price_method">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
                                                        direct bank transfer
                                                        </a>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's. 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" value="Plaats uw bestelling" class="btn subs_btn form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Register Area =================-->
        
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