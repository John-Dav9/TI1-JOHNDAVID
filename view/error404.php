<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TI1 - SITE DE BRUXELLE</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>


    <?php
    //include ROOT_PATH."/view/inc/entete.php";
    include "inc/entete.php";
    ?>
    <div class="page-wrapper">
            <?php
            // chemin absolu
            //include ROOT_PATH."/view/inc/menu.php";
            // chemin relatif (en PHP à partir de la page qui appelle)
            include "inc/menu.php";

            ?>
        <main>
            <section style="text-align: center; margin-top: 10vh;">
                <h1>ERREUR 404</span></h1>
                <img src="../img/404.jpg" alt="Armoirie de Capenhagen">
                <!-- un lien pour retourner à l'accueil -->
                <a href="../index.php">Retour à l'accueil</a>        
            </section>
        </main>
    </div>
    <script src="js/script.js"></script>
</body>
</html>