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
    <div class="container">
        <header>
            <?php
            // chemin absolu
            include ROOT_PATH."/view/inc/menu.php";
            // chemin relatif (en PHP à partir de la page qui appelle)
            # include "inc/menu.php";

            ?>
        </header>

        <main>
            <section class="contenu">
                <h2>Quelquesliens vers nos partenaires</h2>
                <img src="../img/liens.jpg" alt="lienvers les paetenaires de notre site de Capenhagen">


                <h3>D'autres capitales se sont associés à notre site</h3>
                <div>
                    <ul>
                        <li><a href="#" class="liens-utiles">Berlin</a></li>
                        <li><a href="#" class="liens-utiles">Viennes</a></li>
                        <li><a href="#" class="liens-utiles">Paris</a></li>
                        <li><a href="#" class="liens-utiles">Madrid</a></li>
                        <li><a href="#" class="liens-utiles">Londres</a></li>
                        <li><a href="#" class="liens-utiles">Rome</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><a href="#" class="liens-utiles">Lisbonne</a></li>
                        <li><a href="#" class="liens-utiles">Prague</a></li>
                        <li><a href="#" class="liens-utiles">Amsterdam</a></li>
                        <li><a href="#" class="liens-utiles">Bruxelles</a></li>
                        <li><a href="#" class="liens-utiles">Dublin</a></li>
                        <li><a href="#" class="liens-utiles">Athènes</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><a href="#" class="liens-utiles">Sofia</a></li>
                        <li><a href="#" class="liens-utiles">Varsovie</a></li>
                        <li><a href="#" class="liens-utiles">Helsinki</a></li>
                        <li><a href="#" class="liens-utiles">Stockholm</a></li>
                        <li><a href="#" class="liens-utiles">Oslo</a></li>
                        <li><a href="#" class="liens-utiles">Budapest</a></li>
                        <li><a href="#" class="liens-utiles"></a></li>
                    </ul>
                </div>
                
                <p>source :
                    <a href="https://fr.wikipedia.org/wiki/Copenhague" class="reference">Wikipédia - Ville de Capenhague</a>
                </p>
                
            </section>
        </main>
    </div>


    <script src="js/script.js"></script>
</body>
</html>