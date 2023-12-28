<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nos vêtements</title>
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
                <li> <a href="Apropos.php">A Propos</a></li>
                <li> <a href="nosvetements.php">Nos vêtements</a></li>
                <li> <a href="nouscontacter.php">Nous contacter</a></li>
            </ul>
        </nav>
    </header>
    <section class="produit-section">
        <div class="produit-colonne">
            <img src="clothes-store-with-rack-clothes.jpg" alt="produit1">
            <h3>Veste femme</h3>
            <p class="prix">495.75MAD</p>
            <button onclick="ajouterAuPanier()">Ajouter au panier</button>
        </div>
        <div class="produit-colonne">
            <img src="beautiful-second-hand-market.jpg" alt="produit1">
            <h3>Jilet</h3>
            <p class="prix">349.95 MAD</p>
            <button onclick="ajouterAuPanier()">Ajouter au panier</button>
        </div>
        <div class="produit-colonne">
            <img src="shirt-mockup-concept-with-plain-clothing.jpg" alt="produit1">
            <h3>Chemise homme</h3>
            <p class="prix">200.00 MAD</p>
            <button onclick="ajouterAuPanier()">Ajouter au panier</button>
        </div>
    </section>
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