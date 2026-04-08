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
                <h1>Pour nous contacter</span></h1>
                <img src="../img/contacts.jpg" alt="Contactrie de Capenhagen">
                <p>Pour nous laisser un commentaire ou pour obtenir un renseignement complementaire, rempplissez lz formulaire ci-dessous :</p>


                <form class="formulaire">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom">
                    <label for="ville">Ville</label>
                    <input type="text" id="prenom">
                    <label for="email">Email</label>
                    <input type="email" id="rue">
                    <div class="ligne message">
                        <label for="msg">Commentaire</label>
                        <textarea id="msg"></textarea>
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