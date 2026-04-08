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
    <div>
        <header>
            <?php
            // chemin absolu
            include ROOT_PATH."/view/inc/menu.php";
            // chemin relatif (en PHP à partir de la page qui appelle)
            # include "inc/menu.php";

            ?>
        </header>

        <main>
            <section style="text-align: center; margin-top: 10vh;">
                <h1>Bienvenu sur notre site consacré à Capenhaguen</span></h1>
                
                <p>Dans ce site, vous trouverez differentes informations concernant :</p>


                <div>
                    <img src="../img/480px_Caritasbrønden.jpg" alt="image1">
                    <img src="../img/480px_Christiansborg.jpg" alt="image2">
                    <img src="../img/480px_frederiksborg-castle.jpg" alt="image3">
                    <img src="../img/480px_København.jpg" alt="image4">
                    <img src="../img/480px_Magstaede_street.jpg" alt="image5">
                    <img src="../img/480px_sirene.jpg" alt="image6">
                </div>
            </section>
        </main>  
    </div>


    <footer>
        <?php
        // chemin absolu
        include ROOT_PATH."/view/inc/footer.php";
        // chemin relatif (en PHP à partir de la page qui appelle)
        # include "inc/footer.php";

        ?>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>