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

        <!--================Categories Product Area =================-->
        <section class="categories_product_main p_80">
            <div class="container">
                <div class="col-lg-12" style="padding: 0; text-align:center;">
                    <h1 style="margin:0; padding-bottom: 40px; color: #09366C; font-weight: bold;"> Account </h1>
                </div>
                <div class="categories_main_inner">
                    <div class="row row_disable">
                    <?php 
                    include 'databasecon.php';
                    $conn = Opencon();
                   
                        if (!empty($_POST)) {
                            $voornaam = htmlspecialchars($_POST['klant_voornaam']);
                            $achternaam = htmlspecialchars($_POST['klant_achternaam']);
                            $geslacht = htmlspecialchars($_POST['klant_geslacht']);
                            $woonplaats = htmlspecialchars($_POST['klant_plaats']);
                            $postcode = htmlspecialchars($_POST['klant_postcode']);
                            $straat = htmlspecialchars($_POST['klant_straat']);
                            $huisnummer = htmlspecialchars($_POST['klant_huisnr']);
                            $telefoonnummer = htmlspecialchars($_POST['klant_telefoon']);
                            $email = htmlspecialchars($_POST['klant_email']);
                            $wachtwoord = htmlspecialchars($_POST['klant_wachtwoord']);

                            // $query = "SELECT klant_id FROM klanten WHERE klant_voornaam='$voornaam'";

                            $insert = "UPDATE klanten SET klant_voornaam='$voornaam', klant_achternaam='$achternaam', klant_geslacht='$geslacht', 
                            klant_plaats='$woonplaats', klant_postcode='$postcode', 
                            klant_straat='$straat', klant_huisnr='$huisnummer', 
                            klant_telefoon='$telefoonnummer', klant_email='$email', 
                            klant_wachtwoord='$wachtwoord' WHERE klant_id=1";
                            // $insert = "UPDATE klanten (klant_voornaam,klant_achternaam,klant_plaats,klant_postcode,klant_straat,klant_huisnr,klant_telefoon,klant_email,klant_wachtwoord) 
                            // VALUES('$voornaam','$achternaam','$woonplaats','$postcode','$straat','$huisnummer','$telefoonnummer','$email','$wachtwoord')";

                            if ($conn->query($insert) === TRUE) {
                                //Later popup van maken.
                                echo "<b>U heeft uw profiel aangepast.</b><br><br><br>";
                                } else {
                                    echo "Error: " . $insert . "<br>" . $conn->error;
                                }
                            }
                            $QUERY = "SELECT * FROM klanten";
                            $result = mysqli_query($conn, $QUERY);
                    // while ($row = mysqli_fetch_assoc($result)){
                        $row = mysqli_fetch_assoc($result);
                    ?>

                        <div class="col-lg-9 float-md-right">
                                <form action="" method="POST">
                                        <div class="col-lg-2" style="float:left;"> Geslacht </div> 
                                        <div class="col-lg-10" style="float: left;"> 
                                            <select name="Geslacht">
                                            <?php 
                                                $geslacht = $row["klant_geslacht"];
                                                    if ($geslacht == 1) {
                                            ?>
                                                <option value="1" name="klant_geslacht">Vrouw</option>
                                                <option value="2" name="klant_geslacht">Man</option> 
                                            <?php
                                                } else {
                                            ?>
                                                <option value="2" name="klant_geslacht">Man</option>
                                                <option value="1" name="klant_geslacht">Vrouw</option>
                                            <?php
                                            }
                                            ?>   
                                            </select>
                                        </div>

                                        <!-- <div class="col-lg-2" style="float: left; margin-top: 10px;"> Gebruikersnaam* </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="Gebruikersnaam" value="Renssommers" style="width: 35%;"><br>
                                        </div> -->

                                        <div class="col-lg-2" style="float: left; margin-top: 10px;"> Voornaam* </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="klant_voornaam" value="<?php echo $row["klant_voornaam"]; ?>" style="width: 35%;" required><br>
                                        </div>

                                        <div class="col-lg-2" style="float: left; margin-top: 10px;"> Achternaam* </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="klant_achternaam" value="<?php echo $row["klant_achternaam"]; ?>" style="width: 35%;" required><br>
                                        </div>

                                        <div class="col-lg-2" style="float: left; margin-top: 10px;"> Woonplaats </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="klant_plaats" value="<?php echo $row["klant_plaats"]; ?>" style="width: 35%;"><br>
                                        </div>

                                        <div class="col-lg-2" style="float: left; margin-top: 10px;"> Postcode </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="klant_postcode" value="<?php echo $row["klant_postcode"]; ?> BV" style="width: 35%;"><br>
                                        </div>

                                        <div class="col-lg-2" style="float: left; margin-top: 10px;"> Straat </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="klant_straat" value="<?php echo $row["klant_straat"]; ?>" style="width: 35%;"><br>
                                        </div>

                                        <div class="col-lg-2" style="float: left; margin-top: 10px;"> Huisnummer </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="klant_huisnr" value="<?php echo $row["klant_huisnr"]; ?>" style="width: 35%;"><br>
                                        </div>

                                        <div class="col-lg-2" style="float: left; margin-top: 10px;"> Telefoonnummer* </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="klant_telefoon" value="<?php echo $row["klant_telefoon"]; ?>" style="width: 35%;" required><br>
                                        </div>

                                        <div class="col-lg-2" style="float: left; margin-top: 10px;"> E-mailadres* </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="klant_email" value="<?php echo $row["klant_email"]; ?>" style="width: 35%;" required><br>
                                        </div>

                                        <div class="col-lg-2" style="float: left; margin-top: 10px;"> Wachtwoord* </div> 
                                        <div class="col-lg-10" style="float: left; margin-top: 10px;"> 
                                        <input type="text" name="klant_wachtwoord" value="<?php echo $row["klant_wachtwoord"]; ?>" style="width: 35%;" required><br>
                                        </div>
                                        <br>
                                         <input type="submit" class="add_cart_btn" style="cursor: pointer;" value="Opslaan" style="margin-top:30px;" name="submit">
                                </form>
                               
                        </div>
                        <div class="col-lg-3 float-md-right">
                            <div class="categories_sidebar">
                                <aside class="l_widgest l_color_widget">
                                        <div class="l_w_title">
                                            <h3>Menu</h3>
                                        </div>
                                        <a href="profilepage.php" style="text-decoration: underline;">Account</a><br>
                                        <a href="profileorders.php">Bestellingen</a>  <br>
                                        <a href="reviewtoevoegen.php">Review toevoegen</a>  
                                </aside>

                                <a class="abonneer_btn" href="index.php">Uitloggen</a>

                            </div>
                        </div>
                    </div>
                <?php
                    // }                    
                ?>
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