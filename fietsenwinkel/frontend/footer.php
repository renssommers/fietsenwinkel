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
                            if (!empty($_GET['nieuwsbrief'])) {
                                $nieuwsbrief = $_GET['nieuwsbrief'];
                                $insert = "INSERT INTO nieuwsbrief (nieuwsbrief_id,nieuwsbrief_email)VALUES(Null,'$nieuwsbrief')";
                                if ($conn->query($insert) === TRUE) {
                                    //Later popup van maken.
                                    echo "U bent aangemeld.";
                                } else {
                                    echo "Error: " . $insert . "<br>" . $conn->error;
                                }
                            }
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