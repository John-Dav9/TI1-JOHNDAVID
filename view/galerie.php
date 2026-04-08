<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TI1 - SITE DE BRUXELLE</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include ROOT_PATH."/view/inc/entete.php";
    ?>
    <div class="page-wrapper">
       
            <?php
            // chemin absolu
            include ROOT_PATH."/view/inc/menu.php";
            // chemin relatif (en PHP à partir de la page qui appelle)
            # include "inc/menu.php";

            ?>
       

        <main>
            <section class="contenu">
                <h2>Bienvenu sur notre site consacré à Capenhaguen</h2>
                
                <p style="font-size: 1.2rem; max-width: 600px; margin: 0 auto 2rem; color: var(--text-light);">Dans ce site, vous trouverez differentes informations concernant :</p>


                <div class="galerie">

                    <figure>
                        <a href="img/1280px_Caritasbrønden.jpg" data-lightbox="galerie" data-title="Fontaine Caritas brønden">
                            <img src="img/480px_Caritasbrønden.jpg" alt="Fontaine Caritasbrønden">
                        </a>
                        <figcaption>Fontaine Caritasbrønden</figcaption>
                    </figure>

                    <figure>
                        <a href="img/1280px_Christiansborg.jpg" data-lightbox="galerie" data-title="Palais de Christiansborg">
                            <img src="img/480px_Christiansborg.jpg" alt="Palais de Christiansborg">
                        </a>
                        <figcaption>Palais de Christiansborg</figcaption>
                    </figure>

                    <figure>
                        <a href="img/1280px_frederiksborg-castle.jpg" data-lightbox="galerie" data-title="Chateau de Frederiksborg">
                            <img src="img/480px_frederiksborg-castle.jpg" alt="Chateau de Frederiksborg">
                        </a>
                        <figcaption>Chateau de Frederiksborg</figcaption>
                    </figure>

                    <figure>
                        <a href="img/1280px_København.jpg" data-lightbox="galerie" data-title="Vue de Copenhague">
                            <img src="img/480px_København.jpg" alt="Vue de Copenhague">
                        </a>
                        <figcaption>Vue de Copenhague</figcaption>
                    </figure>

                    <figure>
                        <a href="img/1280px_Magstaede_street.jpg" data-lightbox="galerie" data-title="Rue Magstraede">
                            <img src="img/480px_Magstaede_street.jpg" alt="Rue Magstraede">
                        </a>
                        <figcaption>Rue Magstraede</figcaption>
                    </figure>

                    <figure>
                        <a href="img/1280px_sirene.jpg" data-lightbox="galerie" data-title="La Petite Sirène">
                            <img src="img/480px_sirene.jpg" alt="La Petite Sirène">
                        </a>
                        <figcaption>La Petite Sirène</figcaption>
                    </figure>

                </div>
            </section>
        </main>  
    </div>

    <script src="lightbox/js/lightbox.min.js"></script>

    <script src="js/script.js"></script>
</body>
</html>