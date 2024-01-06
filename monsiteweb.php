<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majestic Luxury</title>
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
    <section class="slogan">
        <h2>Style qui parle,prix qui séduisent!!!!Votre garde-robe idéale à portée de clic!!!!!</h2>
        <p>Explorez notre collection de vêtements de qualité</p>
        <div class="recherche">
            <input type="text" placeholder="Recherche...">
            <button>Rechercher</button>
        </div>
    </section>
        <div class="banniere">
            <img src="ensemble-vetements-colores-feminins-etageres-chaussures-dans-magasin-vetements-toute-nouvelle-boutique-moderne.jpg" alt="banniere de bienvenue">
            <div class="banniere-text">
             <h1>Bienvenue sur Notre site</h1>
            <h1>Découvrez la qualité et le style dans chaque pièce de notre collection!!</h1>
            </div>
        </div>
        <section class="produit-section">
            <div class="produit-colonne">
                <img src="femme-blonde-positive-lunettes-noires-choisit-vetements-mode-portemanteau.jpg" alt="produit1">
                <h3>Ensemble patalon+Chemisier</h3>
                <p class="prix">250 MAD</p>
                <button onclick="ajouterAuPanier('Ensemble patalon+Chemisier',250 )">Ajouter au panier</button>
            </div>
            <div class="produit-colonne">
                <img src="dame-pantalon-chemisier-garde-robe-paillettes-femme-posant-paquets-lors-vos-achats-fond-rose.jpg" alt="produit1">
                <h3>Portemanteau</h3>
                <p class="prix">350 MAD</p>
                <button onclick="ajouterAuPanier('Portemanteau',350)">Ajouter au panier</button>
            </div>
            <div class="produit-colonne">
                <img src="chemisier-blanc-decontracte-mode-feminine.jpg" alt="produit1">
                <h3>Chemisier manche longue</h3>
                <p class="prix">150 MAD</p>
                <button onclick="ajouterAuPanier('Chemisier manche longue',150)">Ajouter au panier</button>
            </div>
            <p id="panier"></p>
    
        </section>
        <section>
        <h2>Panier</h2>
    <ul id="liste-panier"></ul>
    <p id="total">Total: 0 MAD</p>
    <button onclick="allerAuFormulaire()">Payer</button>
        </section>
        <section class="image-texte">
            <div class="text">
                <h2> Nos Modeles pour l'été!!</h2>
                <p> Vêtements conçus avec des lignes élégantes et des tissus de haute qualité,accentué par des détails raffinés,pour captiver</p>
                <p>l'attention du client en quête de style et de sophistication. Question de toujours rester à la mode!!</p>
            </div>
            <aside class="image-gauche">
                <img src="trois-jeunes-belles-filles-souriantes-dans-vetements-jeans-decontractes-ete-mode-femmes-insouciantes-sexy-posant-modeles-positifs-lunettes-soleil.jpg" alt="des filles">
            </aside>
        </section>
        <script>
             let panier = [];

function ajouterAuPanier(nomProduit, prixProduit) {
    panier.push({ nom: nomProduit, prix: prixProduit });
    mettreAJourPanier();
}

function retirerDuPanier(index) {
    panier.splice(index, 1);
    mettreAJourPanier();
}

function mettreAJourPanier() {
    const listePanier = document.getElementById('liste-panier');
    const totalElement = document.getElementById('total');
    let total = 0;

    // Effacer la liste du panier
    listePanier.innerHTML = '';

    // Ajouter chaque produit au panier
    panier.forEach((produit, index) => {
        const listItem = document.createElement('li');
        listItem.textContent = `${produit.nom} - ${produit.prix} MAD`;

        // Ajouter un bouton de suppression
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Retirer';
        removeButton.addEventListener('click', () => retirerDuPanier(index));

        listItem.appendChild(removeButton);
        listePanier.appendChild(listItem);

        // Mettre à jour le total
        total += produit.prix;
    });

    // Mettre à jour le total affiché
    totalElement.textContent = `Total: ${total} MAD`;
}
function allerAuFormulaire() {
            // Rediriger vers la page du formulaire de paiement
            window.location.href = 'formulaire.php';
        }
        </script>
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