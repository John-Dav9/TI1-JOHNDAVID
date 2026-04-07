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
        <img src="public/img/banniere.jpg" alt="">
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
            <h1>Bienvenu sur notre site consacré à Capenhaguen</span></h1>
            <img src="./../public/img/armoiries_Copenhagen.svg.png" alt="Armoirie de Capenhagen">
            <p style="font-size: 1.2rem; max-width: 600px; margin: 0 auto 2rem; color: var(--text-light);">
                Copenhague est la capitale et la plus grande ville du Danemark. La commune de Copenhague (Københavns Kommune) compte 623 404 habitants en 2014, et son agglomération, le Grand Copenhague, en compte 1 320 628 (janvier 2019). Le nom de Copenhague est généralement donné à l'ensemble du comté de Copenhague, qui regroupe quant à lui 1 822 659 habitants. Située sur la côte orientale de l'île de Seeland, face au détroit d'Øresund qui sépare le Danemark de la Suède voisine, Copenhague est reliée à Malmö par le pont de l'Øresund. Son nom danois, København, déformation de Købmandshavn (« le port des commerçants »), rappelle sa position stratégique sur le Kattegat, à proximité immédiate de la mer Baltique.
                Fondée au xe siècle par les Vikings, Copenhague est à l'origine un village de pêcheurs, fortifié en 1167. La ville devient la capitale du Royaume de Danemark dès le début du xve siècle. Au cours du xviie siècle, sous le règne du roi Christian IV, elle devient une des plus grandes villes d'Europe du Nord, renforçant son statut de capitale. Après avoir connu les ravages de la peste et de nombreux incendies au xviiie siècle, Copenhague voit se construire la vieille ville actuelle, et notamment le quartier de Frederiksstaden et des institutions comme le Théâtre royal danois ou l'Académie royale des beaux-arts. En partie détruite par les troupes de l'amiral Nelson lors de la bataille de Copenhague (1801), la ville est reconstruite dans un style néoclassique durant l'Âge d'or danois. L'urbanisme de Copenhague est rénové à la suite de la Seconde Guerre mondiale par le plan Finger (en), qui organise le développement industriel et urbain autour des cinq voies ferrées partant du centre-ville (Indre By).
                Copenhague est le siège du parlement national (le Folketing), du gouvernement et de la monarchie danoise ; plusieurs institutions se trouvent dans le château de Christiansborg. Elle est également le cœur industriel et financier du pays, accueillant les sièges sociaux des plus grandes entreprises danoises, comme Maersk, Novo Nordisk et la brasserie Carlsberg. Le niveau de vie y est très élevé et le PIB par habitant est parmi les plus importants au monde. Outre un dynamisme industriel dans les services et la pharmaceutique, l'économie de Copenhague est marquée par le développement des cleantechs, en lien avec l'objectif municipal de parvenir à la neutralité carbone d'ici 2025. Les transports en commun et l'usage du vélo sont très fortement développés.
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