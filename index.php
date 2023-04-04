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
        <div class="containerslider">
            <div class="js-slider">
                <div class="js-photos">
                    <div class="js-photo green-darker">
                        Photo 3
                    </div>
                    <div class="js-photo green">
                        Photo 1
                    </div>
                    <div class="js-photo green-dark">
                        Photo 2
                    </div>
                    <div class="js-photo green-darker">
                        Photo 3
                    </div>
                    <div class="js-photo green">
                        Photo 1
                    </div>
                </div>
            </div>
            <!-- <img src="img/arrow.svg" alt="" class="bouton gauche">
            <img src="img/arrow.svg" alt="" class="bouton droite"> -->
        </div>
        <div class="search-container">
            <form action="tous-les-produits.php">
                <input type="hidden" name="ref" value="0">
                <input type="text" placeholder="Search.." name="search" id="search">
                <button type="submit"><img src="img/loupe.svg" alt="Chercher"></button>
            </form>
        </div>
        <section>
            <h2>Bienvenue dans la Guilde!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eufugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officiadeserunt mollit anim id est laborum.</p>
        </section>
        <section>
            <h2>Découvrez la Mercerie :</h2>
            <div class="mercerie">
                <a href="tous-les-produits.php?ref=3"><img src="img/mercerie-tissus.jpg" alt="Accéder aux tissus"></a>
                <a href="tous-les-produits.php?ref=4"><img src="img/mercerie-accessoire.jpg" alt="Accéder aux accessoires"></a>
                <a href="tous-les-produits.php?ref=5"><img src="img/image.png" alt=""></a>
                <a href="tous-les-produits.php?ref=7"><img src="img/mercerie-machine.jpg" alt="Accéder aux machines"></a>
            </div>
        </section>
        <section>
            <h2>Nouveauté</h2>
            <div class="nouveau">
                <div class="new gauche"><img src="img/image.png" alt=""></div>
                <div class="new droite">
                    <div class="texte">
                        <h3>Des patrons gratuit !</h3>
                        <p>Les modèles simple sont déshormais disponible sans débourser un centime! Télécharger puis
                            imprimer le document, recoller les morceaux et vous n’avez plus qu’à utiliser votre patron
                            pour fabriquer des merveilles! ça vous tente?</p>
                        <a href="tous-les-produits.php?ref=6">Allons voir</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include("footer.php");
    ?>
</body>
<script src="./slider.js"></script>

</html>