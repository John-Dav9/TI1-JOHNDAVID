<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_GET['p']?></title>
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
                <h2>Pour nous contacter</h2>
                <img src="img/contacts.jpg" alt="Contactrie de Capenhagen" class="img-centree">
                <p style="text-align: center;">Pour nous laisser un commentaire ou pour obtenir un renseignement complementaire, rempplissez lz formulaire ci-dessous :</p>


                <form class="formulaire">
                    <div class="ligne">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom">
                    </div>
                    <div class="ligne">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom">
                    </div>
                    <div class="ligne">
                        <label for="ville">Ville</label>
                        <input type="text" id="ville">
                    </div>
                    <div class="ligne">
                        <label for="email">Email</label>
                        <input type="text" id="email">
                    </div class="ligne">
                    <div class="ligne message">
                        <label for="msg">Commentaire</label>
                        <textarea id="msg"></textarea>
                    </div>
                    <div class="btn">
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </section>
        </main>
    </div>

    <script src="js/script.js"></script>
</body>
</html>