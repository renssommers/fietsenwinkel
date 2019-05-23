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
            include 'databasecon.php';
            $db = "mgoossens_chaingang";
            $conn = Opencon();
            $QUERY = "SELECT * FROM producten WHERE product_categorie = 'dames'" . (isset($_GET['kleur']) ? " AND product_kleur = " . $_GET['kleur'] : "");
            $result = mysqli_query($conn, $QUERY);
            $row = mysqli_fetch_assoc($result);
            CloseCon($conn);
            ?>
        
        <!--================Menu Area =================-->
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
        
        <!--================Menu Area =================-->
        <div class="carousel_menu_inner">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
    
                            </button>
    
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item dropdown submenu active">
                                        <a class="nav-link dropdown-toggle " href="categories-left-sidebar.php">
                                        Dames
                                        </a>
                                        <!-- <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="index.html">Home Simple</a></li>
                                            <li class="nav-item"><a class="nav-link" href="home-carousel.html">Home Carousel</a></li>
                                            <li class="nav-item"><a class="nav-link" href="home-fullwidth.html">Home Full Width</a></li>
                                            <li class="nav-item"><a class="nav-link" href="home-parallax.html">Home Parallax</a></li>
                                            <li class="nav-item"><a class="nav-link" href="home-sidebar.html">Home Boxed</a></li>
                                            <li class="nav-item"><a class="nav-link" href="home-fixed-menu.html">Home Fixed</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="nav-item dropdown submenu">
                                        <a class="nav-link dropdown-toggle" href="categories-left-sidebar.1.php">
                                        Heren
                                        </a>
                                        <!-- <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="compare.html">Compare</a></li>
                                            <li class="nav-item"><a class="nav-link" href="checkout.html">Checkout Method</a></li>
                                            <li class="nav-item"><a class="nav-link" href="register.html">Checkout Register</a></li>
                                            <li class="nav-item"><a class="nav-link" href="track.html">Track</a></li>
                                            <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                                            <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="nav-item dropdown submenu">
                                        <a class="nav-link dropdown-toggle" href="categories-left-sidebar.2.php">
                                        Kinderen
                                        </a>
                                        <!-- <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-2column.html">Prodcut No Sidebar</a></li>
                                            <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-3column.html">Prodcut Two Column</a></li>
                                            <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-4column.html">Product Grid</a></li>
                                            <li class="nav-item"><a class="nav-link" href="categories-left-sidebar.html">Categories Left Sidebar</a></li>
                                            <li class="nav-item"><a class="nav-link" href="categories-right-sidebar.html">Categories Right Sidebar</a></li>
                                            <li class="nav-item"><a class="nav-link" href="categories-grid-left-sidebar.html">Categories Grid Sidebar</a></li>
                                            <li class="nav-item"><a class="nav-link" href="product-details.html">Prodcut Details 01</a></li>
                                            <li class="nav-item"><a class="nav-link" href="product-details2.html">Prodcut Details 02</a></li>
                                            <li class="nav-item"><a class="nav-link" href="product-details3.html">Prodcut Details 03</a></li>
                                            <li class="nav-item"><a class="nav-link" href="shopping-cart.html">Shopping Cart 01</a></li>
                                            <li class="nav-item"><a class="nav-link" href="shopping-cart2.html">Shopping Cart 02</a></li>
                                            <li class="nav-item"><a class="nav-link" href="empty-cart.html">Empty Cart</a></li>
                                        </ul> -->
                                    </li>
                                    <!-- <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">lookbook</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
                                </ul>
                                <ul class="navbar-nav justify-content-end">
                                    <!-- <li class="search_icon"><a href="#"><i class="icon-magnifier icons"></i></a></li> -->
                                    <li class="user_icon"><a href="profilepage.html"><i class="icon-user icons"></i></a></li>
                                    <li class="cart_cart"><a href="shopping-cart2.html"><i class="icon-handbag icons"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
        <!--================End Menu Area =================-->
        
        <!--================Categories Product Area =================-->
        <section class="categories_product_main p_80">
            <div class="container">
                <div class="col-lg-12" style="padding: 0; text-align:center;">
                    <h1 style="margin:0; padding-bottom: 40px; color: #09366C; font-weight: bold;"> Dames fietsen </h1>
                </div>
                <div class="categories_main_inner">
                    <div class="row row_disable">
                        <div class="col-lg-9 float-md-right">
                            <div class="showing_fillter">
                                <div class="row m0">
                                    <!-- <div class="first_fillter">
                                        <h4>Showing 1 to 12 of 30 total</h4>
                                    </div>
                                    <div class="secand_fillter">
                                        <h4>SORT BY :</h4>
                                        <select class="selectpicker">
                                            <option>Name</option>
                                            <option>Name 2</option>
                                            <option>Name 3</option>
                                        </select>
                                    </div>
                                    <div class="third_fillter">
                                        <h4>Show : </h4>
                                        <select class="selectpicker">
                                            <option>09</option>
                                            <option>10</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <div class="four_fillter">
                                        <h4>View</h4>
                                        <a class="active" href="#"><i class="icon_grid-2x2"></i></a>
                                        <a href="#"><i class="icon_grid-3x3"></i></a>
                                    </div> -->
                                </div>
                            </div>
                            
                            <div class="categories_product_area">
                                <div class="row">
                                    <?php 
                                    while ($row = mysqli_fetch_assoc($result)){
                                        ?>
                                        <div class="col-lg-4 col-sm-6">
                                        <div class="l_product_item">
                                            <a class="l_p_img" href="product-details.php?id=<?php echo $row["product_id"]; ?>">
                                                <img src=<?php echo $row["product_fotos"]; ?> alt="">
                                                <!-- <h5 class="new">Nieuw</h5> -->
                                            </a>
                                            <div class="l_p_text">
                                               <ul>
                                                    <li><a class="add_cart_btn" href="#">In winkelwagen</a></li>
                                                </ul>
                                                <h4><?php echo $row["product_naam"]; ?></h4>
                                                <h5><del></del>  €<?php echo $row["product_prijs"]; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>

                                </div>
                                <!-- <nav aria-label="Page navigation example" class="pagination_area">
                                  <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item next"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                  </ul>
                                </nav> -->
                            </div>
                        </div>
                        <div class="col-lg-3 float-md-right">
                            <div class="categories_sidebar">
                                <!-- <aside class="l_widgest l_p_categories_widget">
                                    <div class="l_w_title">
                                        <h3>Categorieën</h3>
                                    </div>
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Dames fietsen</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="#">Heren fietsen</a>
                                            </li>
                                            <li class="nav-item">
                                                    <a class="nav-link" href="#">Kinder fietsen</a>
                                                </li>
                                    </ul>
                                </aside> -->
                                <aside class="l_widgest l_color_widget">
                                        <div class="l_w_title">
                                            <h3>Kleur</h3>
                                        </div>
            
                                        <ul>
                                            <li><a class="grijs" href="?kleur=1"></a></li>                                    
                                            <li><a class="zwart" href="?kleur=2"></a></li>
                                            <li><a class="multicolor" href="?kleur=3"></a></li>
                                            <br>
                                            <li><a href="categories-left-sidebar.php"> Reset filter </a></li>
                                        </ul> 



                                    
                                    </aside>
                                <aside class="l_widgest l_fillter_widget">
                                    <div class="l_w_title">
                                        <h3>Prijs</h3>
                                    </div>
                                    <div id="slider-range" class="ui_slider"></div>
                                    <label for="amount">Prijs:</label>
                                    <input type="text" id="amount" readonly>
                                    <br>
                                    <a class="abonneer_btn" href="index.html">Filter</a>
                                </aside>
                                <!-- <aside class="l_widgest l_menufacture_widget">
                                    <div class="l_w_title">
                                        <h3>Manufacturer</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">Nigel Cabourn.</a></li>
                                        <li><a href="#">Cacharel.</a></li>
                                        <li><a href="#">Calibre (Menswear)</a></li>
                                        <li><a href="#">Calvin Klein.</a></li>
                                        <li><a href="#">Camilla and Marc</a></li>
                                    </ul>
                                </aside>
                                <aside class="l_widgest l_feature_widget">
                                    <div class="l_w_title">
                                        <h3>Featured Products</h3>
                                    </div>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/featured-product/f-p-5.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Jeans with <br /> Frayed Hems</h4>
                                            <h5>$45.05</h5>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/featured-product/f-p-6.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Crysp Denim<br />Montana</h4>
                                            <h5>$45.05</h5>
                                        </div>
                                    </div>
                                </aside> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Categories Product Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
                <div class="container">
                    <div class="footer_widgets">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <aside class="f_widget f_about_widget">
                                    <img src="img/logo.png" alt="">
                                    <p>ChainGang fietsenwinkel, de beste fietsen passend bij uw wensen.</p>
                                </aside>
                            </div>
                            <div class="col-lg-2 col-md-6 col-12">
                                <aside class="f_widget link_widget f_info_widget">
                                    <div class="f_w_title">
                                        <h3>Categorieën</h3>
                                    </div>
                                    <ul>
                                        <li><a href="categories-left-sidebar.php">Dames</a></li>
                                        <li><a href="categories-left-sidebar.1.php">Heren</a></li>
                                        <li><a href="categories-left-sidebar.2.php">Kinderen</a></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <aside class="f_widget link_widget f_service_widget">
                                    <div class="f_w_title">
                                        <h3>Nieuwsbrief</h3>
                                    </div>
                                    <p>Abonneer op onze nieuwsbrief:</p>
                                    <form action="#" method="get">
                                        <input name="nieuwsbrief" type="email" id="email" placeholder="E-mailadres" size="30" required>
                                        <input type="submit" class="abonneer_btn" value="Aanmelden"></a>
                                    </form>
                                </aside>
                                <?php


                                    if (empty($_GET['nieuwsbrief'])) {
                                        $error = "Vull alles in.";

                                    } else {
                                        $nieuwsbrief = $_GET['nieuwsbrief'];
                                        $insert = "INSERT INTO nieuwsbrief (nieuwsbrief_email)VALUES($nieuwsbrief)";

                                        if ($insert) {
                                            $error = "Succesvol";
                                        } else {
                                            $error = "Er is iets mis gegaan.";
                                        }
                                    }



                                //         if(!empty($_GET["nieuwsbrief"])){
//                                    $sql= "INSERT INTO nieuwsbrief (nieuwsbrief_email)
//			                        VALUES('".$_GET["nieuwsbrief_email"]."', '".$_POST["Achternaam"]."', '".$_POST["bedrijfsnaam"]."', '".$_POST["Email"]."', '".$_POST["Tel_prive"]."', '".$_POST["Tel_zakelijk"]."', '".$_POST["Standplaats"]."')";
//                                    if(mysqli_query($conn, $sql)){
//                                        $message1="Contact is toegevoegd";
//                                        $color="green";
//                                        $margin="1px";
//                                    }
//                                    else{
//                                        $message1="Contact is niet toegevoegd.";
//                                        $color="red";
//                                        $margin="1px";
//                                    }
//                                }
//                                else{
//                                }

//                                    if ($_GET['nieuwsbrief'])
//                                    {
//
//                                        //wegschrijven naar database
//                                        //bij succes...
//                                        //popup bedankt voor uw aanmelding
//                                        echo "Bedankt voor uw aanmelding";
//                                    }
                                ?>


                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <aside class="f_widget link_widget f_extra_widget">
                                    <div class="f_w_title">
                                        <h3>Contact</h3>
                                    </div>
                                    <ul>
                                        <li>J.F. Kennedylaan 49</li>
                                        <li>7001 EA Doetinchem</li>
                                        <li> </li>
                                        <li>Tel: 0314 353 500</li>
                                        <li>E-mail: info@chaingang.nl</li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        <!--================End Footer Area =================-->
        
        
        
        
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