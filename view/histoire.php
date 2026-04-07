<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TI1 - SITE DE BRUXELLE</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <img src="../img/banniere.jpg" alt="">
        <h1>CAPENHAGUE</h1>
    </div>

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
            <h1>Histoire</span></h1>
            <img src="../img/histoire.png" alt="Histoire de Capenhagen">

            <h3>Préhistoire</h3>
            <p style="font-size: 1.2rem; max-width: 600px; margin: 0 auto 2rem; color: var(--text-light);">
                Un certain nombre de découvertes archéologiques découvertes de la préhistoire ont été faites dans la région de Copenhague. Les découvertes importantes d'outils en silex de la région fournissent des preuves des établissements humains datant du mésolithique. Lors de la construction d'Amager Strandpark, des vestiges d'une colonie côtière du néolithique ont été trouvés6. Des tumulus dans les banlieues indiquent une activité humaine à l'âge du bronze, et de nombreux noms de villages près de Copenhague témoignent également de la fondation de villages dans la région du Grand Copenhague à l’âge des Vikings.
                Bien que les premiers documents historiques de Copenhague soient datés de la fin du xiie siècle, les découvertes archéologiques récentes dans le cadre des travaux sur le métro de la ville ont révélé les vestiges d'un manoir de grand marchand construit environ vers 1020 apr. J.-C. près de la place publique Kongens Nytorv ainsi que les restes d'une ancienne église, avec des tombes datant du xie siècle près du lieu où se réunit la rue commerçante Strøget et la place de l'hôtel de ville Rådhuspladsen6.
                Ces découvertes indiquent que les origines de Copenhague en tant que ville remontent au moins au xie siècle. De plus, les découvertes importantes d'outils en silex de la région fournissent des preuves des établissements humains datant de l'Âge de la pierre. Plusieurs historiens croient que la ville moderne de Copenhague prend racine à la fin de l'Âge des Vikings et que celle-ci a été probablement fondée par Sven Ier de Danemark.
                Des fouilles ont mis en évidence l'existence de deux colonies au xie siècle. La première était située entre les actuelles rues Mikkel Bryggersgade, Vestergade, Gammeltorv/Nytorv et Løngangsstræde, ce qui correspondait à peu près à la ligne côtière de l'époque. La seconde, plus petite, correspond à l'actuel Kongens Nytorv.
            </p>

            <p>
                <a href="../?p=geographie" class="liens-utiles">Ici nous parlerons de la vile de Capenhague, une présentation envers le Danemark et son role dans le monde</a>
            </p>
            <p>
                <a href="../?p=histoire" class="liens-utiles">Un rappel historique, de sa fondation à aujourd'hui</a>
            </p>
            <p>
                <a href="../?p=culture" class="liens-utiles">Un tour d'horizon en matiere d'art et culture</a>
            </p>
            <p>
                <a href="../?p=galerie" class="liens-utiles">Une galerie de photographie</a>
            </p>
            <p>
                <a href="../?p=contact" class="liens-utiles">Un formulaire pour nous contacter</a>
            </p>
            <p>
                <a href="../?p=liens" class="liens-utiles">Des liens vers les sites partenaires</a>
            </p>
            
            <p>source :
                <a href="https://fr.wikipedia.org/wiki/Copenhague" class="reference">Wikipédia - Ville de Capenhague</a>
            </p>
            
        </section>
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