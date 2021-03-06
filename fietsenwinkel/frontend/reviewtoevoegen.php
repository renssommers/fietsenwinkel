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
        
        <!--================End Menu Area =================-->
        
        <!--================Categories Product Area =================-->
        <section class="categories_product_main p_80">
            <div class="container">
                <div class="col-lg-12" style="padding: 0; text-align:center;">
                    <h1 style="margin:0; padding-bottom: 40px; color: #09366C; font-weight: bold;"> Review toevoegen </h1>
                </div>
                <div class="categories_main_inner">
                    <div class="row row_disable">
                        <div class="col-lg-9 float-md-right">
                        <?php
                        include 'databasecon.php';
                        $conn = Opencon();
                            if (!empty($_POST)) {
                                $rating = $_POST['review_rating'];
                                $beschrijving = htmlspecialchars($_POST['review_beschrijving']);
                                $insert = "INSERT INTO reviews (review_rating,review_beschrijving) VALUES('$rating','$beschrijving')";

                                if ($conn->query($insert) === TRUE) {
                                    //Later popup van maken.
                                    echo "<b>U heeft een review toegevoegd.</b>";
                                } else {
                                    echo "Error: " . $insert . "<br>" . $conn->error;
                                }
                            }
                        ?>
                           <p> Schrijf hier uw mening over onze website! </p>
                           <p style="float:left;"> Beoordeling in sterren: </p>
                           
                        <form action="" method="POST">
                                <select name="review_rating" style="float:left; margin-left: 10px;" required>
                                        <option value="1">1 ster</option>
                                        <option value="2">2 sterren</option>
                                        <option value="3">3 sterren</option>
                                        <option value="4">4 sterren</option>
                                        <option value="5">5 sterren</option>
                                </select>
                           <textarea rows="4" cols="50" name="review_beschrijving" style="width:100%;" required></textarea>
                           <input type="submit" class="add_cart_btn" style="cursor: pointer;" value="verzenden" name="submit">
                        </form>
                        </div>
                        <div class="col-lg-3 float-md-right">
                            <div class="categories_sidebar">
                                <aside class="l_widgest l_color_widget">
                                        <div class="l_w_title">
                                            <h3>Menu</h3>
                                        </div>
                                        <a href="profilepage.php">Account</a><br>
                                        <a href="profileorders.php">Bestellingen</a>  <br>
                                        <a href="reviewtoevoegen.php" style="text-decoration: underline;">Review toevoegen</a>  
                                </aside>

                                <a class="abonneer_btn" href="index.php">Uitloggen</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Categories Product Area =================-->
        
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