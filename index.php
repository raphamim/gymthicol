     <?php 
        $title = "Découvrez la nouvelle boisson énergisante biologique";
        $description = "Bienvenue sur la page d'accueil de Gymthicol, venez découvrir la nouvelle boisson énergisante tendance, biologique et écologique. Gymthicol est engagé en faveur du développement durable.";
        $keywords = "Gymthicol, Boisson Energisante, vitalité";
        $path = "https://www.gymthicol.eu/";
        include 'partial/header.php';
     ?>
      <!--
        ==================================================
        Slider Section Start
        ================================================== -->
            <section id="hero-area" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="block wow fadeInUp" data-wow-delay=".3s">
                                
                                <!-- Slider -->
                                <section class="cd-intro">
                                    <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                                    <span>Gymthicol, la nouvelle boisson</span><br>
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">Naturelle</b>
                                        <b>Ecologique</b>
                                        <b>Energétique</b>
                                    </span>
                                    </h1>
                                    </section> <!-- cd-intro -->
                                    <!-- /.slider -->
                                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                    Un concentré naturel  de bonne humeur, d’énergie et de vitalité à emporter partout avec vous. Essayez-le et l’excitation viendra au naturel.
                                    </h2>
                                    <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#about" data-section="#about" >En savoir plus</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!--/#main-slider-->
                <!--
                ==================================================
                Slider Section Start
                ================================================== -->
                <section id="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                                    <h2>
                                        A propos de nous
                                    </h2>
                                    <p>
                                        L'énergie fruitée "Gymthicol" à partir d'ingrédients naturels issus de l'agriculture biologique certifiée. Notre boisson se compose de fruits mûrs, de caféine provenant de véritables plantes de café et d'eau minérale naturelle. 
                                    </p>
                                    <p>
                                        Sans conservateurs, colorants et arômes! Gymthicol Energy Drink ravive, rafraîchit et améliore vos performances de manière naturelle. Et le meilleur de tous: les goûts organiques purs fantastiques.
                                    </p>
                                </div>
                                
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                                    <img src="images/about/about.jpg" alt="verre de gymthicol">
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- /#about -->
                                
                <?php 
                    include 'partial/contact-cta.php';
                    include 'partial/footer.php';
                ?>
        