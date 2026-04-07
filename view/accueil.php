<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TI1 - SITE DE BRUXELLE</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <?php
        // chemin absolu
        include ROOT_PATH."/view/inc/menu.php";
        // chemin relatif (en PHP à partir de la page qui appelle)
        # include "inc/menu.php";

        ?>
    </header>

    <main>
        BLABLABLA TEST DE FONCTIONNALIT2
    </main>

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