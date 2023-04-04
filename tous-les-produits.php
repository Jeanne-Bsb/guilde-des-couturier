<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    include("header.php");
    ?>
    <main>
        <!-- 1 : tout les produit de la mercerie
        2 : tout les services
        3 : tout les tissus
        4 : les accessoires
        5 : les patrons
        6 : les nouveau patron gratuits
        7 : les machines-->
        <h2>Notre Catalogue</h2>
        <?php
        include("connexion.php");
        $reference = $_GET["ref"];
        $requete = "SELECT * FROM article,categorie WHERE article.type=categorie.id_categorie AND";
        if($reference==1){
            $requete=$requete." categorie.id_categorie!=2";
        }elseif($reference==2){
            $requete=$requete." categorie.id_categorie=2";
        }elseif($reference==3){
            $requete=$requete." categorie.id_categorie=3";
        }elseif($reference==4){
            $requete=$requete." categorie.id_categorie=4";
        }elseif($reference==5){
            $requete=$requete." categorie.id_categorie=5";
        }elseif($reference==6){
            $requete=$requete." categorie.id_categorie=5 AND article.prix=0.00";
        }elseif($reference==7){
            $requete=$requete." categorie.id_categorie=1";
        }elseif($reference==0){
            $mot=$_GET["search"];
            $requete="SELECT * FROM article,categorie WHERE article.type=categorie.id_categorie AND (article.description LIKE '%$mot%' OR article.nom LIKE '%$mot%')";
        }
        $stmt=$db->query($requete);
        $resultat=$stmt->fetchall(PDO::FETCH_ASSOC);
        ?>
        
        <div class="product">
            <?php
            if ($resultat==NULL){
                echo "<p>Oups nous n'avons pas ce produit en stock.</p><p><a href='index.php'>Revenez sur la page d'accueil</a> et réessayer. Vous pouvez également regarder dans <a href='tous-les-produits.php?ref=1'>la Mercerie</a> si vous recherchez un produit ou bien dans <a href='tous-les-produits.php?ref=2'>Nos services</a> si vous recherchez une prestation.</p>";
            }else{
                foreach($resultat as $film){
                    echo "<section>\n
                    <img src='{$film["image"]}' alt=''>\n
                    <h2>{$film["nom"]}</h2>\n
                    <h4>{$film["nom_genre"]}</h4>\n
                    <a href='fiche-produit.php?id={$film["id"]}'><button class='reserver'>Voir</button></a>\n
                    </section> \n";
            }}
            ?>
        </div>
    </main>
    <?php
    include("footer.php");
    ?>
</body>
</html>