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
            <h1>Une capitale riche, variée et surtout stratégique</span></h1>
            <img src="../img/geographie.png" alt="Geographie de Capenhagen">
            <p style="font-size: 1.2rem; max-width: 600px; margin: 0 auto 2rem; color: var(--text-light);">
             La ville de Copenhague est située sur la côte orientale de l'île de Seeland, mais aussi sur l'île plus petite d'Amager, laquelle se trouve face au détroit d'Øresund, qui relie la mer du Nord à la mer Baltique et sépare le Danemark de la Suède.
            La partie ouest de Copenhague est relativement plate, mais on trouve un terrain plus accidenté au nord et au sud de la ville.
            Au nord-ouest de Copenhague se dresse, par exemple, une assez grande chaîne de collines culminant à 50 m d'altitude. Ces paysages vallonnés sont coupés par des lacs et la rivière Mølleåen.
            Le point culminant du Grand-Copenhague se trouve dans le bois de Rude à 91 m d'altitude. À cause de l'altitude plus élevée autour de Gladsaxe, on y a placé une réserve pour l'approvisionnement en eau de Copenhague ainsi que le poste émetteur de Gladsaxe.
            Au sud-ouest, se dresse une déformation calcaire dans la faille de Carlsberg.
            </p>
            <p style="font-size: 1.2rem; max-width: 600px; margin: 0 auto 2rem; color: var(--text-light);">
                Les parties centrales de Copenhague se situent plutôt sur un terrain plus plat ou plus ou moins vallonné comme à Valby ou Brønshøj.
                Deux systèmes de vallées suivent du nord-est au sud-ouest ces petites chaînes de collines ; dans l'une des vallées, se situent les lacs du centre de Copenhague, dans l'autre se trouve le lac Damhussøen. Ces petites vallées sont recoupées par les rivières Harestrup Å et Ladegårdsåen.
                Amager et une grande partie de la vieille ville se situe sur un terrain côtier plat. Une partie de la vieille ville, y compris Christianshavn et Islandsbrygge, se trouve aujourd'hui sur une zone qui constituait le fond marin il y a 500 ans.
                D'un point de vue géologique, Copenhague se situe, comme la plus grande partie du Danemark, sur une moraine de fond datant de la période glaciaire, qui elle-même repose sur un fond calcaire plus dur. À certains endroits, il n'y a que 10 m jusqu'au fond calcaire, ce qui posa d'importants problèmes lors de la construction des voies de métro.
                Copenhague a un climat de type Cfb (océanique) avec comme record de chaleur 33,8 °C le 12 août 1975 et comme record de froid −24,2 °C le 26/1/1942. La température moyenne annuelle est de 9 °C.
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