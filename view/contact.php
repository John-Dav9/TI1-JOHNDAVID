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
                <img src="../img/contacts.jpg" alt="Contactrie de Capenhagen">
                <p>Dans ce site, vous trouverez differentes informations concernant :</p>


                <form class="formulaire">
                    <div class="col-gauche">
                        <fieldset>
                            <legend>Votre identité</legend>
                            <div class="ligne identite">
                                <label for="nom">Nom</label>
                                <input type="text" id="nom">
                            </div>
                            <div class="ligne identite">
                                <label for="prenom">Prénom</label>
                                <input type="text" id="prenom">
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Vos coordonnées</legend>
                            <div class="ligne adresse">
                                <label for="rue">Rue</label>
                                <input type="text" id="rue">
                            </div>
                            <div class="ligne adresse">
                                <label for="numero">Numéro</label>
                                <input type="text" id="numero">
                            </div>
                            <div class="ligne ville">
                                <label for="cp">Code postal</label>
                                <input type="text" id="cp">
                            </div>
                            <div class="ligne ville">
                                <label for="ville">Ville</label>
                                <input type="text" id="ville">
                            </div>
                        </fieldset>
                    </div>

                    <div class="col-droite">
                        <fieldset>
                            <legend>Vos préférences</legend>

                            <div class="bloc">
                                <p>Langue utilisée :</p>
                                <label><input type="radio" name="langue" checked> Français</label>
                                <label><input type="radio" name="langue"> Néerlandais</label>
                                <label><input type="radio" name="langue"> Allemand</label>
                                <label><input type="radio" name="langue"> Anglais</label>
                            </div>

                            <div class="bloc">
                                <p>Activités :</p>
                                <label><input type="checkbox"> Cinéma</label>
                                <label><input type="checkbox"> Sport</label>
                                <label><input type="checkbox"> Lecture</label>
                                <label><input type="checkbox"> Jeux Vidéo</label>
                            </div>
                        </fieldset>

                        <div class="ligne message">
                            <label for="msg">Votre message</label>
                            <textarea id="msg"></textarea>
                        </div>

                        <div class="ligne consentement">
                            <label><input type="checkbox"> Acceptez-vous que vos données soient stockées ?</label>
                        </div>

                        <button type="submit">Envoyer</button>
                    </div>
                </form>
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