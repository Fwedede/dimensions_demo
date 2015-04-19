<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dimensions - Local</title>
    <link rel="canonical" href="http://localhost/dimensions_demo" />
    <link rel="icon" type="image/png" href="assets/img/logos/favicon.png">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Exo">
    <link rel="stylesheet" type="text/css" href="assets/stylesheet/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<div id="fb-root"></div>
<body>

    <header>
        <nav>
            <ul class="container list-unstyled list-inline text-right font-xl">
                <li class="pull-left"><a href="#home"><img src="assets/img/logos/logo-dimensions-menu.png" alt="logo-dimensions-petit"></a></li>
                <li class="menu_query">
                    <img src="assets/img/utilities/Base_03.png">
                    <ul>
                        <li><a class="link" href="#qui">Qui sui-je ?</a></li>
                        <li><a class="link" href="#realisations">Réalisations</a></li>
                        <li><a class="link" href="#services">Services</a></li>
                        <li class="last"><a class="link" href="#contact">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <section class="container main-body-wrap" id="home">
            <h1 class="title"><img src="assets/img/logos/logo-dimensions.png" alt="Dimensions_logo"></h1>
            <p>Donnez une autre dimension à votre image</p>
        </section> 
        <a href="#qui" class="animated infinite bounce scroll-down icon-arrow-down2"></a>
    </header>

    <main>
        <section class="container main-body-wrap" id="qui">
            <h2>Qui suis-je ?</h2>
            <article>
                <p>Passionnée de design, mon cursus professionnel en a l’empreinte quelqu’en&nbsp;soit le support ou la dimension.<br><br>En passant par le print, le web ou la décoration, l’image est primordiale, de la création d’un logo, d’un site web ou d’un agencement.</p><br>
                <p>Frédérique CLEMENT</p>
            </article>
            <figure>
                <img src="assets/img/utilities/photo-moi.png" alt="Portrait-Frederique Clement">
            </figure>
            <article>
                <div class="performances">
                <h3>Mes compétences</h3>
                <div>
                    <h4>Print</h4>
                    <button type="button" class="chart tooltip-item" data-percent="70">
                        <img src="assets/img/competences/Ps.png" alt="Logo_Photoshop">
                        <div class="tooltip">
                            <p>Adobe Photoshop CS5: logiciel de retouche, de traitement et de dessin sur ordinateur.</p>
                        </div>
                    </button><!--
                 --><button type="button" class="chart tooltip-item" data-percent="60">
                        <img src="assets/img/competences/Ai.png" alt="Logo_Illustrator">
                        <div class="tooltip">
                            <p>Adobe Illustrator CS5: logiciel de création graphique vectorielle.</p>
                        </div>
                    </button><!--
                 --><button type="button" class="chart tooltip-item" data-percent="80">
                        <img src="assets/img/competences/Id.png" alt="Logo_Indesgign">
                        <div class="tooltip">
                            <p>Adobe Indesign CS5: logiciel de mise en page, de publication sur ordinateur.</p>
                        </div>
                    </button>
                </div>
                <div>
                    <h4>Web</h4>
                    <button type="button" class="chart tooltip-item" data-percent="80">
                        <img src="assets/img/competences/Dw.png" alt="Logo_Dreamweaver">
                        <div class="tooltip">
                            <p>Adobe Dreamweaver CS5: éditeur de site web.</p>
                        </div>
                    </button>
                    <button type="button" class="chart tooltip-item" data-percent="90">
                        <img src="assets/img/competences/Html.png" alt="Logo_Html">
                        <div class="tooltip">
                            <p>HTML 5: langage pour représenter les pages web.</p>
                        </div>
                    </button>
                    <button type="button" class="chart tooltip-item" data-percent="90">
                        <img src="assets/img/competences/Css.png" alt="Logo_Css">
                        <div class="tooltip">
                            <p>CSS 3: langage qui décrit la présentation des documents HTML.</p>
                        </div>
                    </button>
                    <button type="button" class="chart tooltip-item" data-percent="40">
                        <img src="assets/img/competences/Js.png" alt="Logo_Javascript">
                        <div class="tooltip">
                            <p>HTML 5: langage pour représenter les pages web.</p>
                        </div>
                    </button>
                </div>
                <div>
                    <h4>Décoration</h4>
                    <button type="button" class="chart tooltip-item" data-percent="80">
                        <img src="assets/img/competences/AutoCad.png" alt="Logo_AutoCad">
                        <div class="tooltip">
                            <p>AutoCad: logiciel de dessin assisté par ordinateur (DAO) pour la 2D et le 3D.</p>
                        </div>
                    </button>
                    <button type="button" class="chart tooltip-item" data-toggle="tooltip" title="" data-placement="bottom" data-percent="65">
                        <img src="assets/img/competences/Sketchup.png" alt="Logo_Sketchup">
                        <div class="tooltip">
                            <p>Google Sketchup: logiciel de modélisation 3D, d'animation et de cartographie orienté vers l'architecture.</p>
                        </div>
                    </button>
                </div>
            </article>
            </div>
        </section>

        <section class="container main-body-wrap" id="realisations">
            <h2>Réalisations</h2>
                <?php
                    try{
                        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                        $bdd = new PDO('mysql:host=localhost;dbname=dimensions', 'root', '', $pdo_options);
                    }
                    catch(Exception $e)
                        {die('Erreur : '.$e->getMessage());}

                        $bdd->exec("SET CHARACTER SET utf8");
                        $req = $bdd->query("SELECT * FROM realisations WHERE id=1 ORDER BY id ASC ");
                ?>
                <div class="tab">
                <?php 
                    if($req->rowCount() > 0) {
                        while($res = $req->fetch()) {
                            require('assets/view/realisations.html');
                        }
                    }
                ?>
                </div>
            </div>
        </section>

        <section class="container main-body-wrap" id="services">
            <h2>Services</h2>
        </section>

        <section class="container main-body-wrap" id="contact">
            <h2>Contactez-moi</h2>
            <p class="text-center">Besoin de me contacter sur mes services, mon agence ou tout autre chose, c'est ici</p>
            <form class="col-md-7" action="index.html" method="post">
                <input type="text" placeholder="NOM Prénom" id="name" name="name" value="">
                <input type="text" placeholder="E-mail" id="email" name="email" value="">
                <input type="text" placeholder="Objet" id="object" name="object" value="">
                <textarea id="message" placeholder="Message" name="message" rows="6"></textarea>
                <button class="pull-right" type="submit">Valider</button>
            </form>
            <div class="col-md-5 text-right">
                <div class="address">
                    Agence Dimensions<br>
                    <a href="tel:0642351092">06.42.35.10.92</a><br>
                    <br>
                    <a href="clementfj@gmail.com">clementfj@gmail.com</a>
                </div>
                <div class="social row">
                    <a class="col-md-2 col-md-offset-4" href="https://www.facebook.com/pages/Agence-Dimensions/965360680158140"><img src="assets/img/socials/logo-facebook.png" alt="logo-facebook"></a>
                    <a class="col-md-2 col-md-offset-1" href="https://www.linkedin.com/pub/frederique-clement/95/a06/434"><img src="assets/img/socials/logo-linkedin.png" alt="logo-linkedin"></a>
                    <a class="col-md-2 col-md-offset-1" href="https://fr.pinterest.com/Fwedede/"><img src="assets/img/socials/logo-pinterest.png" alt="logo-pinterest"></a>
                </div>
            </div>
        </section>
    </main>
    
    <footer class="text-center font-xs">
        <section>
            <p>Agence Dimensions - Créatrice d'une dimension visuelle, agencée ou événementielle pour votre image.</p>
            <div class="fb-like inline-flex" data-href="https://www.facebook.com/pages/Agence-Dimensions/965360680158140" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
            <div class="g-plusone inline-flex" data-size="medium" data-annotation="inline" data-width="300"></div>
            <p>© Copyright 2015 - Site développé par Steeve "TokaLazy" Clément.</p>
        </section>
    </footer>
    <script src="assets/script/jquery.min.js"></script>
    <!--script src="assets/script/realisations.js"></script-->
    <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.4/jquery.easypiechart.min.js"></script>
    <script src="assets/script/header.js"></script>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3&appId=130169510352357";
            fjs.parentNode.insertBefore(js, fjs);
            }
        (document, 'script', 'facebook-jssdk'));
    </script>
    <script type="text/javascript">
        (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                po.src = 'https://apis.google.com/js/plusone.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
</script>  
</body>
</html>
