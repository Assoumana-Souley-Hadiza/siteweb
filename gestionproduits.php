<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
        <div class="logo">
            <img src="logo.jpg" alt="logo de mon site">
            <p>Majestic Luxury Boutique</p>
        </div>
        <nav>
            <ul>
                <li> <a href="monsiteweb.php">Accueil</a></li>
                <li> <a href="apropos.php">A Propos</a></li>
                <li> <a href="nosvetements.php">Nos vêtements</a></li>
                <li> <a href="nouscontacter.php">Nous contacter</a></li>
            </ul>
        </nav>
    </header>
    <center>
    <h3>Bienvenue Administrateur</h3>
    </center>
   <?php
   include('menu.php');
   ?>
     <footer>
            <div class="footer-contenue">
                <p>Contactez nous:majesticluxury@gmail.com</p>
                <p>Suivez nous sur les réseaux sociaux:</p>
                <p><img src="facebook.png" alt="facebook"></p>
                <p><img src="twitter.png" alt="twitter"></p>
                <p>tel:+2126501243254</p>
                <p>copyritgth <small>tout droit réservé à majestic luxury</small></p>
            </div>
        </footer>
</body>
</html>