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

    <?php
      include 'databasecon.php';
    ?>
    
    <body>
        
        <!--================Top Header Area =================-->
  <header class="shop_header_area carousel_menu_area">
                <!-- <div class="carousel_top_header row m0">
                    <div class="container">
                        <div class="carousel_top_h_inner">
                            <div class="float-md-left">
                                <div class="top_header_left">
                                    <div class="selector">
                                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                          <option value='yt' data-image="img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                                          <option value='yu' data-image="img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                          <option value='yt' data-image="img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                                          <option value='yu' data-image="img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                        </select>
                                    </div>
                                    <select class="selectpicker usd_select">
                                        <option>USD</option>
                                        <option>$</option>
                                        <option>$</option>
                                        <option>EURO</option>
                                        // hoi test iedereen
                                    </select>
                                </div>
                            </div>
                            <div class="float-md-right">
                                <div class="top_header_middle">
                                    <a href="#"><i class="fa fa-phone"></i> Call Us: <span>+84 987 654 321</span></a>
                                    <a href="#"><i class="fa fa-envelope"></i> Email: <span>support@yourdomain.com</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!--================End Top Header Area =================-->
        
        

        <!--================Categories Product Area =================-->
        <section class="categories_product_main p_80">
            <div class="container" style="max-width: unset;">
                <div class="col-lg-12" style="padding: 0; text-align:center;">
                    <h1 style="margin:0; padding-bottom: 40px; color: #09366C; font-weight: bold; text-align:left;"> Aanbiedingen </h1>
                </div>
                <div class="categories_main_inner">
                    <div class="row row_disable">
                    <div class="col-lg-12">
                    </div>
                        <div class="col-lg-3 float-md-left">
                            <div class="categories_sidebar">
                                <aside class="l_widgest l_color_widget">
                                        <div class="l_w_title">
                                            <h3>Menu</h3>
                                        </div>
                                        <a href="gebruikersoverzicht.php">Gebruikers</a><br>
                                        <a href="klantenoverzicht.php">Klanten</a>  <br>
                                        <a href="fietsenoverzicht.php">Fietsen</a>  <br>
                                        <a href="reviewsbeheren.php">Reviews</a> <br>
                                        <a href="aanbiedingen.php" style="text-decoration: underline;">Aanbieding</a>  <br>
                                        <a href="bestellingenbeheren.php">Bestellingen</a> <br>
                                        <a href="nieuwsbrief.php">Nieuwsbrief</a>
                                </aside>

                                <a class="abonneer_btn" href="index.php">Uitloggen</a>

                            </div>
                        </div>

                        <div class="float-left col-lg-9">
                        <div class="categories_product_area">
                                <div class="row">
                            <?php 
                                $conn = Opencon();
                                $QUERY = "SELECT * FROM producten";
                                $result = mysqli_query($conn, $QUERY);
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <div class="col-lg-3 col-sm-6">
                                <form method="post">
                                        <div class="l_product_item" style="float:left;">
                                            <a class="l_p_img">
                                                <img src=<?php echo $row["product_fotos"]; ?> alt="">
                                                <h4 style="font-size: 15px; color: black; margin: 10px 5px;"><?php echo $row["product_naam"]; ?></h4>

                                                <!-- if statement maken -->
                                                <?php
                                                $actie = $row["actie"];
                                                if ($actie == 1) {
                                                    ?>
                                                    <h5><b style="color:#FF9029; margin: 0 5px; font-weight: lighter; padding-right: 5px;">Actieprijs: </b> €<?php echo $row["product_prijs"]; ?></h5>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <h5 style="margin: 0 0 10px 5px;"><del></del>  €<?php echo $row["product_prijs"]; ?></h5>
                                                <?php
                                                }
                                                ?>
                                            
                                            
                                            </a>
                                            <div style="float:left; width:100%;">
                                                <div class="specificaties">
                                                   
                                                    <div style="margin: 10px;">
                                                        <a class="add_cart_btn" href="aanbiedingmaken.php?id=<?php echo $row["product_id"]; ?>" style="width:100%; text-align:center;"> Aanbieding maken </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            <?php
                            }
                            ?>


                        </div>
                    </div>
             
                </div>
            </div>
        </section>
      
        
        
        
        
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