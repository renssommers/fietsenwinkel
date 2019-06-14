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
                    <h1 style="margin:0; padding-bottom: 40px; color: #09366C; font-weight: bold; text-align:left;"> Medewerker bewerken </h1>
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
                                        <a href="medewerkersoverzicht.php" style="text-decoration: underline;">Medewerkers</a><br>
                                        <a href="gebruikersoverzicht.php">Gebruikers</a>  <br>
                                        <a href="">Fietsen</a>  <br>
                                        <a href="">Klanten</a>  <br>
                                        <a href="">Reviews</a> <br>
                                        <a href="">Aanbieding</a>  <br>
                                        <a href="">Bestellingen</a> <br>
                                        <a href="">Nieuwsbrief</a>
                                </aside>

                                <a class="abonneer_btn" href="index.php">Uitloggen</a>

                            </div>
                        </div>

                        <div class="float-left col-lg-9">
                        <?php 
                         
                            $conn = Opencon();
                            $QUERY = "SELECT * FROM medewerkers";
                            $result = mysqli_query($conn, $QUERY);

                        if (!empty($_POST)) {
                            $voornaam = htmlspecialchars($_POST['medewerker_voornaam']);
                            $achternaam = htmlspecialchars($_POST['medewerker_achternaam']);
                            $email = htmlspecialchars($_POST['medewerker_email']);
                            $telefoonnummer = htmlspecialchars($_POST['medewerker_telefoon']);
                            $gebruikersnaam = htmlspecialchars($_POST['medewerker_gebruikersnaam']);
                            $wachtwoord = htmlspecialchars($_POST['medewerker_wachtwoord']);
                            $rol = htmlspecialchars($_POST['medewerker_rol']);

                            $insert = "UPDATE medewerkers SET medewerker_voornaam='$voornaam', medewerker_achternaam='$achternaam', 
                            medewerker_email='$email', medewerker_telefoon='$telefoonnummer', 
                            medewerker_gebruikersnaam='$gebruikersnaam', medewerker_wachtwoord='$wachtwoord', 
                            medewerker_rol='$rol' WHERE medewerker_id=1";
                         
                            if ($conn->query($insert) === TRUE) {
                                //Later popup van maken.
                                echo "<b>U heeft uw profiel aangepast.</b><br><br><br>";
                                } else {
                                    echo "Error: " . $insert . "<br>" . $conn->error;
                                }
                            }
                 
                        $row = mysqli_fetch_assoc($result);
                    ?>
                               
                    <form action="" method="POST">
                    <div class="col-lg-2" style="float: left; margin-top: 10px;"> Voornaam* </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="medewerker_voornaam" value="<?php echo $row["medewerker_voornaam"]; ?>" style="width: 35%;" required><br>
                                        </div>

                                        <div class="col-lg-2" style="float: left; margin-top: 10px;"> Achternaam* </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="medewerker_achternaam" value="<?php echo $row["medewerker_achternaam"]; ?>" style="width: 35%;" required><br>
                                        </div>

                                        <div class="col-lg-2" style="float: left; margin-top: 10px;"> E-mailadres* </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="medewerker_email" value="<?php echo $row["medewerker_email"]; ?>" style="width: 35%;" required><br>
                                        </div>

                                        <div class="col-lg-2" style="float: left; margin-top: 10px;"> Telefoonnummer* </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="medewerker_telefoon" value="<?php echo $row["medewerker_telefoon"]; ?>" style="width: 35%;" required><br>
                                        </div>

                                       
                                        <div class="col-lg-2" style="float: left; margin-top: 10px;"> Gebruikersnaam* </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="medewerker_gebruikersnaam" value="<?php echo $row["medewerker_gebruikersnaam"]; ?>" style="width: 35%;" required><br>
                                        </div>

                                        <div class="col-lg-2" style="float: left; margin-top: 10px;"> Wachtwoord* </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="medewerker_wachtwoord" value="<?php echo $row["medewerker_wachtwoord"]; ?>" style="width: 35%;" required><br>
                                        </div>


                                        <div class="col-lg-2" style="float:left;  margin-top: 10px;"> Rol </div> 
                                        <div class="col-lg-10" style="float: left;  margin-top: 10px;"> 
                                            <select name="rol">
                                            <?php 
                                                $rol = $row["medewerker_rol"];
                                                    if ($rol == 1) {
                                            ?>
                                                <option value="1">Admin</option>
                                                <option value="2">Gewone gebruiker</option> 
                                            <?php
                                                } else {
                                            ?>
                                                <option value="2">Gewone gebruiker</option>
                                                <option value="1">Admin</option>
                                            <?php
                                            }
                                            ?>   
                                            </select>
                                        </div>

                                        <br>
                                         <input type="submit" class="add_cart_btn" style="cursor: pointer; margin-top:30px;" value="Opslaan" name="submit">

                                         <br>
                                         <a class="add_cart_btn" style="cursor: pointer; margin-top:30px; background-color: #007bff;" href="medewerkersoverzicht.php">< Terug</a>
                                </form>

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