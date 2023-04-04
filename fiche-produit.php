<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Molle&family=Nunito&display=swap" rel="stylesheet"> 
    <link rel="icon" type="image/png" href="img/favicon-32.png">
    <title>Document</title>
</head>
<body>
    <?php
    include("header.php");
    ?>
    <main>
        <?php
        include("connexion.php");
        $numero= $_GET["id"];
        $requete="SELECT * FROM article,categorie WHERE article.id = $numero AND article.type=categorie.id_categorie";
        $stmt=$db->query($requete);
        $resultat=$stmt->fetchall(PDO::FETCH_ASSOC);
        ?>

        <?php foreach ($resultat as $film) :?>
        <div class="container">
            <img src='<?= $film["image"]?>' alt='' class='affiche'>
            <div class='fp-texte'>
                <h2><?= $film["nom"]?></h2>
                <h3><?= $film["nom_genre"]?></h3>
                <p><?= $film["prix"]?> <?= $film["unite"]?></p>
            </div>
        </div>
        <p><?= $film["description"]?></p>
        <button class="reserver" id="reserver">Réserver</button>
        <div class="container-form">
            <div class="formulaire">
                <form method="post">
                    <label for="Nom">Entrez votre nom :</label>
                    <input type="text" name="Nom" id="Nom" placeholder="Michel">
                    <label for="Prenom">Entrez votre prénom :</label>
                    <input type="text" name="Prenom" id="Prenom" placeholder="Michel">
                    <label for="mail">Entrez votre adresse mail :</label>
                    <input type="email" name="mail" id="mail" placeholder="michelaucarre@gmail.com">
                    <label for="tel">Entrez votre numéro téléphone :</label>
                    <input type="tel" name="tel" id="tel" placeholder="+33 1 23 45 67 89">
                    <label for="date">Sélectionnez une date de retrait :</label>
                    <input type="date" name="date" id="date">
                    <label for="valider">Enregistrer</label>
                    <input type="submit" name="valider" id="valider">
                    <input type="hidden" name="id" id="id" value="<?= $film["id"]?>">
                </form>
            </div>
        </div>
        <?php
            include("connexion.php");
            if ( isset( $_POST['valider'] ) ) {
                $id=$_POST["id"];
                $nom=$_POST["Nom"];
                $prenom=$_POST["Prenom"];
                $mail=$_POST["mail"];
                $tel=$_POST["tel"];
                $date=$_POST["date"];
                echo "<p>Merci pour votre commande $prenom $nom!<br> Un mail va vous être envoyer à l'adresse $mail pour confirmer la réservation de {$film["nom"]}, à venir récupérer le $date dans le point de collecte le plus proche de chez vous!</p>";
                $requete="INSERT INTO `reservation` (`nom_user`, `prenom_user`, `mail`, `tel`, `id_user`, `reserve`,`date`) VALUES ('$nom', '$prenom', '$mail', '$tel', NULL, '$id','$date');";
                $stmt=$db->query($requete);
                $resultat=$stmt->fetchall(PDO::FETCH_ASSOC);
                if(isset($_POST["contenu"])){
                    $contenu="<h1>". $_POST["contenu"]."</h1>";
                    $headers[] = 'MIME-Version: 1.0';
                    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                mail('renaud.eppstein@u-pem.fr','test subject',$contenu,implode("\r\n", $headers));
                echo "Mail envoyé";
                }
            }

        ?>
        <?php endforeach;?>
    </main>
    <?php
    include("footer.php");
    ?>
</body>
<script type="text/javascript" src="script.js">
    document.addEventListener("DOMContentLoaded", function () {
    });
</script>
</html>