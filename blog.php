<?php 
    $title = "Blog";
    $description = "Le blog de la marque Gymthicol. Des témoignages et articles pertinents. Articles d’une grande qualité réalisé par le service communication de Gymthicol.";
    $keywords = "Gymthicol, actualités, blog, témoignage";
    $path = "https://gymthicol.eu/blog.php";
    include 'partial/header.php';
    include 'partial/breadcrumb.php';
?>

            <section id="blog-full-width">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                                <div class="blog-post-image">
                                    <img class="img-responsive" src="images/blog/post-1.jpg" alt="temoigne de natasha sur gymthicol" />
                                </div>
                                <div class="blog-content">
                                    <h2 class="blogpost-title">
                                    Natasha témoigne sur son expérience Gymthicol
                                    </h2>
                                    <div class="blog-meta">
                                    <span>08/11/2017</span> | 
                                    <span> Tags: <b>témoignage</b>, <b>mode de vie</b>, <b>gymthicol</b></span>
                                    </div>
                                    <p>Nous avons recueilli un témoignage sur la consommation de Gymthicol et nous sommes ravies de vous le faire partager :
                                    Je m’appelle Natasha, j’ai 22 ans et je suis étudiante. Je vous partage ici ma propre expérience sur Gymthicol. Alors flop ou top ?
                                    J’ai tout d’abord connu cette boissons énergisante à la suite d’un spot publicitaire, mais je n’osais pas sauter le pas, j’étais récalcitrante. Quel ...
                                    </p>
                                    <a href="temoignage-gymthicol.php" class="btn btn-dafault btn-details">Continuer à lire</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <?php 
                include 'partial/contact-cta.php';
                include 'partial/footer.php';
            ?>