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
        
    <?php include 'header.php' ?>
        
        <!--================Shopping Cart Area =================-->
        <section class="shopping_cart_area p_100">
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
                                        <tr>
                                            <th scope="row">
                                                <img src="img/icon/close-icon.png" alt=""><a href="shopping-cart3.php=delete&id"></a>
                                            </th>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="img/product/cart-product/cart-3.jpg" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                    <h4><?php echo $value["product_naam"]; ?></h4>
                                                    <h4><?php echo $value["product_hoeveelheid"]; ?></h4>
                                                    <h4> &euro; <?php echo $value["product_prijs"]; ?></h4>
                                                    <h4> &euro; <?php echo number_format($value["product_hoeveelheid"] * $value["product_prijs"], 2);  ?></h4>



                                                    
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p class="red">€150</p></td>
                                            <td><p>€150</p></td>
                                        </tr>

                                        <?php
                                            if(!empty($_SESSION["cart"])) {
                                                $total = 0; 
                                            
                                                foreach ($_SESSION["cart"] as $key => $value)
                                            }
                                        ?>
                                        
                                        <tr>
                                            <th scope="row">
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart_totals_area">
                            <h4>Checkout</h4>
                            <div class="cart_t_list">
                                <!-- <div class="media">
                                    <div class="d-flex">
                                        <h5>Verzending</h5>
                                    </div>
                                    <div class="media-body">
                                        <h6 style="padding-left:10px;">€14,99</h6>
                                    </div>
                                </div> -->
                                <!-- <div class="media">
                                    <div class="d-flex">
                                        <h5>Verzending</h5>
                                    </div>
                                    <div class="media-body">
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model tex</p>
                                    </div>
                                </div> -->
                                <!-- <div class="media">
                                    <div class="d-flex">
                                        
                                    </div>
                                    <div class="media-body">
                                            <strong>Bereken verzendkosten</strong>
                                    </div>
                                </div> -->
                            </div>
                            <div class="total_amount row m0 row_disable">
                                <div class="float-left">
                                    Totaal
                                </div>
                                <div class="float-right">
                                    €414,99
                                </div>
                            </div>
                        </div>
                        <a type="submit" value="submit" href="register.html" class="btn subs_btn form-control">Afrekenen</a>
                    </div>
                </div>
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